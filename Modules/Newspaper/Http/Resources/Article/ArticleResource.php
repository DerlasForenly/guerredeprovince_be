<?php

namespace Modules\Newspaper\Http\Resources\Article;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

/**
 * Class ArticleResource
 *
 * @mixin \Modules\Newspaper\Models\Article
 */
class ArticleResource extends JsonResource
{
    /**
     * @param $request
     * @return array
     */
    public function toArray($request): array
    {
        $currentUser = auth()->userOrFail();

        return [
            'id'             => $this->id,
            'title'          => $this->title,
            'content'        => Storage::get($this->content),
            'created_at'     => Carbon::parse($this->created_at)->format('H:i d.m.Y'),
            'author'         => [
                'id'       => $this->user?->id,
                'nickname' => $this->user?->nickname,
            ],
            'newspaper'      => [
                'id'   => $this->newspaper?->id,
                'name' => $this->newspaper?->name,
            ],
            'comments_count' => $this->comments->count(),
            'category'       => $this->category?->name,
            'rating'         => $this->ratings->sum('value'),
            'voted'          => $this->ratings->where('user_id', $currentUser->id)->first()?->value,
            'avatar'         => $this->avatar,
        ];
    }
}
