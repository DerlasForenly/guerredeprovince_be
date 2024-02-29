<?php

namespace Modules\Country\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Modules\Party\Models\PoliticalParty;
use Modules\Region\Models\Region;
use Modules\Request\Models\Request;
use Modules\User\Models\User;

/**
 * Class Country
 *
 * @property int id
 * @property string name
 * @property string description
 * @property string emblem
 * @property string color
 * @property bool mandatory_visa
 * @property string border_color
 * @property int government_type_id
 * @property int parliament_size
 *
 * @property \Modules\Country\Models\GovernmentType governmentType
 * @property \Modules\Country\Models\CountryStaff staff
 * @property \Modules\Party\Models\PoliticalParty[] parties
 * @property \Modules\Country\Models\Election[] elections
 * @property \Modules\Country\Models\Law[] laws
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

    public function staff(): HasMany
    {
        return $this->hasMany(CountryStaff::class);
    }

    public function requests(): MorphMany
    {
        return $this->morphMany(Request::class, 'requestable');
    }

    public function governmentType(): BelongsTo
    {
        return $this->belongsTo(GovernmentType::class);
    }

    public function parties(): HasMany
    {
        return $this->hasMany(PoliticalParty::class, 'country_id', 'id');
    }

    public function elections(): HasMany
    {
        return $this->hasMany(Election::class, 'country_id', 'id');
    }

    public function laws(): HasMany
    {
        return $this->hasMany(Law::class, 'country_id', 'id');
    }
}
