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
    const START_PRESIDENT_ELECTION = 'Start president election';
    const START_PARLIAMENT_ELECTION = 'Start parliament election';

    const TYPES = [
        self::CHANGE_COUNTRY_NAME,
        self::CHANGE_COUNTRY_EMBLEM,
        self::START_PRESIDENT_ELECTION,
        self::START_PARLIAMENT_ELECTION,
    ];

    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
    ];

    public function laws(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Law::class, 'law_type_id', 'id');
    }
}