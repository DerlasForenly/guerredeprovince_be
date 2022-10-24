<?php

namespace Modules\Newspaper\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewspaperStaff extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'newspaper_id',
        'position_id',
    ];
}
