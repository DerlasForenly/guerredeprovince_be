<?php

namespace Modules\Achievement\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
}
