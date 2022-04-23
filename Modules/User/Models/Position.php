<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\User\Database\factories\PositionFactory;

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
