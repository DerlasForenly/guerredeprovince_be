<?php

namespace Modules\User\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\User\Models\User;

/**
 * Class UserResource
 *
 * @mixin User $user
 */
class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'                     => $this->id,
            'nickname'               => $this->nickname,
            'avatar'                 => $this->avatar ?: 'avatars/default.jpg',
            'current_region'         => [
                'id'      => $this->current_region_id,
                'name'    => $this->currentRegion->name,
                'country' => [
                    'id'      => $this->currentRegion->country_id,
                    'name'    => $this->currentRegion->country?->name,
                ],
            ],
            'exp'                    => $this->exp,
            'level'                  => $this->level,
            'last_activity'          => null,
            'nation'                 => [
                'id'   => $this->nation_id,
                'name' => $this->nation?->name,
            ],
            'political_view_id'      => null,
            'premium'                => false,
            'registration_region_id' => null,
            'role_id'                => null,
            'newspaper_id'           => $this->newspaperStaff?->newspaper_id,
            'job_business_id'        => $this->employee?->business_id,
        ];
    }
}