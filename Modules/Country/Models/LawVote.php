<?php

namespace Modules\Country\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int user_id
 * @property int law_id
 * @property bool value
 */
class LawVote extends Model
{
    protected $fillable = [
        'user_id',
        'law_id',
        'value',
    ];
}