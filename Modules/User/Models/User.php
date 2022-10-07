<?php

namespace Modules\User\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Modules\Action\Models\Action;
use Modules\Party\Models\PoliticalPartyStaff;
use Modules\User\Models\Attributes\Attributes;
use Modules\User\Models\Relationships\User\Relationships;
use Modules\User\Models\Traits\GetJWT;
use Tymon\JWTAuth\Contracts\JWTSubject;

/**
 * @property Action $action
 * @property string $avatar
 * @property int $nation_id
 * @property int $current_region_id
 * @property int $exp
 * @property string $email
 * @property string $nickname
 * @property int $id
 * @property HasMany $requests
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
