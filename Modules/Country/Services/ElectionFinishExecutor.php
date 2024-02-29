<?php

namespace Modules\Country\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Modules\Country\Models\Election;
use Modules\Country\Models\ElectionType;
use Modules\Country\Services\ElectionStrategies\ParliamentElectionStrategy;
use Modules\Country\Services\ElectionStrategies\PartyElectionStrategy;
use Modules\Country\Services\ElectionStrategies\PresidentElectionStrategy;
use Modules\Status\Models\Status;

class ElectionFinishExecutor
{
    const STRATEGIES = [
        ElectionType::PRESIDENT_ELECTION  => PresidentElectionStrategy::class,
        ElectionType::PARLIAMENT_ELECTION => ParliamentElectionStrategy::class,
        ElectionType::INSIDE_PARTY_ELECTION => PartyElectionStrategy::class,
    ];

    /**
     * @var ElectionStrategy The Context maintains a reference to one of the Strategy
     * objects. The Context does not know the concrete class of a strategy. It
     * should work with all strategies via the Strategy interface.
     */
    protected ElectionStrategy $strategy;

    /**
     * @param \Modules\Country\Models\Election $election
     */
    public function __construct(protected Election $election)
    {
        $className      = self::STRATEGIES[$election->type->name];
        $this->strategy = new $className($election);
    }

    /**
     * The Context delegates some work to the Strategy object instead of
     * implementing multiple versions of the algorithm on its own.
     *
     * @return void
     */
    public function execute(): void
    {
        Log::info('Started applying election changes.', ['election_id' => $this->election->id]);
        DB::beginTransaction();

        $this->strategy->execute($this->election);

        $this->election->status_id = Status::FINISHED_ID;
        $this->election->save();

        DB::commit();
        Log::info('Finished applying election changes.', ['election_id' => $this->election->id]);
    }
}