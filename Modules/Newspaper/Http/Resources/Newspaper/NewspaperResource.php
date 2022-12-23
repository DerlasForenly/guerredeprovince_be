<?php

namespace Modules\Newspaper\Http\Resources\Newspaper;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Newspaper\Models\NewspaperStaff;
use Modules\User\Models\User;

/**
 * Class NewspaperResource
 *
 * @mixin \Modules\Newspaper\Models\Newspaper
 */
class NewspaperResource extends JsonResource
{
    /**
     * @param $request
     * @return array
     */
    public function toArray($request): array
    {
        /**
         * @var User $user
         */
        $user = auth()->userOrFail();

        /**
         * @var NewspaperStaff $staff
         */
        $staff        = $this->staff->where('user_id', $user->id)->first();
        $positionName = $staff ? $staff->custom_name ? $staff->custom_name : $staff->position->name : null;

        $rating = 0;
        /**
         * @var \Modules\Newspaper\Models\Article $article
         */
        foreach ($this->articles as $article) {
            $rating += $article->ratings->sum('value');
        }

        $owner = $this->owner->first()?->user;

        return [
            'id'             => $this->id,
            'name'           => $this->name,
            'position'       => $positionName,
            'rating'         => $rating,
            'owner'          => [
                'id'       => $owner?->id,
                'nickname' => $owner?->nickname,
            ],
            'total_articles' => $this->articles->count(),
            'count_staff'    => $this->staff->count(),
            'description'    => $this->description,
            'best_article'   => [
                'id'    => null,
                'title' => '...',
            ],
            'worst_article'  => [
                'id'    => null,
                'title' => '...',
            ],
            'created_at'     => Carbon::parse($this->created_at)->format('H:i d.m.Y'),
            'subscribed'     => (bool) $user->subscriptions->where('newspaper_id', $this->id)->first(),
            'avatar'         => $this->avatar ?: 'avatars/default.jpg',
        ];
    }
}
