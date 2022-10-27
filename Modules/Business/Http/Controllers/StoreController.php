<?php

namespace Modules\Business\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Business\Actions\StoreAction;
use Modules\Business\Http\Requests\StoreRequest;

class StoreController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @param StoreAction $action
     * @return JsonResponse
     */
    public function __invoke(
        StoreRequest $request,
        StoreAction $action
    ): JsonResponse {
        return $action->handler($request->toArray());
    }
}
