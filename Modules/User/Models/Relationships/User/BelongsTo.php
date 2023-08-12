<?php

namespace Modules\User\Models\Relationships\User;

use Modules\Country\Models\Country;
use Modules\Country\Models\Nation;
use Modules\Region\Models\Region;

trait BelongsTo
{
    public function nation(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Nation::class);
    }

    public function country(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function currentRegion(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Region::class, 'current_region_id');
    }

    public function registrationRegion(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Region::class, 'registration_region_id');
    }
}
