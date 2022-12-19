<?php

namespace Modules\Newspaper\Actions\Article;

use Illuminate\Http\JsonResponse;
use Modules\Newspaper\Models\Article;
use Modules\Newspaper\Models\Rating;
use Modules\User\Models\User;

class VoteAction
{
    /**
     * @param Article $article
     * @param array $params
     * @return JsonResponse
     *
     * @TODO Check in policy that user not rated article before
     */
    public function handle(Article $article, array $params): JsonResponse
    {
        /**
         * @var User $user
         */
        $user = auth()->userOrFail();

        $rating = Rating::updateOrCreate(
            [
                'user_id'    => $user->id,
                'article_id' => $article->id,
            ],
            [
                'value' => $params['value'],
            ]
        );

        $article->refresh();
        $rating->refresh();

        return response()->json([
            'message'       => 'OK',
            'rating_id'     => $rating->id,
            'voted'         => $rating->value,
            'actual_rating' => $article->ratings->sum('value'),
        ]);
    }
}
