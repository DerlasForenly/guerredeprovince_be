<?php

namespace Modules\Country\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin \Modules\Country\Models\Election
 */
class ElectionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'              => $this->id,
            'country'         => $this->country()->get(['id', 'name']),
            'political_party' => $this->party()->get(['id', 'name']),
            'type'            => $this->type()->get(['id', 'name']),
            'candidates'      => [],
        ];
    }
}