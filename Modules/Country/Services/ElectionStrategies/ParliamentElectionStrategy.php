<?php

namespace Modules\Country\Services\ElectionStrategies;

use Illuminate\Support\Facades\Log;
use Modules\Country\Models\Election;
use Modules\Country\Services\ElectionStrategy;
use Modules\Party\Models\PoliticalPartyStaff;

class ParliamentElectionStrategy implements ElectionStrategy
{
    public function execute(Election $election): void
    {
        /**
         * Remove all old parliamentarians
         */
        PoliticalPartyStaff::whereHas('party', function ($query) use ($election) {
            $query->where('country_id', $election->country_id);
        })->update(['in_government' => false]);

        /**
         * Count total votes
         */
        $totalVotes = 0;
        foreach ($election->candidates as $candidate) {
            $totalVotes += $candidate->votes()->count();
        }

        foreach ($election->candidates()->with('candidable.staff')->get() as $candidate) {
            $votes = $candidate->votes()->count();

            if ($votes !== 0) {
                $percentages = floor($votes / $totalVotes * 100);
                $seats       = floor($election->country->parliament_size / 100 * $percentages);

                $candidate->candidable->staff()->latest()->take($seats)->update(['in_government' => true]);
                Log::info('Party get seats in parliament.', [
                    'party'       => $candidate->candidable_id,
                    'seats'       => $seats,
                    'votes'       => $votes,
                    'percentages' => $percentages,
                ]);
            }
        };
    }
}