<?php

namespace Modules\Party\Models\Relationships\PoliticalParty;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Modules\Party\Models\PoliticalPartyStaff;
use Modules\Position\Models\Position;
use Modules\Request\Models\Request;

trait Relationships
{
    public function politicalPartyStaff(): HasMany
    {
        return $this->hasMany(PoliticalPartyStaff::class);
    }

    public function requests(): MorphMany
    {
        return $this->morphMany(Request::class, 'requestable');
    }

    public function leader(): HasOne
    {
        return $this->hasOne(PoliticalPartyStaff::class)->ofMany([], function ($query) {
            $query->where('position_id', '=', Position::POLITICAL_PARTY_LEADER_ID);
        });
    }
}
