<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTreasury extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];


    public function resource(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Resource::class);
    }
}
