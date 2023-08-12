<?php

namespace Modules\Action\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Status\Models\Status;
use Modules\User\Models\User;

/**
 * Class Action
 *
 * @property int $user_id
 * @property int $time
 * @property int $status_id
 * @property $created_at
 */
abstract class Action extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
}
