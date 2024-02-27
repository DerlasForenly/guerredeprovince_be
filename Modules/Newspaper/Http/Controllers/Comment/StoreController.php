<?php

namespace Modules\Newspaper\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Newspaper\Actions\Comment\StoreAction;
use Modules\Newspaper\Http\Requests\Comment\StoreRequest;
use Modules\Newspaper\Models\Article;

/**
 * Class StoreController
 */
class StoreController extends Controller
{
    /**
     * @param \Modules\Newspaper\Models\Article $article
     * @param \Modules\Newspaper\Http\Requests\Comment\StoreRequest $request
     * @param \Modules\Newspaper\Actions\Comment\StoreAction $action
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(
        Article $article,
        StoreRequest $request,
        StoreAction $action
    ): JsonResponse {
        return $action->handler($article, $request->toArray());
    }
}
