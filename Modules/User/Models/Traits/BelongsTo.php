<?php

namespace Modules\User\Models\Traits;

use Modules\Country\Models\Country;
use Modules\Country\Models\Nation;

trait BelongsTo
{
    public function nation(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Nation::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
