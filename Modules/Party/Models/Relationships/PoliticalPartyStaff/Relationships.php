<?php

namespace Modules\Party\Models\Relationships\PoliticalPartyStaff;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Party\Models\PoliticalParty;
use Modules\User\Models\User;

trait Relationships
{
    /**
     * @return BelongsTo
     */
    public function political_party(): BelongsTo
    {
        return $this->belongsTo(PoliticalParty::class);
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
