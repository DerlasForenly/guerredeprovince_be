<?php

namespace Modules\Business\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Business\Actions\WorkAction;
use Modules\Business\Http\Requests\WorkRequest;

class WorkController extends Controller
{
    public function __invoke(
        WorkRequest $request,
        WorkAction $action
    ): JsonResponse {
        return $action->handle($request);
    }
}
