<?php

namespace Modules\Country\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Party\Models\PoliticalParty;
use Modules\Status\Models\Status;

/**
 * @property int id
 * @property int type_id
 * @property int status_id
 * @property int country_id
 * @property int party_id
 *
 * @property \Modules\Country\Models\ElectionVote[] votes
 * @property \Modules\Country\Models\ElectionType type
 * @property PoliticalParty $party
 * @property \Modules\Country\Models\Country $country
 */
class Election extends Model
{
    use Filterable;

    protected $fillable = [
        'type_id',
        'country_id',
        'party_id',
        'status_id',
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function party(): BelongsTo
    {
        return $this->belongsTo(PoliticalParty::class, 'party_id', 'id');
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(ElectionType::class, 'type_id', 'id');
    }

    public function votes(): HasMany
    {
        return $this->hasMany(ElectionVote::class, 'election_id', 'id');
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public function candidates(): HasMany
    {
        return $this->hasMany(Candidate::class, 'election_id', 'id');
    }
}