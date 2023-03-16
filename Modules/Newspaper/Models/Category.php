<?php

namespace Modules\Newspaper\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @property int $id
 * @property string $external_id
 * @property string name
 */
class Category extends Model
{
    const GAME_POLITICS_ID = 1;

    const REAL_POLITICS_ID = 2;

    const REAL_HISTORY_ID = 3;

    const GAME_HISTORY_ID = 4;

    const ECONOMY_ID = 5;

    const GUIDE_ID = 6;

    const HUMOR_ID = 7;

    const COMPETITION_ID = 8;

    const QUESTION_ID = 9;

    const WARS_ID = 10;

    const ANNOUNCEMENT_ID = 11;

    const SCIENCE_ID = 12;

    const NONE_ID = 13;

    const ADVERTISEMENT_ID = 14;

    const GAME_POLITICS = 'game politics';

    const REAL_POLITICS = 'real politics';

    const REAL_HISTORY = 'real history';

    const GAME_HISTORY = 'game history';

    const ECONOMY = 'economy';

    const GUIDE = 'guide';

    const HUMOR = 'humor';

    const COMPETITION = 'competition';

    const QUESTION = 'question';

    const WARS = 'wars';

    const ANNOUNCEMENT = 'announcement';

    const SCIENCE = 'science';

    const NONE = 'none';

    const ADVERTISEMENT = 'advertisement';

    const CATEGORIES = [
        self::GAME_POLITICS_ID => self::GAME_POLITICS,
        self::REAL_POLITICS_ID => self::REAL_POLITICS,
        self::REAL_HISTORY_ID  => self::REAL_HISTORY,
        self::GAME_HISTORY_ID  => self::GAME_HISTORY,
        self::ECONOMY_ID       => self::ECONOMY,
        self::GUIDE_ID         => self::GUIDE,
        self::HUMOR_ID         => self::HUMOR,
        self::COMPETITION_ID   => self::COMPETITION,
        self::QUESTION_ID      => self::QUESTION,
        self::WARS_ID          => self::WARS,
        self::ANNOUNCEMENT_ID  => self::ANNOUNCEMENT,
        self::SCIENCE_ID       => self::SCIENCE,
        self::NONE_ID          => self::NONE,
        self::ADVERTISEMENT_ID => self::ADVERTISEMENT,
    ];

    protected $fillable = [
        'external_id',
        'name',
    ];
}
