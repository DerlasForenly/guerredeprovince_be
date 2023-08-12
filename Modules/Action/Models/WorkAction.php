<?php

namespace Modules\Action\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Business\Models\Business;
use Modules\Business\Models\SalaryType;
use Modules\Region\Models\Region;

/**
 * @property int $time
 * @property int $id
 * @property int $business_id
 * @property int $user_id
 */
class WorkAction extends Action
{
    /**
     * @var string
     */
    protected $table = 'work_actions';

    protected $fillable = [
        'user_id',
        'business_id',
        'status_id',
        'salary_type_id',
        'salary',
        'time',
        'created_at',
        'update_at',
    ];

    public function business(): BelongsTo
    {
        return $this->belongsTo(Business::class);
    }

    public function salaryType(): BelongsTo
    {
        return $this->belongsTo(SalaryType::class);
    }
}