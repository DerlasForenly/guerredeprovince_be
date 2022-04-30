<?php

namespace Modules\Treasury\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Business\Models\Business;
use Modules\Treasury\Models\Treasury\Treasury;

class BusinessTreasury extends Treasury
{
    use HasFactory;

    protected $fillable = [
        'quantity',
    ];

    public function business(): BelongsTo
    {
        return $this->belongsTo(Business::class);
    }

    public function owner(): BelongsTo
    {
        return $this->business();
    }
}
