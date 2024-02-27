<?php

namespace Modules\Country\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Country\Models\ElectionVote;

/**
 * @mixin \Modules\Country\Models\Candidate
 */
class CandidateResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        /**
         * @var \Modules\User\Models\User $user
         */
        $user = auth()->user();

        return [
            'id'            => $this->id,
            'candidable_id' => $this->candidable_id,
            'nickname'      => $this->candidable->nickname,
            'name'          => $this->candidable->name,
            'avatar'        => $this->candidable->avatar,
            'emblem'        => $this->candidable->emblem,
            'level'         => $this->candidable->level,
            'my_vote'       => (bool)ElectionVote::where('user_id', $user->id)->where('id', $this->id)->first(),
        ];
    }
}