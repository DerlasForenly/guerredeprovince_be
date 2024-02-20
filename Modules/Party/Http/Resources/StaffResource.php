<?php

namespace Modules\Party\Http\Resources;

use Carbon\Carbon;
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
            'user'          => [
                'id'       => $this->user_id,
                'nickname' => $this->user->nickname,
                'level'    => $this->user->level,
            ],
            'position'      => [
                'id'   => $this->position_id,
                'name' => $this->position->name,
            ],
            'in_parliament' => $this->in_government,
            'created_at'    => Carbon::parse($this->created_at)->format('H:i d.m.Y'),
        ];
    }
}