<?php

namespace Modules\Action\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Action\Services\ActionCalculationsService;
use Modules\Region\Http\Resources\WorldMapRegionResource;

/**
 * @mixin \Modules\Action\Models\MoveAction
 */
class MoveActionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'start_region_id' => $this->start_region_id,
            'end_region_id'   => $this->end_region_id,
            'status_id'       => $this->status_id,
            'user_id'         => $this->user_id,
            'time'            => $this->time,
            'price'           => 0,
            'remaining_time'  => ActionCalculationsService::getRemainingTimeInSec($this->created_at, $this->time, true),
            'end_region'      => new WorldMapRegionResource($this->endRegion),
            'start_region'    => new WorldMapRegionResource($this->startRegion),
        ];
    }
}