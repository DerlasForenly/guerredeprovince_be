<?php

namespace Modules\Resource\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Resource
 *
 * @property int $id
 * @property string $name
 */
class Resource extends Model
{
    use HasFactory;

    public const GOLD = 'Gold';
    public const DIAMONDS = 'Diamonds';
    public const WOOD = 'Wood';
    public const METAL = 'Metal';
    public const URAN = 'Uran';
    public const HELIUM = 'Helium';
    public const OIL = 'Oil';
    public const MONEY = 'Money';

    public const GOLD_ID = 1;
    public const DIAMONDS_ID = 2;
    public const WOOD_ID = 3;
    public const METAL_ID = 4;
    public const URAN_ID = 5;
    public const HELIUM_ID = 6;
    public const OIL_ID = 7;
    public const MONEY_ID = 8;

    public const RESOURCES = [
        self::GOLD_ID     => self::GOLD,
        self::DIAMONDS_ID => self::DIAMONDS,
        self::WOOD_ID     => self::WOOD,
        self::METAL_ID    => self::METAL,
        self::URAN_ID     => self::URAN,
        self::HELIUM_ID   => self::HELIUM,
        self::OIL_ID      => self::OIL,
        self::MONEY_ID    => self::MONEY,
    ];

    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'name',
    ];
}
