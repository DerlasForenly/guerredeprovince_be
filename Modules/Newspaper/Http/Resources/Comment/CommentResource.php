<?php

namespace Modules\Newspaper\Http\Resources\Comment;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class CommentResource
 *
 * @mixin \Modules\Newspaper\Models\Comment
 */
class CommentResource extends JsonResource
{
    /**
     * @param $request
     * @return array
     */
    public function toArray($request): array
    {
        $currentUser = auth()->userOrFail();

        return [
            'id'          => $this->id,
            'article_id'  => $this->article_id,
            'content'     => $this->content,
            'user'        => [
                'id'       => $this->user->id,
                'nickname' => $this->user->nickname,
                'avatar'   => $this->user->avatar,
            ],
            'in_reply_to' => [
                'id'       => $this->comment?->user->id,
                'nickname' => $this->comment?->user->nickname,
            ],
            'comment_id'  => $this->comment_id,
            'updated_at'  => Carbon::parse($this->updated_at)->format('H:i d.m.Y'),
            'rating'      => $this->ratings->sum('value'),
            'voted'       => $this->ratings->where('user_id', $currentUser->id)->first()?->value,
        ];
    }
}
