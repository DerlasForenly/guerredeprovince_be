<?php

namespace Modules\Action\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Action\Services\ActionCalculationsService;

/**
 * Class ActionResource
 *
 * @mixin \Modules\Action\Models\Action $action
 */
class ActionResource extends JsonResource
{
    /**
     * @param $request
     * @return array
     */
    public function toArray($request): array
    {
        $remainingTime = ActionCalculationsService::getRemainingTimeInSec($this->created_at, $this->time);

        return [
            'time'           => $this->time,
            'id'             => $this->user_id,
            'user_id'        => $this->user_id,
            'start_date'     => $this->created_at,
            'action_type_id' => $this->action_type_id,
            'remaining_time' => max($remainingTime, 0),
        ];
    }
}