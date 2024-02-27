<?php

namespace Modules\Country\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Action\Services\ActionCalculationsService;

/**
 * @mixin \Modules\Country\Models\Law
 */
class LawResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $countAcceptVotes = $this->votes()->where('value', true)->count();
        $countDeclineVotes = $this->votes()->where('value', false)->count();

        return [
            'id'          => $this->id,
            'type'        => [
                'id'   => $this->law_type_id,
                'name' => $this->lawType->name,
            ],
            'status'      => [
                'id'   => $this->status_id,
                'name' => $this->status->name,
            ],
            'rating'      => $countAcceptVotes - $countDeclineVotes,
            'created_at'  => Carbon::parse($this->created_at)->format('H:i d.m.Y'),
            'time_to_end' => ActionCalculationsService::getRemainingTimeInSec($this->created_at, 60, true),
            'votes'       => $this->votes()->count(),
        ];
    }
}