<?php

namespace Modules\Achievement\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAchievement extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'achievement_id',
    ];
}
