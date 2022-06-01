<?php

namespace Modules\Party\Actions;

use Illuminate\Http\JsonResponse;
use Modules\Party\Models\PoliticalParty;
use Modules\Party\Models\PoliticalPartyStaff;
use Modules\Position\Models\Position;

class StoreAction
{
    public function handle(array $request): JsonResponse
    {
        $user = auth()->userOrFail();

        $party = PoliticalParty::create($request);

        $partyStaff = PoliticalPartyStaff::create([
            'user_id'            => $user->id,
            'political_party_id' => $party->id,
            'position_id'        => Position::POLITICAL_PARTY_LEADER_ID,
        ]);

        return response()->json([
            'message' => 'Party has been created',
            'party'   => $party,
            'staff'   => $partyStaff,
        ], 201);
    }
}
