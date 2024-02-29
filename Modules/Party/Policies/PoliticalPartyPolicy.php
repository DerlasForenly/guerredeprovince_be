<?php

namespace Modules\Party\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use Modules\Party\Models\PoliticalParty;
use Modules\Position\Models\Position;
use Modules\User\Models\User;

/**
 * Class PoliticalPartyPolicy
 */
class PoliticalPartyPolicy
{
    use HandlesAuthorization;

    public function kick(User $user)
    {

    }

    public function leave(User $user): Response
    {
        return match (true) {
            !$user->staff => $this->deny('You are not in party'),
            default => $this->allow(),
        };
    }

    public function setPosition(User $user)
    {

    }

    public function create(User $user): Response
    {
        return match (true) {
            (bool)$user->staff => $this->deny('You are in the party already.'),
            default => $this->allow(),
        };
    }

    public function destroy(User $user, PoliticalParty $party): Response
    {
        return match (true) {
            $user->id === $party->leader->user_id => $this->allow(),
            default => $this->deny('You dont have permissions'),
        };
    }
}
