<?php

namespace Modules\Country\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GovernmentType
 *
 * @TODO Add comments to each position
 *
 * @property int id
 * @property string name
 */
class GovernmentType extends Model
{
    use HasFactory;

    /**
     *
     */
    const ABSOLUTE_MONARCHY = 'Absolute monarchy';

    const PRESIDENTIAL_REPUBLIC = 'Presidential republic';

    const PARLIAMENTARY_REPUBLIC = 'Parliamentary republic';

    const CONSTITUTIONAL_MONARCHY = 'Constitutional monarchy';

    const DICTATORSHIP = 'Dictatorship';

    const AUTONOMY = 'Autonomy';

    /**
     *
     */
    const ABSOLUTE_MONARCHY_ID = 1;

    const PRESIDENTIAL_REPUBLIC_ID = 2;

    const PARLIAMENTARY_REPUBLIC_ID = 3;

    const CONSTITUTIONAL_MONARCHY_ID = 4;

    const DICTATORSHIP_ID = 5;

    const AUTONOMY_ID = 6;

    /**
     * Government types
     */
    const GOVERNMENT_TYPES = [
        self::ABSOLUTE_MONARCHY_ID       => self::ABSOLUTE_MONARCHY,
        self::PRESIDENTIAL_REPUBLIC_ID   => self::PRESIDENTIAL_REPUBLIC,
        self::PARLIAMENTARY_REPUBLIC_ID  => self::PARLIAMENTARY_REPUBLIC,
        self::CONSTITUTIONAL_MONARCHY_ID => self::CONSTITUTIONAL_MONARCHY,
        self::DICTATORSHIP_ID            => self::DICTATORSHIP,
        self::AUTONOMY_ID                => self::AUTONOMY,
    ];

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
    ];
}
