<?php

namespace Modules\Newspaper\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Position\Models\Position;
use Modules\User\Models\User;

/**
 * Class NewspaperStaff
 *
 * @property int $user_id
 * @property int $newspaper_id
 * @property int $position_id
 * @property string $custom_name
 *
 * @property User $user
 * @property \Modules\Newspaper\Models\Newspaper $newspaper
 * @property Position $position
 */
class NewspaperStaff extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'newspaper_id',
        'position_id',
        'custom_name',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'user_id'      => 'int',
        'newspaper_id' => 'int',
        'position_id'  => 'int',
        'custom_name'  => 'string',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function newspaper(): BelongsTo
    {
        return $this->belongsTo(Newspaper::class, 'newspaper_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class, 'position_id');
    }
}
