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

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'emblem',
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

    public function resource(): BelongsTo
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
