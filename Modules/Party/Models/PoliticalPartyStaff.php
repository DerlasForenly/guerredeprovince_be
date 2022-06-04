<?php

namespace Modules\Party\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\User\Models\User;

/**
 * @property int $user_id
 * @property int $political_party_id
 * @property int $position_id
 * @property User $user
 */
class PoliticalPartyStaff extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'political_party_id',
        'position_id',
    ];

    protected $hidden = [
        'updated_at',
    ];

    public function political_party(): BelongsTo
    {
        return $this->belongsTo(PoliticalParty::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
