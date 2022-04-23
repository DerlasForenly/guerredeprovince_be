<?php

namespace Modules\Action\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    use HasFactory;

    protected $primaryKey = "user_id";

    protected $fillable = [
        'created_at',
        'updated_at',
        'user_id',
        'action_type_id',
        'time',
    ];
}
