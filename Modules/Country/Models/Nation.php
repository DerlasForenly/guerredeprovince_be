<?php

namespace Modules\Country\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Nation
 *
 * @property string $name
 * @property string $emblem
 *
 * @TODO Add relationships
 */
class Nation extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'emblem',
    ];
}
