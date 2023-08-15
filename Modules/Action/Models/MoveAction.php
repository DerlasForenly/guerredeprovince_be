<?php

namespace Modules\Action\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Region\Models\Region;

/**
 * @property int $id
 * @property int $end_region_id
 * @property int $start_region_id
 * @property int $price
 *
 * @property \Modules\Region\Models\Region $endRegion
 * @property \Modules\Region\Models\Region $startRegion
 */
class MoveAction extends Action
{
    /**
     * @var string
     */
    protected $table = 'move_actions';

    protected $fillable = [
        'start_region_id',
        'end_region_id',
        'user_id',
        'status_id',
        'price',
        'time',
    ];

    public function endRegion(): BelongsTo
    {
        return $this->belongsTo(Region::class, 'end_region_id');
    }

    public function startRegion(): BelongsTo
    {
        return $this->belongsTo(Region::class, 'start_region_id');
    }
}