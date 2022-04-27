<?php

namespace Modules\Region\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegionType extends Model
{
    use HasFactory;

    public const AUTONOMY = 'Autonomy';
    public const REGION   = 'Region';

    public const AUTONOMY_ID = 1;
    public const REGION_ID   = 2;

    public const REGION_TYPES = [
        self::AUTONOMY_ID => self::AUTONOMY,
        self::REGION_ID   => self::REGION,
    ];
}
