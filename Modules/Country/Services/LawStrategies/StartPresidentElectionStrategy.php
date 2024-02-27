<?php

namespace Modules\Country\Services\LawStrategies;

use Modules\Country\Jobs\FinishElectionJob;
use Modules\Country\Models\Election;
use Modules\Country\Models\ElectionCandidate;
use Modules\Country\Models\ElectionType;
use Modules\Country\Models\Law;
use Modules\Country\Services\LawStrategy;
use Modules\Status\Models\Status;
use Modules\User\Models\User;

class StartPresidentElectionStrategy implements LawStrategy
{
    public function execute(Law $law): void
    {
        $election = Election::create([
            'type_id'    => ElectionType::where('name', ElectionType::PRESIDENT_ELECTION)->first()->id,
            'country_id' => $law->country_id,
            'status_id'  => Status::IN_PROCESS_ID,
        ]);

        foreach ($law->country->politicalParties as $party) {
            ElectionCandidate::create([
                'election_id'     => $election->id,
                'candidable_id'   => $party->leader->user_id,
                'candidable_type' => User::class,
            ]);
        }

        FinishElectionJob::dispatch($election)
            ->delay(now()->addHours(2));
    }
}