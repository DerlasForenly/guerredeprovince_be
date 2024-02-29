<?php

namespace Modules\Country\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Country\Models\ElectionType;
use Modules\Country\Models\ElectionVote;
use Modules\User\Models\User;

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

        $staff = $this->candidable_type === User::class ? 'politicalPartyStaff' : 'staff';

        return [
            'id'            => $this->id,
            'candidable_id' => $this->candidable_id,
            'nickname'      => $this->candidable->nickname,
            'name'          => $this->candidable->name,
            'avatar'        => $this->candidable->avatar,
            'emblem'        => $this->candidable->emblem,
            'level'         => $this->candidable->level,
            'members'       => $this->candidable->$staff()->count(),
            'votes'         => $this->election->type->id === ElectionType::INSIDE_PARTY_ELECTION ?: $this->votes()->count(),
            'my_vote'       =>
                (bool)ElectionVote::where('user_id', $user->id)->where('candidate_id', $this->id)->first(),
        ];
    }
}