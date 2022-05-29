<?php

namespace Modules\Party\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\User\Models\User;

class PartyPolicy
{
    use HandlesAuthorization;

    public function acceptRequest(User $user)
    {

    }

    public function declineRequest(User $user)
    {

    }

    public function kickUser(User $user)
    {

    }

    public function setPosition(User $user)
    {

    }
}
