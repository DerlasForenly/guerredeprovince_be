<?php

namespace Modules\Country\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * @property int $id
 * @property int $election_id
 * @property int $candidable_id
 * @property string $candidable_type
 *
 * @property \Illuminate\Support\Collection $votes
 */
class Candidate extends Model
{
    protected $fillable = [
        'candidable_type',
        'candidable_id',
        'election_id',
    ];

    public function election(): BelongsTo
    {
        return $this->belongsTo(Election::class, 'election_id', 'id');
    }

    public function candidable(): MorphTo
    {
        return $this->morphTo();
    }

    public function votes(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ElectionVote::class, 'candidate_id', 'id');
    }
}