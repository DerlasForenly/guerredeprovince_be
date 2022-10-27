<?php

namespace Modules\Newspaper\Actions\Article;

use Illuminate\Http\JsonResponse;
use Modules\Newspaper\Models\Article;

/**
 * Class StoreAction
 */
class StoreAction
{
    public function handle(array $params): JsonResponse
    {
        $user = auth()->userOrFail();

        $article = Article::create(array_merge($params, [
            'user_id' => $user->id,
        ]));

        return response()->json([
            'message'    => 'OK',
            'article_id' => $article->id,
        ], 201);
    }
}
