<?php

namespace Modules\Country\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property string name
 */
class ElectionType extends Model
{
    const PRESIDENT_ELECTION = 'President election';
    const PARLIAMENT_ELECTION = 'Parliament election';
    const INSIDE_PARTY_ELECTION = 'Party election';

    const TYPES = [
        self::PRESIDENT_ELECTION,
        self::INSIDE_PARTY_ELECTION,
        self::PARLIAMENT_ELECTION,
    ];

    public $timestamps = false;

    protected $fillable = [
        'name',
    ];
}