<?php

namespace Modules\Country\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Modules\Region\Models\Region;
use Modules\Request\Models\Request;
use Modules\User\Models\User;

/**
 * Class Country
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $emblem
 */
class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'emblem',
        'closed_borders',
        'mandatory_visa',
        'parliament_size',
        'government_type_id',
    ];

    public function regions(): HasMany
    {
        return $this->hasMany(Region::class);
    }

    public function nation(): BelongsTo
    {
        return $this->belongsTo(Nation::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function staff()
    {
        return $this->hasMany(CountryStaff::class);
    }

    public function getLeaderAttribute()
    {
        $leader = $this->staff()->where('position_id', '=',1)->get()->first();

        return $leader;
    }

    public function requests(): MorphMany
    {
        return $this->morphMany(Request::class, 'requestable');
    }
}
