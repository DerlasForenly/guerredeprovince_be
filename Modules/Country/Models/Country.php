<?php

namespace Modules\Country\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Region\Models\Region;
use Modules\User\Models\User;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'emblem',
        'nation_id',
        'closed_borders',
        'mandatory_visa',
    ];

    public function regions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Region::class);
    }

    public function nation(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Nation::class);
    }

    public function users(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(User::class);
    }

    public function staff()
    {
        return $this->hasMany(CountryStaff::class);
    }

    public function getLeaderAttribute()
    {
        $leader = $this->staff()->where('position_id', '=',1)->get()->first();

        return $leader;
    }
}