<?php

namespace Modules\Party\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Party\Models\Relationships\PoliticalPartyStaff\Relationships;
use Modules\User\Models\User;

/**
 * @property int user_id
 * @property int political_party_id
 * @property int position_id
 * @property string created_at
 * @property bool in_government
 *
 * @property User user
 * @property \Modules\Party\Models\PoliticalParty party
 * @property \Modules\Position\Models\Position position
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
        'in_government',
    ];
}
