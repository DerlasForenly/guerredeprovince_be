<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Auth\Actions\RefreshAction;

class RefreshController extends Controller
{
    /**
     * Refresh a token.
     *
     * @param RefreshAction $action
     * @return JsonResponse
     */
    public function __invoke(
        RefreshAction $action,
    ): JsonResponse
    {
        return $action->handle();
    }
}
