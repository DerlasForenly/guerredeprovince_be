<?php

namespace Modules\Treasury\Models\Treasury;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Resource\Models\Resource;

abstract class Treasury extends Model
{
    /**
     * @return BelongsTo
     */
    public function resource(): BelongsTo
    {
        return $this->belongsTo(Resource::class);
    }

    abstract public function owner(): BelongsTo;
}
