<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegionWar extends Model
{
    use HasFactory;

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function war(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(War::class);
    }

    public function side(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(WarSide::class, 'side_id');
    }
}
