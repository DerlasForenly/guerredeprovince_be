<?php

namespace Modules\Business\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\Business\Models\Business;
use Modules\User\Models\User;
use Illuminate\Auth\Access\Response;

class BusinessPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param Business $business
     * @return Response
     */
    public function getJob(User $user, Business $business): Response
    {
        return match (true) {
            $user->job => $this->deny('You have job already'),
            default => $this->allow(),
        };
    }

    /**
     * @param User $user
     * @return Response
     */
    public function dropJob(User $user): Response
    {
        return match (true) {
            !$user->job => $this->deny('You dont have job any'),
            default => $this->allow(),
        };
    }

    public function kickUser(User $user)
    {

    }

    public function setPosition(User $user)
    {

    }
}
