<?php

namespace Modules\Newspaper\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class StaffResource
 *
 * @mixin \Modules\Newspaper\Models\NewspaperStaff
 */
class StaffResource extends JsonResource
{
    public function toArray($request): array
    {
        $user      = $this->user;
        $newspaper = $this->newspaper;
        $position  = $this->position;

        return [
            'user'      => [
                'id'       => $user->id,
                'nickname' => $user->nickname,
                'avatar'   => $user->avatar,
            ],
            'newspaper' => [
                'id'   => $newspaper->id,
                'name' => $newspaper->name,
            ],
            'position'  => [
                'id'          => $position->id,
                'name'        => $position->name,
                'custom_name' => $this->custom_name,
            ],
        ];
    }
}