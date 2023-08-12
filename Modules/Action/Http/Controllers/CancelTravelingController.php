<?php

namespace Modules\Action\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Modules\Region\Actions\CancelTravelingAction;

class CancelTravelingController
{
    /**
     * @param CancelTravelingAction $action
     * @return JsonResponse
     */
    public function __invoke(): JsonResponse
    {
        $user = auth()->userOrFail();

        return response()->json([
            'message' => 'OK',
        ]);
    }
}
