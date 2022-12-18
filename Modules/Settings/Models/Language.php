<?php

namespace Modules\Settings\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Language
 *
 * @property int $id
 * @property string $name
 */
class Language extends Model
{
    const UKRAINIAN_ID = 1;
    const ENGLISH_ID = 2;
    const JAPANESE_ID = 3;

    const LANGUAGES = [
        self::UKRAINIAN_ID => 'ukrainian',
        self::ENGLISH_ID => 'english',
        self::JAPANESE_ID => 'japanese',
    ];

    protected $fillable = [
        'id',
        'name',
    ];

    use HasFactory;
}
