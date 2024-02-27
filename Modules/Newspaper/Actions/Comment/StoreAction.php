<?php

namespace Modules\Newspaper\Actions\Comment;

use Illuminate\Http\JsonResponse;
use Modules\Newspaper\Models\Article;
use Modules\Newspaper\Models\Comment;
use Modules\User\Models\User;

/**
 * Class StoreAction
 */
class StoreAction
{
    /**
     * @param \Modules\Newspaper\Models\Article $article
     * @param array $params
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(Article $article, array $params): JsonResponse
    {
        /**
         * @var User $user
         */
        $user = auth()->userOrFail();

        $comment = Comment::create([
            'user_id' => $user->id,
            'article_id' => $article->id,
            'content' => $params['content'],
        ]);

        return response()->json([
            'message' => 'OK',
            'comment_id' => $comment->id,
        ], 201);
    }

}
