<?php

namespace Modules\Corporation\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Corporation
 *
 * @property string $name
 * @property string $description
 * @property string $emblem
 * @property string $tag
 */
class Corporation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'emblem',
        'tag',
    ];
}
