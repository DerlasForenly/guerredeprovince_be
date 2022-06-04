<?php

namespace Modules\Party\Actions;

use Modules\Party\Models\PoliticalParty;
use Modules\Party\Models\PoliticalPartyStaff;
use Modules\Request\Models\Request;

class AcceptRequestAction
{
    public function handler(PoliticalParty $party, Request $request)
    {
        $member = PoliticalPartyStaff::factory()
            ->politicalParty($party->id)
            ->user($request->user_id)
            ->create();

        $request->delete();

        return response()->json([
            'message' => 'OK',
            'member' => $member,
        ], 201);
    }
}
