<?php

namespace Modules\User\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use Modules\User\Models\User;

/**
 * Class UserPolicy
 */
class UserPolicy
{
    use HandlesAuthorization;

    /**
     * @param \Modules\User\Models\User $currentUser
     * @param \Modules\User\Models\User $user
     * @return \Illuminate\Auth\Access\Response
     */
    public function update(User $currentUser, User $user): Response
    {
        return match (true) {
            $currentUser->id !== $user->id => $this->deny('You are not allowed.'),
            default => $this->allow(),
        };
    }
}
