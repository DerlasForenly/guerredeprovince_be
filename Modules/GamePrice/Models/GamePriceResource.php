<?php

namespace Modules\GamePrice\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Resource\Models\Resource;

class GamePriceResource extends Model
{
    use HasFactory;

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function resource(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Resource::class);
    }
}
