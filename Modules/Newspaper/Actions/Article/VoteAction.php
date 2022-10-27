<?php

namespace Modules\Newspaper\Actions\Article;

use Illuminate\Http\JsonResponse;
use Modules\Newspaper\Models\Article;
use Modules\Newspaper\Models\Rating;

class VoteAction
{
    /**
     * @param Article $article
     * @param array $params
     * @return JsonResponse
     *
     * @TODO Check in policy that user not rated article before
     */
    public function handle(Article $article, array $params)
    {
        $user = auth()->userOrFail();

        $rating = Rating::create([
            'user_id' => $user->id,
            'article_id' => $article->id,
            'value' => $params['value'],
        ]);

        return response()->json([
            'message' => 'OK',
            'rating' => $rating->id,
        ]);
    }
}
