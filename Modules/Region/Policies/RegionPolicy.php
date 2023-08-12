<?php

namespace Modules\Region\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use Modules\Region\Models\Region;
use Modules\User\Models\User;

/**
 * Class RegionPolicy
 */
class RegionPolicy
{
    use HandlesAuthorization;
}
