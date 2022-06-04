<?php

namespace Modules\Party\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Modules\Position\Models\Position;
use Modules\Request\Models\Request;
use Modules\User\Models\User;

/**
 * @property string $description
 * @property string $name
 * @property PoliticalPartyStaff $leader
 */
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

    public function politicalPartyStaff(): HasMany
    {
        return $this->hasMany(PoliticalPartyStaff::class);
    }

    public function requests(): HasMany
    {
        return $this->hasMany(Request::class);
    }

    public function leader(): HasOne
    {
        return $this->hasOne(PoliticalPartyStaff::class)->ofMany([], function ($query) {
            $query->where('position_id', '=', Position::POLITICAL_PARTY_LEADER_ID);
        });
    }
}
