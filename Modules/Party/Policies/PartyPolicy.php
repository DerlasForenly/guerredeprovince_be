<?php

namespace Modules\Party\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use Modules\Position\Models\Position;
use Modules\User\Models\User;

class PartyPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @return Response
     */
    public function acceptRequest(User $user)
    {
        // TODO bug
        $position_id = $user->political_party_staff->position_id;

        return match (true) {
            $position_id !== Position::POLITICAL_PARTY_LEADER_ID,
            $position_id !== Position::POLITICAL_PARTY_SECRETARY_ID => $this->deny('You cannot access requests'),
            default => $this->allow(),
        };
    }

    public function declineRequest(User $user)
    {

    }

    public function kickUser(User $user)
    {

    }

    public function leaveParty(User $user): Response
    {
        return match (true) {
            !$user->politicalPartyStaff => $this->deny('You are not in party'),
            default => $this->allow(),
        };
    }

    public function setPosition(User $user)
    {

    }

    public function createPoliticalParty(User $user): Response
    {
        return match (true) {
            (bool)$user->politicalPartyStaff => $this->deny('You are in party'),
            default => $this->allow(),
        };
    }

    public function destroyPoliticalParty(User $user)
    {

    }
}
