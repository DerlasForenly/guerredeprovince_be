<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Traits\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Modules\Resource\Models\Resource;
use Modules\User\Database\factories\UserFactory;
use Modules\User\Models\Traits\Attributes;
use Modules\User\Models\Traits\Relationships;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens,
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
