<?php

namespace Modules\Country\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

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
}