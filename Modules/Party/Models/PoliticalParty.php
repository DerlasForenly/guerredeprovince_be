<?php

namespace Modules\Party\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Modules\Party\Models\Relationships\PoliticalPartyStaff\Relationships;

/**
 * @property int $id
 * @property string $description
 * @property string $name
 * @property MorphMany $requests
 * @property PoliticalPartyStaff $leader
 * @property HasMany $politicalPartyStaff
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
        'parliament_id',
        'emblem',
    ];

    protected $hidden = [
        'updated_at',
    ];
}
