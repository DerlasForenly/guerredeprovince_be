<?php

namespace Modules\Position\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Position extends Model
{
    use HasFactory;

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];


    public function position_type(): BelongsTo
    {
        return $this->belongsTo(PositionType::class);
    }
}
