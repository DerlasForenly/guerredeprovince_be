<?php

namespace Modules\Treasury\Models\Treasury;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Resource\Models\Resource;

/**
 * Abstract class Treasury
 *
 * @property int $id
 * @property int $resource_id
 * @property int $quantity
 * @property int $size
 *
 * @property \Modules\Resource\Models\Resource $resource
 * @property \Modules\Resource\Models\Resource $resourceType
 * @property Model $owner
 */
abstract class Treasury extends Model
{
    /**
     * @return BelongsTo
     */
    public function resource(): BelongsTo
    {
        return $this->belongsTo(Resource::class);
    }

    public function resourceType(): BelongsTo
    {
        return $this->belongsTo(Resource::class, 'resource_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    abstract public function owner(): BelongsTo;
}
