<?php

namespace Modules\Business\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Modules\Corporation\Models\Corporation;
use Modules\Region\Models\Region;
use Modules\Resource\Models\Resource;
use Modules\Treasury\Models\BusinessTreasury;
use Modules\User\Models\User;

/**
 * Class Business
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $emblem
 * @property int $salary
 * @property int $resource_id
 * @property int $region_id
 * @property int $salary_type_id
 * @property int $user_id
 * @property int $exp
 * @property int $lvl
 * @property int|null $corporation_id
 *
 * @property \Modules\Region\Models\Region $region
 * @property \Modules\Corporation\Models\Corporation $corporation
 * @property \Modules\User\Models\User $user
 * @property \Modules\Resource\Models\Resource $resourceType
 */
class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'emblem',
        'lvl',
        'resource_id',
        'user_id',
        'region_id',
        'salary_type_id',
        'exp',
        'salary',
        'corporation_id',
    ];

    public function corporation(): BelongsTo
    {
        return $this->belongsTo(Corporation::class);
    }

    public function resourceType(): BelongsTo
    {
        return $this->belongsTo(Resource::class);
    }

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function treasuries(): HasMany
    {
        return $this->HasMany(BusinessTreasury::class);
    }
}
