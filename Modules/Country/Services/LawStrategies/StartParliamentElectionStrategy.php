<?php

namespace Modules\Country\Services\LawStrategies;

use Illuminate\Support\Facades\Log;
use Modules\Country\Jobs\FinishElectionJob;
use Modules\Country\Models\Election;
use Modules\Country\Models\Candidate;
use Modules\Country\Models\ElectionType;
use Modules\Country\Models\Law;
use Modules\Country\Services\LawStrategy;
use Modules\Party\Models\PoliticalParty;
use Modules\Party\Models\PoliticalPartyStaff;
use Modules\Status\Models\Status;
use Modules\User\Models\User;

class StartParliamentElectionStrategy implements LawStrategy
{
    public function execute(Law $law): void
    {
        $election = Election::create([
            'type_id'    => ElectionType::where('name', ElectionType::PARLIAMENT_ELECTION)->first()->id,
            'country_id' => $law->country_id,
            'status_id'  => Status::IN_PROCESS_ID,
        ]);

        foreach ($law->country->parties()->get() as $party) {
            $partyElection = Election::create([
                'type_id'   => ElectionType::where('name', ElectionType::INSIDE_PARTY_ELECTION)->first()->id,
                'party_id'  => $party->id,
                'status_id' => Status::IN_PROCESS_ID,
            ]);

            foreach (PoliticalParty::find($party->id)->staff as $user) {
                Candidate::create([
                    'election_id'     => $partyElection->id,
                    'candidable_id'   => $user->user_id,
                    'candidable_type' => User::class,
                ]);
            }

            FinishElectionJob::dispatch($partyElection)
                ->delay(now()->addSeconds(15));

            Candidate::create([
                'election_id'     => $election->id,
                'candidable_id'   => $party->id,
                'candidable_type' => PoliticalParty::class,
            ]);
        }

        FinishElectionJob::dispatch($election)
            ->delay(now()->addSeconds(15));
    }
}