<?php

namespace Modules\Treasury\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Business\Models\Business;
use Modules\Treasury\Models\Treasury\Treasury;

class BusinessTreasury extends Treasury
{
    use HasFactory;

    /**
     * @return BelongsTo
     */
    public function owner(): BelongsTo
    {
        return $this->belongsTo(Business::class, 'business_id');
    }
}
