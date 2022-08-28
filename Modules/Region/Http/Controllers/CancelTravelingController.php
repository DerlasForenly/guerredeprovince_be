<?php

namespace Modules\Region\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Modules\Region\Actions\CancelTravelingAction;

class CancelTravelingController
{
    /**
     * @param CancelTravelingAction $action
     * @return JsonResponse
     */
    public function __invoke(
        CancelTravelingAction $action,
    ): JsonResponse {
        return $action->handle();
    }
}
