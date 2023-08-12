<?php

namespace Modules\Action\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Region\Models\Region;

/**
 * @property int $id
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