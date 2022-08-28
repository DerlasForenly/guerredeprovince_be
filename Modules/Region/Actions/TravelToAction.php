<?php

namespace Modules\Region\Actions;

use Modules\Action\Models\Action;
use Modules\Action\Models\ActionType;
use Modules\Region\Models\Region;
use Modules\User\Models\User;

/**
 * Class TravelToAction
 */
class TravelToAction
{
    public function handle(Region $region)
    {
        /**
         * @var User $user
         */
        $user = auth()->userOrFail();

        $user->current_region_id = $region->id;

        return Action::create([
            'user_id'        => $user->id,
            'action_type_id' => ActionType::TRAVELING_ID,
            'time'           => $this->calculateTravelTime(Region::find($user->current_region_id), $region),
        ]);
    }

    /**
     * @param Region $from
     * @param Region $to
     * @return int
     */
    private function calculateTravelTime(Region $from, Region $to): int
    {
        /* @TODO Create logic for distance time and move it in service */
        return 15;
    }
}
