<?php

namespace Modules\Party\Actions;

use Illuminate\Http\JsonResponse;
use Modules\Party\Models\PoliticalParty;

class DeleteAction
{
    public function handler(PoliticalParty $party): JsonResponse
    {
        $party->delete();

        return response()->json([
            'message' => 'Ok, but',
        ]);
    }
}
