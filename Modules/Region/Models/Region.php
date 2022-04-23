<?php

namespace Modules\Region\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Country\Models\Country;
use Modules\Government\Models\RegionGovernment;
use Modules\War\Models\War;

class Region extends Model
{
    use HasFactory;

    protected $with = [
        'government',
    ];

    public function government(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(RegionGovernment::class);
    }

    public function country(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function wars(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(War::class, 'region_wars');
    }
}
