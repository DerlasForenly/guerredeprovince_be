<?php

namespace Modules\Request\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use Modules\Party\Models\PoliticalParty;
use Modules\Position\Models\Position;
use Modules\Request\Models\Request;
use Modules\Status\Models\Status;
use Modules\User\Models\User;

/**
 * Class PoliticalPartyPolicy
 */
class RequestPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param PoliticalParty $party
     * @return Response
     */
    public function acceptRequest(User $user, Request $request): Response
    {
        /* @TODO Refactor to check access for accepting */
        /* @TODO Refactor to check user already in some party */
        $isLeader     = $request->requestable->leader->user_id === $user->id;
        $isSecretary  = false;
        $isInProgress = $request->status_id === Status::IN_PROCESS_ID;

        return match (true) {
            ($isLeader || $isSecretary) && $isInProgress => $this->allow(),
            default => $this->deny('You cannot access requests'),
        };
    }

    /**
     * @param User $user
     * @param PoliticalParty $party
     * @return Response
     */
    public function createRequest(User $user): Response
    {
        return match (true) {
            (bool) $user->politicalPartyStaff => $this->deny('You are in the party already.'),
            false => $this->deny('You already sent an request'),
            default => $this->allow(),
        };
    }

    /**
     * @param \Modules\User\Models\User $user
     * @return \Illuminate\Auth\Access\Response
     */
    public function declineRequest(User $user): Response
    {
        return match (true) {
            default => $this->allow(),
        };
    }
}
