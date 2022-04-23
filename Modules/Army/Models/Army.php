<?php

namespace Modules\Army\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Army extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'country_id',
    ];
}
