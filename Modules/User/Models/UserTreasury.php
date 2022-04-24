<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Resource\Models\Resource;
use Modules\User\Database\factories\UserTreasuryFactory;

class UserTreasury extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'resource_id',
        'quantity'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function resource(): BelongsTo
    {
        return $this->belongsTo(Resource::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
