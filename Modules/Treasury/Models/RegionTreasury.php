<?php

namespace Modules\Treasury\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Region\Models\Region;
use \Modules\Treasury\Models\Treasury\Treasury as TreasuryModel;

class RegionTreasury extends TreasuryModel
{
    use HasFactory;

    /**
     * @return BelongsTo
     */
    public function owner(): BelongsTo
    {
        return $this->belongsTo(Region::class, 'region_id');
    }
}
