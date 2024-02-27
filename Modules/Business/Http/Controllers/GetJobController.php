<?php

namespace Modules\Business\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Business\Actions\GetJobAction;
use Modules\Business\Models\Business;

class GetJobController extends Controller
{
    /**
     * Get job
     *
     * @param GetJobAction $action
     * @param Business $business
     * @return JsonResponse
     */
    public function __invoke(
        GetJobAction $action,
        Business $business
    ): JsonResponse {
        return $action->handler($business);
    }
}
