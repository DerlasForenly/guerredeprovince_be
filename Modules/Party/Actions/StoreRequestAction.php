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

        $request = Request::create([
            'user_id' => $user->id,
            'requestable_type' => PoliticalParty::class,
            'requestable_id' => $party->id,
            'request_type_id' => RequestType::JOIN_PARTY_ID,
        ]);

        return response()->json([
            'message' => 'OK',
            'request' => $request,
        ], 201);
    }
}
