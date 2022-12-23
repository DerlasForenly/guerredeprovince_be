<?php

namespace Modules\Newspaper\Http\Controllers\Newspaper;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Newspaper\Actions\Newspaper\StoreAction;
use Modules\Newspaper\Http\Requests\Newspaper\StoreRequest;

class StoreController extends Controller
{
    /**
     * @param \Modules\Newspaper\Actions\Newspaper\StoreAction $action
     * @param \Modules\Newspaper\Http\Requests\Newspaper\StoreRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(
        StoreAction $action,
        StoreRequest $request
    ): JsonResponse {
        return $action->handle($request->toArray());
    }
}
