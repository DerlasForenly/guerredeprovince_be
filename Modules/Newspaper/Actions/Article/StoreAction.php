<?php

namespace Modules\Newspaper\Actions\Article;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use Modules\Newspaper\Models\Article;
use Modules\Newspaper\Models\Category;

/**
 * Class StoreAction
 */
class StoreAction
{
    public function handle(array $params): JsonResponse
    {
        $user = auth()->userOrFail();

        $content = $params['content'];
        unset($params['content']);

        $article = new Article(array_merge($params, [
            'user_id' => $user->id,
        ]));

        $article->save();
        $article->refresh();

        $fileName = "articles/texts/{$article->id}_content.txt";
        Storage::put($fileName, $content);
        $article->content = $fileName;

        $article->save();
        $article->refresh();

        return response()->json([
            'message'    => 'OK',
            'article_id' => $article->id,
        ], 201);
    }
}
