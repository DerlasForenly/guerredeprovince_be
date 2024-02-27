<?php

namespace Modules\Action\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActionType extends Model
{
    use HasFactory;

    public const WORKING   = 'working';
    public const FIGHTING  = 'fighting';
    public const TRAVELING = 'traveling';

    public const WORKING_ID   = 1;
    public const FIGHTING_ID  = 2;
    public const TRAVELING_ID = 3;

    public const ACTION_TYPES = [
        self::WORKING_ID   => self::WORKING,
        self::FIGHTING_ID  => self::FIGHTING,
        self::TRAVELING_ID => self::TRAVELING,
    ];
}
