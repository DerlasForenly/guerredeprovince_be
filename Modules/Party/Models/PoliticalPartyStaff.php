<?php

namespace Modules\Party\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Position\Models\Position;
use Modules\User\Models\User;

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

    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }
}
