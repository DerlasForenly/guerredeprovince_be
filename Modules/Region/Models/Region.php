<?php

namespace Modules\Region\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Modules\Country\Models\Country;
use Modules\War\Models\War;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $emblem
 * @property int|null $country_id
 */
class Region extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'emblem',
        'country_id',
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function wars(): BelongsToMany
    {
        return $this->belongsToMany(War::class, 'region_wars');
    }
}
