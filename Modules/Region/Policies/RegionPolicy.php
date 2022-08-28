<?php

namespace Modules\Region\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

/**
 * Class RegionPolicy
 */
class RegionPolicy
{
    use HandlesAuthorization;

    /**
     * @return bool
     */
    public function travelTo(): bool
    {
        /* @TODO Check that user has enough money to travel */
        /* @TODO Check that user is free for action */

        return true;
    }

    /**
     * @return bool
     */
    public function cancelTraveling(): bool
    {
        /* @TODO Check that user is traveling */

        return true;
    }
}
