<?php

namespace Modules\Party\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin \Modules\Request\Models\Request
 */
class RequestResource extends JsonResource
{
    public function toArray(\Illuminate\Http\Request $request): array
    {
        return [
            'id'         => $this->id,
            'user'       => [
                'id'       => $this->user_id,
                'nickname' => $this->user->nickname,
                'level'    => $this->user->level,
            ],
            'party_id'   => $this->requestable_id,
            'created_at' => $this->created_at,
        ];
    }
}