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
     * @var string
     */
    protected $primaryKey = 'region_id';

    /**
     * @var string[]
     */
    protected $fillable = [
        'region_id',
        'resource_id',
        'quantity',
    ];

    /**
     * @var string[]
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    /**
     * @return BelongsTo
     */
    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    public function owner(): BelongsTo
    {
        return $this->region();
    }
}
