<?php

namespace Modules\Party\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Modules\Country\Models\Candidate;
use Modules\Party\Models\Relationships\PoliticalParty\Relationships;

/**
 * Class PoliticalParty
 *
 * @property int $id
 * @property string $description
 * @property string $name
 * @property string $tag
 * @property int $country_id
 * @property string $emblem
 *
 * @property MorphMany $requests
 * @property PoliticalPartyStaff $leader
 * @property \Modules\Party\Models\PoliticalPartyStaff[] $staff
 * @property \Modules\Country\Models\Country $country
 */
class PoliticalParty extends Model
{
    use HasFactory,
        Relationships;

    protected $fillable = [
        'name',
        'description',
        'tag',
        'country_id',
        'emblem',
    ];

    protected $hidden = [
        'updated_at',
    ];
}
