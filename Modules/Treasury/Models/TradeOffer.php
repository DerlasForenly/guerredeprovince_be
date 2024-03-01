<?php

namespace Modules\Treasury\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Resource\Models\Resource;
use Modules\Treasury\Models\Treasury\Treasury;
use Modules\User\Models\User;

/**
 * @property int id
 * @property int user_id
 * @property int resource_id
 * @property int quantity
 * @property int price
 * @property boolean is_buying
 *
 * @property \Modules\User\Models\User owner
 * @property \Modules\Resource\Models\Resource resourceType
 */
class TradeOffer extends Treasury
{
    protected $fillable = [
        'user_id',
        'resource_id',
        'quantity',
        'price',
        'is_buying',
        'size',
    ];

    public function owner(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}