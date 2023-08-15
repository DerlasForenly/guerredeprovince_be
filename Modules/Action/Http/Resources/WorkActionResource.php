<?php

namespace Modules\Action\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Action\Services\ActionCalculationsService;

/**
 * Class ActionResource
 *
 * @mixin \Modules\Action\Models\WorkAction $action
 */
class WorkActionResource extends JsonResource
{
    /**
     * @param $request
     * @return array
     */
    public function toArray($request): array
    {
        $remainingTime = ActionCalculationsService::getRemainingTimeInSec($this->created_at, $this->time, true);

        return [
            'time'           => $this->time,
            'id'             => $this->id,
            'user_id'        => $this->user_id,
            'start_date'     => $this->created_at,
            'remaining_time' => max($remainingTime, 0),
            'business_id'    => $this->business_id,
        ];
    }
}