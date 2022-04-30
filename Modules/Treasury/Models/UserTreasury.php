<?php

namespace Modules\Treasury\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\User\Models\User;
use \Modules\Treasury\Models\Treasury\Treasury as TreasuryModel;

class UserTreasury extends TreasuryModel
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'quantity',
    ];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function owner(): BelongsTo
    {
        return $this->user();
    }
}
