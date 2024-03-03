<?php

namespace Modules\Request\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Modules\Country\Models\Country;
use Modules\Region\Models\Region;
use Modules\Request\Database\factories\RequestFactory;
use Modules\User\Models\User;

/**
 * @property int $id
 * @property int $user_id
 * @property int $status_id
 * @property int $requestable_id
 * @property string $requestable_type
 * @property int $type_id
 * @property string $created_at
 *
 * @property User $user
 * @property \Modules\Request\Models\RequestType $type
 */
class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'requestable_type',
        'requestable_id',
        'type_id',
        'status_id'
    ];

    public function sender(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(RequestType::class, 'type_id', 'id');
    }

    public function requestable(): MorphTo
    {
        return $this->morphTo();
    }
}
