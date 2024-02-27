<?php

namespace Modules\Country\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use Modules\Country\Models\Country;
use Modules\User\Models\User;

class CountryPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param Country $country
     * @return Response
     */
    public function acceptRequest(User $user, Country $country): Response
    {
        return $this->allow();
    }

    public function createRequest(User $user, Country $country): Response
    {
        return $this->allow();
    }

    public function declineRequest(User $user): Response
    {
        return $this->allow();
    }
}
