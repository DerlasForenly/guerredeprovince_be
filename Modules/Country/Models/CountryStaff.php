<?php

namespace Modules\Country\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Position\Models\Position;
use Modules\User\Models\User;

/**
 * Class CountryStaff
 *
 * @property int user_id
 * @property int country_id
 * @property int position_id
 *
 * @property User user
 * @property Country country
 * @property Position position
 */
class CountryStaff extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $primaryKey = 'user_id';

    /**
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'country_id',
        'position_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class, 'position_id');
    }
}
