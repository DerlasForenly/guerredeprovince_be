<?php

namespace Modules\Newspaper\Http\Resources\Article;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class ShortArticleInfoResource
 *
 * @mixin \Modules\Newspaper\Models\Article
 */
class ShortArticleInfoResource extends JsonResource
{
    /**
     * @param $request
     * @return array
     */
    public function toArray($request): array
    {
        $author = $this->newspaper_id ? $this->newspaper->name : $this->user->nickname;

        return [
            'id'         => $this->id,
            'title'      => $this->title,
            'author'     => $author,
            'rating'     => 15,
            'created_at' => Carbon::parse($this->created_at)->format('H:i d.m.y'),
            'language'   => $this->language,
            'category'   => $this->category,
        ];
    }
}
