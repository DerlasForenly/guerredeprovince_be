<?php

namespace Modules\Country\Services\LawStrategies;

use Illuminate\Support\Facades\DB;
use Modules\Country\Jobs\FinishElectionJob;
use Modules\Country\Models\Election;
use Modules\Country\Models\ElectionType;
use Modules\Country\Models\Law;
use Modules\Country\Services\LawStrategy;
use Modules\Status\Models\Status;

class StartPresidentElectionStrategy implements LawStrategy
{
    public function execute(Law $law): void
    {
        DB::beginTransaction();

        $election = Election::create([
            'type_id'    => ElectionType::PRESIDENT_ELECTION,
            'country_id' => $law->country_id,
            'status_id'  => Status::IN_PROCESS_ID,
        ]);

        FinishElectionJob::dispatch($election)
            ->delay(now()->addHours(2));

        DB::commit();
    }
}