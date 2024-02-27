<?php

namespace Modules\Newspaper\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Newspaper\Actions\Comment\VoteAction;
use Modules\Newspaper\Http\Requests\Comment\VoteRequest;
use Modules\Newspaper\Models\Comment;

/**
 * Class VoteController
 */
class VoteController extends Controller
{
    /**
     * @param \Modules\Newspaper\Models\Comment $comment
     * @param \Modules\Newspaper\Http\Requests\Comment\VoteRequest $request
     * @param \Modules\Newspaper\Actions\Comment\VoteAction $action
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(
        Comment $comment,
        VoteRequest $request,
        VoteAction $action
    ): JsonResponse {
        return $action->handle($comment, $request->toArray());
    }
}
