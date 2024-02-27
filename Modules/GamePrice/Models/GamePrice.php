<?php

namespace Modules\GamePrice\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GamePrice extends Model
{
    use HasFactory;

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $with = [
        'resources'
    ];

    public function resources(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(GamePriceResource::class);
    }
}
