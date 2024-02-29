<?php

namespace Modules\Country\Http\Resources;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Country\Models\ElectionVote;

/**
 * @mixin \Modules\Country\Models\Election
 */
class ElectionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $user = auth()->user();
        $id   = $this->id;

        return [
            'id'              => $id,
            'country'         => [
                'id'   => $this->country_id,
                'name' => $this->country?->name,
            ],
            'political_party' => [
                'id'   => $this->party_id,
                'name' => $this->party?->id,
            ],
            'type'            => [
                'id'   => $this->type_id,
                'name' => $this->type->id,
            ],
            'candidates'      => CandidateResource::collection($this->candidates()->get()),
            'voted'           =>
                (bool)$this->whereHas(
                    'candidates',
                    function (Builder $query) use ($user, $id) {
                        $query->where('election_id', $id)
                            ->whereHas(
                                'votes',
                                function (Builder $subQuery) use ($user) {
                                    $subQuery->where('user_id', $user->id);
                                }
                            );
                    }
                )->first(),
        ];
    }
}