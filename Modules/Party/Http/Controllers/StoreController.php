<?php

namespace Modules\Party\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Party\Actions\StoreAction;
use Modules\Party\Http\Requests\StoreRequest;

class StoreController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAction $action
     * @param StoreRequest $request
     * @return JsonResponse
     */
    public function __invoke(
        StoreAction $action,
        StoreRequest $request
    ): JsonResponse {
        return $action->handle($request->toArray());
    }
}
