<?php

namespace Modules\Treasury\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Treasury\Models\Treasury\Treasury;

/**
 * Class MyTreasuryResource
 *
 * @mixin Treasury $treasury
 */
class MyTreasuryResource extends JsonResource
{
    /**
     * @param $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id'          => $this->id,
            'resource_id' => $this->resource_id,
            'name'        => $this->resourceType->name,
            'quantity'    => $this->quantity,
            'size'        => $this->size
        ];
    }
}
