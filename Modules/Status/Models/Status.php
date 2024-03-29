<?php

namespace Modules\Status\Models;

use App\Models\Traits\FIndByName;
use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 */
class Status extends Model
{
    use HasFactory,
        FIndByName;

    const READY_ID = 1;
    const FINISHED_ID = 2;
    const IN_PROCESS_ID = 3;
    const ACTIVE_ID = 4;
    const IN_ACTIVE_ID = 5;
    const CANCELED_ID = 6;
    const ACCEPTED_ID = 7;
    const DECLINED_ID = 8;

    const READY = 'ready';
    const FINISHED = 'finished';
    const IN_PROCESS = 'in_process';
    const ACTIVE = 'active';
    const IN_ACTIVE = 'inactive';
    const CANCELED = 'canceled';
    const ACCEPTED = 'accepted';
    const DECLINED = 'declined';

    const STATUSES = [
        self::READY_ID => self::READY,
        self::FINISHED_ID => self::FINISHED,
        self::IN_PROCESS_ID => self::IN_PROCESS,
        self::ACTIVE_ID => self::ACTIVE,
        self::IN_ACTIVE_ID => self::IN_ACTIVE,
        self::CANCELED_ID => self::CANCELED,
        self::ACCEPTED_ID => self::ACCEPTED,
        self::DECLINED_ID => self::DECLINED,
    ];

    protected $fillable = [
        'id',
        'name',
    ];
}
