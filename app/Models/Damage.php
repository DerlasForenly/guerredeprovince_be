<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Damage extends Model
{
    use HasFactory;

    protected $fillable = [
        'region_id',
        'user_id',
        'war_id',
        'damage',
    ];

    protected $hidden = [
        'updated_at',
    ];
}
