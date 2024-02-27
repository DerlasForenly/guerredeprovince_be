<?php

namespace Modules\Newspaper\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Newspaper\Actions\Article\StoreAction;
use Modules\Newspaper\Http\Requests\Article\StoreRequest;

class StoreController extends Controller
{
    /**
     * Create a new article
     *
     * @param StoreRequest $request
     * @param StoreAction $action
     * @return JsonResponse
     */
    public function __invoke(
        StoreRequest $request,
        StoreAction $action
    ): JsonResponse {
        return $action->handle($request->toArray());
    }
}
