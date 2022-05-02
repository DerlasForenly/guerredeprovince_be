<?php

namespace Modules\Party\Actions;

use Illuminate\Http\JsonResponse;
use Modules\Party\Models\PoliticalParty;
use Modules\Request\Models\Request;
use Modules\Request\Models\RequestType;

class StoreRequestAction
{
    /**
     * @param PoliticalParty $party
     * @return JsonResponse
     */
    public function handler(PoliticalParty $party): JsonResponse
    {
        $user = auth()->userOrFail();

        Request::create([
            'sender_id' => $user->id,
            'political_party_id' => $party->id,
            'request_type_id' => RequestType::JOIN_PARTY_ID,
        ]);

        return response()->json([
            'message' => 'OK',
        ], 201);
    }
}
