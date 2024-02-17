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
    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class, 'position_id', 'id');
    }
}
