<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Government extends Model
{
    use HasFactory;

    public function countries(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->belongsTo(Country::class);
    }
}
