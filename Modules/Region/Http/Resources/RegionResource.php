<?php

namespace Modules\Region\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin \Modules\Region\Models\Region
 */
class RegionResource extends JsonResource
{
    public function toArray(\Illuminate\Http\Request $request): array
    {
        return [
            'id'   => $this->id,
            'name' => $this->name,
            'country' => [
                'id' => $this->country_id,
                'name' => $this->country->name,
            ],
            'population' => 5,
        ];
    }
}