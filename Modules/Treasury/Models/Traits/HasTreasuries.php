<?php

namespace Modules\Treasury\Models\Traits;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Modules\Resource\Models\Resource;
use Modules\Treasury\Models\Treasury\Treasury;

/**
 * @mixin \Illuminate\Database\Eloquent\Model
 */
trait HasTreasuries
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne|null
     */
    public function goldTreasury(): ?HasOne
    {
        return $this->hasOne(Treasury::class)->where('resource_id', Resource::GOLD_ID)->first();
    }
}