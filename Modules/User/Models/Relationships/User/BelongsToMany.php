<?php

namespace Modules\User\Models\Relationships\User;

use Modules\Party\Models\PoliticalParty;

trait BelongsToMany
{
    public function political_party(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(PoliticalParty::class, 'political_party_staff');
    }
}
