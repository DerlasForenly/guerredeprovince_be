<?php

namespace Modules\Country\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * @property int $id
 * @property int $election_id
 * @property int $candidable_id
 * @property string $candidable_type
 */
class ElectionCandidate extends Model
{
    protected $table = 'candidates';

    protected $fillable = [
        'election_id',
        'candidable_type',
        'candidable_id',
    ];

    public function election(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Election::class, 'election_id', 'id');
    }

    public function candidable(): MorphTo
    {
        return $this->morphTo();
    }
}