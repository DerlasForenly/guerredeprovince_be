<?php

namespace Modules\Business\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Business\Models\SalaryType;

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
            'id'              => $this->id,
            'name'            => $this->name,
            'owner'           => [
                'id'       => $this->user_id,
                'nickname' => $this->user->nickname,
            ],
            'description'     => $this->description,
            'emblem'          => $this->emblem,
            'resource'        => [
                'id' => $this->resource_id,
            ],
            'region'          => [
                'id'     => $this->region_id,
                'name'   => $this->region->name,
                'emblem' => $this->region->emblem,
            ],
            'salary'          => $this->salary_type_id === SalaryType::RESOURCE_ID ? $this->salary . '%' : $this->salary . '$',
            'expected_salary' => 1355,
            'exp'             => $this->exp,
            'lvl'             => 15,
            'corporation'     => $this->corporation_id ? [
                'id'   => $this->corporation_id,
                'name' => $this->corporation->name,
            ] : null,
        ];
    }
}