<?php

namespace Modules\Party\Actions;

use Illuminate\Http\JsonResponse;

class LeavePartyAction
{
    public function handle(): JsonResponse
    {
        return response()->json([
            'message' => 'OK, but...'
        ], 200);
    }
}
