<?php

namespace Modules\Region\Actions;

use Illuminate\Http\JsonResponse;
use Modules\User\Models\User;

/**
 * Class CancelTravelingAction
 */
class CancelTravelingAction
{
    /**
     * @TODO Add money refund
     * @return JsonResponse
     */
    public function handle(): JsonResponse
    {
        /**
         * @var User $user
         */
        $user = auth()->userOrFail();

        $user->action->delete();

        return response()->json([
            'message' => 'OK',
        ], 200);
    }
}
