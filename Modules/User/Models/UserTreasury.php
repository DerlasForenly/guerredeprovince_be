<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Resource\Models\Resource;
use Modules\User\Database\factories\UserTreasuryFactory;

class UserTreasury extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];


    public function resource(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Resource::class);
    }
}
