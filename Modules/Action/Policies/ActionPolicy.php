<?php

namespace Modules\Action\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use Modules\Region\Models\Region;
use Modules\User\Models\User;

/**
 * Class RegionPolicy
 */
class ActionPolicy
{
    use HandlesAuthorization;

    /**
     * @return \Illuminate\Auth\Access\Response
     */
    public function travelTo(User $user, Region $region): Response
    {
        /**
         * @TODO Check other rules
         */
        return match (true) {
            (bool) $user->action => $this->deny('You have active or unfinished action'),
            (bool) $user->inProcessMove => $this->deny('You have active move'),
            default => $this->allow(),
        };
    }

    /**
     * @return bool
     */
    public function cancelTraveling(): bool
    {
        /* @TODO Check that user is traveling */

        return true;
    }

    /**
     * @param User $user
     * @return Response
     */
    public function work(User $user): Response
    {
        return match (true) {
            (bool)$user->action => $this->deny('You are busy right now'),
            !$user->employee => $this->deny('You dont have job any'),
            default => $this->allow(),
        };
    }
}
