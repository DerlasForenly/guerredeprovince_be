<?php

namespace Modules\Auth\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Action\Http\Resources\MoveActionResource;
use Modules\Action\Http\Resources\WorkActionResource;
use Modules\Resource\Models\Resource;
use Modules\Treasury\Models\Treasury\Treasury;
use Modules\User\Models\User;

/**
 * Class MeResource
 *
 * @mixin User $user
 */
class MeResource extends JsonResource
{
    /**
     * @param $request
     * @return array
     */
    public function toArray($request): array
    {
        /**
         * @var Treasury $gold
         * @var Treasury $diamonds
         */
        $money    = $this->treasuries->where('resource_id', Resource::MONEY_ID)->first();
        $diamonds = $this->treasuries->where('resource_id', Resource::DIAMONDS_ID)->first();

        return [
            'id'                     => $this->id,
            'nickname'               => $this->nickname,
            'avatar'                 => $this->avatar ?: 'avatars/default.jpg',
            'current_region'         => [
                'id'      => $this->current_region_id,
                'name'    => $this->currentRegion?->name,
                'country' => [
                    'id'   => $this->currentRegion?->country_id,
                    'name' => $this->currentRegion?->country?->name,
                ],
            ],
            'email'                  => $this->email,
            'exp'                    => $this->exp,
            'level'                  => $this->level,
            'last_activity'          => null,
            'nation'                 => [
                'id'   => $this->nation_id,
                'name' => $this->nation?->name,
            ],
            'political_view_id'      => null,
            'political_party'        => $this->politicalPartyStaff ? [
                'id'   => $this->politicalPartyStaff->political_party_id,
                'name' => $this->politicalPartyStaff->party->name,
                'tag'  => $this->politicalPartyStaff->party->tag,
            ] : null,
            'premium'                => false,
            'registration_region_id' => null,
            'citizenship'            => [
                'id'   => $this->country_id,
                'name' => $this->country?->name,
            ],
            'role_id'                => null,
            'money'                  => $money->quantity,
            'diamonds'               => $diamonds->quantity,
            'newspaper_id'           => $this->newspaperStaff?->newspaper_id,
            'job_business_id'        => $this->employee?->business_id,
            'work_action'            => new WorkActionResource($this->inProcessWork),
            'war_action'             => $this->inProcessWar,
            'move_action'            => new MoveActionResource($this->inProcessMove),
            'busy'                   => true,
        ];
    }
}
