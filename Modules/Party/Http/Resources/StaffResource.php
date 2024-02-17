<?php

namespace Modules\Party\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin \Modules\Party\Models\PoliticalPartyStaff
 */
class StaffResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'user'     => [
                'id'       => $this->user_id,
                'nickname' => $this->user->nickname,
                'level'    => $this->user->level,
            ],
            'position' => [
                'id'   => $this->position_id,
                'name' => $this->position->name,
            ],
            'created_at' => $this->created_at,
        ];
    }
}