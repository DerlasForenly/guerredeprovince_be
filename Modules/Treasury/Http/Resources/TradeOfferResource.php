<?php

namespace Modules\Treasury\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin \Modules\Treasury\Models\TradeOffer
 */
class TradeOfferResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'       => $this->id,
            'user'     => [
                'id'       => $this->user_id,
                'nickname' => $this->owner->nickname,
            ],
            'resource' => [
                'id'   => $this->resource_id,
                'name' => $this->resourceType->name,
            ],
            'quantity' => $this->quantity,
            'price'    => $this->price,
            'is_buying' => $this->is_buying,
        ];
    }
}