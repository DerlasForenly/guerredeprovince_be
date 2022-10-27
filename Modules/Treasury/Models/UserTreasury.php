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
     * @return BelongsTo
     */
    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
