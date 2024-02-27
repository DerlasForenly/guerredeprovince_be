<?php

namespace Modules\User\Models\Relationships\User;

use Modules\Newspaper\Models\Newspaper;
use Modules\Party\Models\PoliticalParty;

trait BelongsToMany
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function political_party(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(PoliticalParty::class, 'political_party_staff');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function subscriptionNewspapers(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Newspaper::class, 'subscriptions', 'user_id', 'newspaper_id');
    }
}
