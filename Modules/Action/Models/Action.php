<?php

namespace Modules\Action\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Action
 *
 * @property int $user_id
 * @property int $action_type_id
 * @property int $time
 * @property $created_at
 */
class Action extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $primaryKey = "user_id";

    protected $fillable = [
        'created_at',
        'updated_at',
        'user_id',
        'action_type_id',
        'time',
    ];
}
