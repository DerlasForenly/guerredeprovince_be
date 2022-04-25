<?php

namespace Modules\Business\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Business\Actions\DropJobAction;

class DropJobController extends Controller
{
    /**
     * @param DropJobAction $action
     * @return JsonResponse
     */
    public function __invoke(
        DropJobAction $action
    ): JsonResponse {
        return $action->handle();
    }
}
