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

    /**
     * @param User $user
     * @param PoliticalParty $party
     * @return Response
     */
    public function acceptRequest(User $user, PoliticalParty $party): Response
    {
        /* @TODO Refactor to check access for accepting */
        $secretary = $party->politicalPartyStaff->where('position_id', Position::POLITICAL_PARTY_SECRETARY_ID);
        $secretary = $secretary->where('user_id', $user->id)->first();

        return match (true) {
            $party->leader->user_id === $user->id, (bool)$secretary => $this->allow(),
            default => $this->deny('You cannot access requests'),
        };
    }

    /**
     * @param User $user
     * @param PoliticalParty $party
     * @return Response
     */
    public function createRequest(User $user, PoliticalParty $party): Response
    {
        return match (true) {
            (bool)$user->politicalPartyStaff => $this->deny('You are in party'),
            (bool)$party->requests->where('user_id', $user->id)->first() => $this->deny('You already sent an request'),
            default => $this->allow(),
        };
    }

    public function declineRequest(User $user)
    {

    }

    public function kick(User $user)
    {

    }

    public function leave(User $user): Response
    {
        return match (true) {
            !$user->politicalPartyStaff => $this->deny('You are not in party'),
            default => $this->allow(),
        };
    }

    public function setPosition(User $user)
    {

    }

    public function create(User $user): Response
    {
        return match (true) {
            (bool)$user->politicalPartyStaff => $this->deny('You are in party'),
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
