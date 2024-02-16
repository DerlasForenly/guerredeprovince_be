<?php

namespace Modules\Party\Models\Relationships\PoliticalPartyStaff;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Country\Models\Country;
use Modules\Party\Models\PoliticalParty;
use Modules\Party\Models\PoliticalPartyStaff;
use Modules\Position\Models\Position;
use Modules\User\Models\User;

trait Relationships
{
    /**
     * @return BelongsTo
     */
    public function politicalParty(): BelongsTo
    {
        return $this->belongsTo(PoliticalParty::class, 'political_party_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function leader(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(PoliticalPartyStaff::class)->where('position_id', Position::POLITICAL_PARTY_LEADER_ID);
    }
}
