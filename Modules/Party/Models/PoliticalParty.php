<?php

namespace Modules\Party\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Modules\Position\Models\Position;
use Modules\Request\Models\Request;
use Modules\User\Models\User;

/**
 * @property int $id
 * @property string $description
 * @property string $name
 * @property MorphMany $requests
 * @property PoliticalPartyStaff $leader
 * @property HasMany $politicalPartyStaff
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

    public function requests(): MorphMany
    {
        return $this->morphMany(Request::class, 'requestable');
    }

    public function leader(): HasOne
    {
        return $this->hasOne(PoliticalPartyStaff::class)->ofMany([], function ($query) {
            $query->where('position_id', '=', Position::POLITICAL_PARTY_LEADER_ID);
        });
    }
}
