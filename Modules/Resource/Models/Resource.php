<?php

namespace Modules\Resource\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    public const GOLD     = 'Gold';
    public const DIAMONDS = 'Diamonds';
    public const WOOD     = 'Wood';
    public const METAL    = 'Metal';
    public const URAN     = 'Uran';
    public const HELIUM   = 'Helium';
    public const OIL      = 'Oil';
    public const MONEY    = 'Money';

    public const RESOURCES = [
        self::GOLD,
        self::DIAMONDS,
        self::WOOD,
        self::METAL,
        self::URAN,
        self::HELIUM,
        self::OIL,
        self::MONEY,
    ];

    protected $fillable = [
        'name'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
