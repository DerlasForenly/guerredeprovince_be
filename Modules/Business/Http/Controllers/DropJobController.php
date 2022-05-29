<?php

namespace Modules\Business\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
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
