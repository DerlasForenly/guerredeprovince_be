<?php

namespace Modules\Government\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\User\Models\User;

class RegionGovernment extends Model
{
    use HasFactory;

    public function leader(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
