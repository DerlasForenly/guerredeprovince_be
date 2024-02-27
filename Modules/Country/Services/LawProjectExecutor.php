<?php

namespace Modules\Country\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Modules\Country\Models\Law;
use Modules\Country\Models\LawType;
use Modules\Country\Services\LawStrategies\ChangeEmblemStrategy;
use Modules\Country\Services\LawStrategies\ChangeNameStrategy;
use Modules\Country\Services\LawStrategies\StartPresidentElectionStrategy;
use Modules\Status\Models\Status;

class LawProjectExecutor
{
    const STRATEGIES = [
        LawType::CHANGE_COUNTRY_EMBLEM    => ChangeEmblemStrategy::class,
        LawType::CHANGE_COUNTRY_NAME      => ChangeNameStrategy::class,
        LawType::START_PRESIDENT_ELECTION => StartPresidentElectionStrategy::class,
    ];

    /**
     * @var LawStrategy The Context maintains a reference to one of the Strategy
     * objects. The Context does not know the concrete class of a strategy. It
     * should work with all strategies via the Strategy interface.
     */
    protected LawStrategy $strategy;

    /**
     * @param \Modules\Country\Models\Law $law
     */
    public function __construct(protected Law $law)
    {
        $className      = self::STRATEGIES[$law->lawType->name];
        $this->strategy = new $className($law);
    }

    /**
     * The Context delegates some work to the Strategy object instead of
     * implementing multiple versions of the algorithm on its own.
     *
     * @return void
     */
    public function execute(): void
    {
        if (!$this->isLawAcceptable() && $this->law->status_id === Status::IN_PROCESS_ID) {
            Log::info('Law does not meet the requirements.', ['law_id' => $this->law->id]);
            $this->law->status_id = Status::DECLINED_ID;
            $this->law->save();

            return;
        }

        Log::info('Start executing law project.', ['law_id' => $this->law->id]);
        DB::beginTransaction();

        $this->strategy->execute($this->law);

        $this->law->status_id = Status::ACCEPTED_ID;
        $this->law->save();

        DB::commit();
        Log::info('Finished executing law project.', ['law_id' => $this->law->id]);
    }

    /**
     * @TODO Update to pass only if >50% of parliamentarians voted this project
     *
     * @return bool
     */
    public function isLawAcceptable(): bool
    {
        $countAllVotes = $this->law->votes()->count();
        $countAcceptVotes = $this->law->votes()->where('value', true)->count();
        $countDeclineVotes = $this->law->votes()->where('value', false)->count();

        return $countAllVotes > 0 && $countAcceptVotes > $countDeclineVotes;
    }
}