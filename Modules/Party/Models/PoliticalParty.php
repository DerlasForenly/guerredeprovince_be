<?php

namespace Modules\Party\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Request\Models\Request;

class PoliticalParty extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'tag',
        'country_id',
        'parliament_id',
        'emblem',
    ];

    protected $hidden = [
        'updated_at',
    ];

    public function political_party_staff(): HasMany
    {
        return $this->hasMany(PoliticalPartyStaff::class);
    }

    public function requests(): HasMany
    {
        return $this->hasMany(Request::class);
    }

    public function getLeaderIdAttribute()
    {
        $leader = $this->political_party_staff()->
            where('position_id', '=', 1)->first();

        return $leader->user_id;
    }
}
