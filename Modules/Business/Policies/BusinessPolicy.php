<?php

namespace Modules\Business\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\User\Models\User;
use Illuminate\Auth\Access\Response;

class BusinessPolicy
{
    use HandlesAuthorization;

    public function getJob(User $user): Response
    {
        return $user->job == null ? Response::allow() : Response::deny('You have job already');
    }
}
