<?php

namespace Modules\Newspaper\Http\Resources\Article;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

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
        return [
            'title'          => $this->title,
            'content'        => $this->content,
            'created_at'     => Carbon::parse($this->created_at)->format('H:i d.m.Y'),
            'author'         => $this->user->nickname,
            'newspaper'      => $this->newspaper?->name,
            'comments_count' => 0,
            'category'       => $this->category?->name,
            'rating'         => 15,
        ];
    }
}
