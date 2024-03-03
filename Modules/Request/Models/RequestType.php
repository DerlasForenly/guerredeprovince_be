<?php

namespace Modules\Request\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Request\Database\factories\RequestTypeFactory;

/**
 * @property int id
 * @property string name
 */
class RequestType extends Model
{
    use HasFactory;

    public const JOIN_PARTY       = 'Join party';
    public const JOIN_ARMY        = 'Join army';
    public const GET_CITIZENSHIP  = 'Get citizenship';
    public const GET_REGISTRATION = 'Get registration';
    public const MAKE_FRIENDSHIP  = 'Make friendship';

    public const JOIN_PARTY_ID       = 1;
    public const JOIN_ARMY_ID        = 2;
    public const GET_CITIZENSHIP_ID  = 3;
    public const GET_REGISTRATION_ID = 4;
    public const MAKE_FRIENDSHIP_ID  = 5;

    public const REQUEST_TYPES = [
        self::JOIN_PARTY_ID       => self::JOIN_PARTY,
        self::JOIN_ARMY_ID        => self::JOIN_ARMY,
        self::GET_CITIZENSHIP_ID  => self::GET_CITIZENSHIP,
        self::GET_REGISTRATION_ID => self::GET_REGISTRATION,
        self::MAKE_FRIENDSHIP_ID  => self::MAKE_FRIENDSHIP,
    ];

    protected $fillable = [
        'id',
        'name',
    ];
}
