<?php

namespace Modules\Newspaper\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Newspaper\Actions\Article\VoteAction;
use Modules\Newspaper\Http\Requests\Article\VoteRequest;
use Modules\Newspaper\Models\Article;

/**
 * Class VoteController
 */
class VoteController extends Controller
{
    /**
     * @param \Modules\Newspaper\Models\Article $article
     * @param \Modules\Newspaper\Http\Requests\Article\VoteRequest $request
     * @param \Modules\Newspaper\Actions\Article\VoteAction $action
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(
        Article $article,
        VoteRequest $request,
        VoteAction $action
    ): JsonResponse {
        return $action->handle($article, $request->toArray());
    }
}
