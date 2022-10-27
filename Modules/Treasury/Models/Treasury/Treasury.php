<?php

namespace Modules\Treasury\Models\Treasury;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Resource\Models\Resource;

/**
 * Abstract class Treasury
 *
 * @property int $quantity
 */
abstract class Treasury extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'quantity',
    ];

    /**
     * @return BelongsTo
     */
    public function resource(): BelongsTo
    {
        return $this->belongsTo(Resource::class);
    }

    /**
     * @return BelongsTo
     */
    abstract public function owner(): BelongsTo;
}
