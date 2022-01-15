<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegionGovernment extends Model
{
    use HasFactory;

    public function leader()
    {
        return $this->belongsTo(User::class);
    }
}
