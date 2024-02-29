<?php

namespace Modules\Country\Services\ElectionStrategies;

use Modules\Country\Models\Candidate;
use Modules\Country\Models\Election;
use Modules\Country\Services\ElectionStrategy;
use Modules\Position\Models\Position;

class PresidentElectionStrategy implements ElectionStrategy
{
    public function execute(Election $election): void
    {
        $winner = Candidate::withCount('votes')
            ->orderByDesc('votes_count')
            ->first();

        /**
         * @var \Modules\Country\Models\CountryStaff $leader
         */
        $leader = $election->country->staff()->where('position_id', Position::COUNTRY_LEADER_ID)->first();
        $leader->user_id = $winner->candidable_id;
        $leader->save();
    }
}