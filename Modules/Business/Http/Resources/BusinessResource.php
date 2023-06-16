<?php

namespace Modules\Business\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class BusinessResource
 *
 * @mixin \Modules\Business\Models\Business
 */
class BusinessResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id'             => $this->id,
            'name'           => $this->name,
            'owner_id'       => $this->user_id,
            'description'    => $this->description,
            'emblem'         => $this->emblem,
            'resource_id'    => $this->resource_id,
            'region'         => [
                'id'     => $this->region_id,
                'name'   => $this->region->name,
                'emblem' => $this->region->emblem,
            ],
            'salary_type_id' => $this->salary_type_id,
            'exp'            => $this->exp,
            'lvl'            => 15,
            'corporation'    => $this->corporation_id ? [
                'id'   => $this->corporation_id,
                'name' => $this->corporation->name,
            ] : null,
        ];
    }
}