<?php

namespace Modules\Country\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Position\Models\Position;

/**
 * @mixin \Modules\Country\Models\Country
 */
class CountryResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        /**
         * @var \Modules\Country\Models\CountryStaff $leader
         */
        $leader = $this->staff->where('position_id', Position::COUNTRY_LEADER_ID)->first();

        return [
            'id'               => $this->id,
            'name'             => $this->name,
            'regions'          => $this->regions()->get(['id', 'name']),
            'color'            => $this->color,
            'border_color'     => $this->border_color,
            'capital'          => null,
            'leader'           => [
                'id'       => $leader?->user_id,
                'nickname' => $leader?->user->nickname,
            ],
            'political_system' => [
                'id'   => $this->government_type_id,
                'name' => $this->governmentType?->name,
            ],
        ];
    }
}