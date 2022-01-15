<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'pivot',
    ];

    protected $appends = [
        'leader_id'
    ];

    public function political_party_staff()
    {
        return $this->hasMany(PoliticalPartyStaff::class);
    }

    public function requests()
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
