<?php

namespace Modules\Country\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property string name
 */
class LawType extends Model
{
    const CHANGE_COUNTRY_NAME = 'Change country name';
    const CHANGE_COUNTRY_EMBLEM = 'Change country emblem';

    const TYPES = [
        self::CHANGE_COUNTRY_NAME,
        self::CHANGE_COUNTRY_EMBLEM,
    ];

    protected $fillable = [
        'id',
        'name',
    ];
}