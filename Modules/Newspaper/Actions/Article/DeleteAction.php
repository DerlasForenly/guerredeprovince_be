<?php

namespace Modules\Newspaper\Actions\Article;

use Illuminate\Http\JsonResponse;
use Modules\Newspaper\Models\Article;

class DeleteAction
{
    public function handle(Article $article): JsonResponse
    {
        $article->delete();

        return response()->json([
            'message' => 'OK',
        ]);
    }
}
