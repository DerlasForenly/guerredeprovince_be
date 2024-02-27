<?php

namespace Modules\Country\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\User\Models\User;

/**
 * @property int id
 * @property int user_id
 * @property int election_id
 *
 * @property \Modules\User\Models\User $user
 * @property \Modules\Country\Models\Election $election
 */
class ElectionVote extends Model
{
    protected $fillable = [
        'user_id',
        'candidate_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function candidate(): BelongsTo
    {
        return $this->belongsTo(Candidate::class, 'candidate_id', 'id');
    }
}