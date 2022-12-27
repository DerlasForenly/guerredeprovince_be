<?php

namespace Modules\Newspaper\Actions\Comment;

use Illuminate\Http\JsonResponse;
use Modules\Newspaper\Models\Comment;
use Modules\Newspaper\Models\Rating;
use Modules\User\Models\User;

class VoteAction
{
    /**
     * @param \Modules\Newspaper\Models\Comment $comment
     * @param array $params
     * @return JsonResponse
     *
     * @TODO Check in policy that user not rated article before
     */
    public function handle(Comment $comment, array $params): JsonResponse
    {
        /**
         * @var User $user
         */
        $user = auth()->userOrFail();

        $rating = Rating::updateOrCreate(
            [
                'user_id'    => $user->id,
                'comment_id' => $comment->id,
            ],
            [
                'value' => $params['value'],
            ]
        );

        $comment->refresh();
        $rating->refresh();

        return response()->json([
            'message'       => 'OK',
            'rating_id'     => $rating->id,
            'comment_id'    => $comment->id,
            'voted'         => $rating->value,
            'actual_rating' => $comment->ratings->sum('value'),
        ]);
    }
}
