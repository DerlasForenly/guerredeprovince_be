<?php

namespace Modules\Party\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Party\Models\Relationships\PoliticalPartyStaff\Relationships;
use Modules\User\Models\User;

/**
 * @property int $user_id
 * @property int $political_party_id
 * @property int $position_id
 * @property User $user
 */
class PoliticalPartyStaff extends Model
{
    use HasFactory,
        Relationships;

    /**
     * @var string
     */
    protected $primaryKey = 'user_id';

    /**
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'political_party_id',
        'position_id',
    ];

    /**
     * @var string[]
     */
    protected $hidden = [
        'updated_at',
    ];
}
