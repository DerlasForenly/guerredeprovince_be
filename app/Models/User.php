<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

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
        'political_party_id',
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
        'employee',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'avatar' => 'string',
        'banned' => 'boolean',
        'inactive' => 'boolean',
        'premium' => 'boolean',
        'exp' => 'integer',
        'energy' => 'integer',
        'nation_id' => 'integer',
    ];

    protected $with = [
        'resources',
        'nation',
        'action',
    ];

    protected $appends = [
        'busy',
        'citizenship',
        'party',
        'job',
    ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier() {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims(): array
    {
        return [];
    }

    public function country_staff() {
        return $this->hasOne(CountryStaff::class);
    }

    public function army()
    {
        return $this->hasOne(Army::class);
    }

    public function political_party()
    {
        return $this->belongsToMany(PoliticalParty::class, 'political_party_staff');
    }

    public function resources(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(UserTreasury::class);
    }

    public function action()
    {
        return $this->hasOne(Action::class);
    }

    public function nation(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Nation::class);
    }

    public function businesses(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Business::class);
    }

    public function requests()
    {
        return $this->hasMany(Request::class, 'sender_id');
    }

    public function employee()
    {
        return $this->hasOne(Employee::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function getJobAttribute()
    {
        if (!$this->employee) return null;

        $business = $this->employee->business;

        if (!$business) {
            return null;
        }

        return [
            'id' => $business->id,
            'name' => $business->name,
            'salary' => $this->salary,
            'salary_type' => $this->salary_type
        ];
    }

    public function getBusyAttribute()
    {
        return (boolean)$this->action()->first();
    }

    public function getCitizenshipAttribute()
    {
        $country = $this->country()->first();

        if (!$country) {
            return null;
        }

        return [
            'id' => $country->id,
            'name' => $country->name,
        ];
    }

    public function getPartyAttribute()
    {
        $party = $this->political_party()->first();

        if (!$party) {
            return null;
        }

        return [
            'id' => $party->id,
            'name' => $party->name,
            'tag' => $party->tag,
        ];
    }

    public function getSalaryTypeAttribute()
    {
        if ($this->employee->salary !== null) {
            return $this->employee->salary_type_id;
        } else {
            return $this->employee->business->salary_type_id;
        }
    }

    public function getSalaryAttribute()
    {
        if ($this->employee->salary !== null) {
            return $this->employee->salary;
        } else {
            return $this->employee->business->salary;
        }
    }

    public function deduct($p_res): bool
    {
        foreach ($this->resources()->get() as &$r) {
            foreach ($p_res as &$pr) {
                if ($r->resource_id == $pr->resource_id) {
                    $r->quantity -= $pr->quantity;
                    $r->save();
                }
            }
        }

        return true;
    }

    public static function deductResources(array $ur, array $pr) {
        if ($pr === [] || $ur === []) {
            return false;
        }

        foreach ($ur as &$r) {
            foreach ($pr as $r2) {
                if ($r['resource_id'] === $r2['resource_id']) {
                    if ($r['quantity'] >= $r2['quantity']) {
                        $r['quantity'] -= $r2['quantity'];
                    } else {
                        return false;
                    }
                }
            }
        }

        return $ur;
    }

    public static function isEnoughResources($ur, $pr) {
        foreach ($ur as &$r) {
            foreach ($pr as &$r2) {
                if ($r->resource_id == $r2->resource_id && $r->quantity < $r2->quantity) {
                    return false;
                }
            }
        }

        return true;
    }

    public function isEnough($p_res): bool
    {
        $u_resources = $this->resources()->get();

        foreach ($u_resources as &$r) {
            foreach ($p_res as &$pr) {
                if ($r->resource_id == $pr->resource_id && $r->quantity < $pr->quantity) {
                    return false;
                }
            }
        }

        return true;
    }

    public function countSalary(int $time)
    {
        if ($this->salary_type === 1) {
            return $time * $this->salary;
        } else if ($this->salary_type === 2) {
            return $time;
        }
    }

    public function accrueSalary(int $time)
    {
        $salary = $this->countSalary($time);
        $resources = $this->resources();

        if ($this->salaty_type === 1) {
            $resource = $resources->where('resource_id', Resource::where('name', 'money')->first()->id)->first();
            $resource->update([
                'quantity' => $resource->quantity + $salary
            ]);
        } else if ($this->salary_type === 2) {
            $resource_id = $this->employee->business->resource_id;
            $resource = $resources->where('resource_id', $resource_id)->first();
            $resource->update([
                'quantity' => $resource->quantity + $salary
            ]);
        }

        return $salary;
    }
}
