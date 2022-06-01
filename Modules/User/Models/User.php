<?php

namespace Modules\User\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Modules\Party\Models\PoliticalPartyStaff;
use Modules\Resource\Models\Resource;
use Modules\User\Models\Traits\Attributes;
use Modules\User\Models\Traits\GetJWT;
use Modules\User\Models\Traits\Relationships;
use Tymon\JWTAuth\Contracts\JWTSubject;

/**
 * @property PoliticalPartyStaff $politicalPartyStaff
 */
class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens,
        GetJWT,
        HasFactory,
        Notifiable,
        Relationships,
        Attributes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nickname',
        'email',
        'password',
        'description',
        'exp',
        'energy',
        'avatar',
        'banned',
        'inactive',
        'premium',
        'country_id',
        'political_view_id',
        'current_region_id',
        'registration_region_id',
        'nation_id',
        'last_activity',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'updated_at',
        'country_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'avatar'            => 'string',
        'banned'            => 'boolean',
        'inactive'          => 'boolean',
        'premium'           => 'boolean',
        'exp'               => 'integer',
        'energy'            => 'integer',
        'nation_id'         => 'integer',
    ];
}
