<?php

namespace Modules\Newspaper\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @property string $external_id
 * @property string name
 */
class Category extends Model
{
    protected $fillable = [
        'external_id',
        'name',
    ];
}
