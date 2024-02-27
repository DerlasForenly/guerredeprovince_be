<?php

namespace Modules\Party\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin \Modules\Party\Models\PoliticalParty
 */
class ShortPartyResource extends JsonResource
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray(Request $request): array
    {
        return [
            'id'      => $this->id,
            'name'    => $this->name,
            'tag'     => $this->tag,
            'emblem'  => $this->emblem,
            'members' => $this->politicalPartyStaff()->count(),
            'leader'  => [
                'id'       => $this->leader?->user_id,
                'nickname' => $this->leader?->user->nickname,
            ],
            'country' => [
                'id'   => $this->country_id,
                'name' => $this->country->name,
            ],
        ];
    }
}