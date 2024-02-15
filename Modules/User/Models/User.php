<?php

namespace Modules\User\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Modules\Newspaper\Models\NewspaperStaff;
use Modules\Party\Models\PoliticalPartyStaff;
use Modules\Treasury\Models\Treasury\Treasurable;
use Modules\Treasury\Models\Treasury\Treasury;
use Modules\User\Models\Attributes\Attributes;
use Modules\User\Models\Relationships\User\Relationships;
use Modules\User\Models\Traits\GetJWT;
use Tymon\JWTAuth\Contracts\JWTSubject;

/**
 * Class User
 *
 * Properties
 * @property string $avatar
 * @property int $nation_id
 * @property int $current_region_id
 * @property int $exp
 * @property string $email
 * @property string $nickname
 * @property int $id
 * @property boolean $banned
 * @property boolean $inactive
 * @property boolean $premium
 *
 * Relationships
 * @property HasMany $requests
 * @property PoliticalPartyStaff $politicalPartyStaff
 * @property NewspaperStaff $newspaperStaff
 * @property Treasury $treasuries
 * @property $subscriptions
 * @property \Modules\Business\Models\Employee $employee
 * @property \Modules\Action\Models\Action $action
 * @property \Modules\Region\Models\Region $currentRegion
 * @property \Modules\Region\Models\Region $registrationRegion
 * @property \Modules\Action\Models\MoveAction $inProcessMove
 * @property \Modules\Action\Models\WarAction $inProcessWar
 * @property \Modules\Action\Models\WorkAction $inProcessWork
 * @property \Modules\Country\Models\Nation $nation
 *
 * Attributes
 * @property array $job
 * @property bool $busy
 * @property int $level
 */
class User extends Authenticatable implements JWTSubject, Treasurable
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

    public static function findByNickname(string $nickname): User
    {
        return self::where('nickname', $nickname)->first();
    }
}
