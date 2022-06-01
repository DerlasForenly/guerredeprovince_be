<?php

namespace Modules\Party\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Party\Models\PoliticalParty;
use Modules\Party\Models\PoliticalPartyStaff;
use Modules\Position\Models\Position;
use Modules\Request\Models\Request;

class AcceptRequestController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(PoliticalParty $party, Request $request): JsonResponse
    {
        $member = PoliticalPartyStaff::factory()
            ->politicalParty($party->id)
            ->user($request->sender_id)
            ->position(Position::POLITICAL_PARTY_MEMBER_ID)
            ->create();

        $request->delete();

        return response()->json([
            'message' => 'OK',
            'member' => $member,
        ], 200);
    }
}
