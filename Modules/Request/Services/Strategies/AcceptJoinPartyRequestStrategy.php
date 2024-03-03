<?php

namespace Modules\Request\Services\Strategies;

use Modules\Party\Models\PoliticalPartyStaff;
use Modules\Position\Models\Position;
use Modules\Request\Models\Request;
use Modules\Request\Services\AcceptStrategy;

class AcceptJoinPartyRequestStrategy implements AcceptStrategy
{
    public function execute(Request $request): void
    {
        PoliticalPartyStaff::create([
            'user_id'            => $request->user_id,
            'political_party_id' => $request->requestable_id,
            'position_id'        => Position::POLITICAL_PARTY_MEMBER_ID,
        ]);
    }
}