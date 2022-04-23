<?php

namespace Modules\Party\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\User\Models\Position;
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
        'created_at',
        'updated_at',
    ];

    public function political_party()
    {
        return $this->belongsTo(PoliticalParty::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
