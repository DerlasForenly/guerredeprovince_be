<?php

namespace Modules\Business\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\User\Models\User;

/**
 * Class Employee
 *
 * @property int $user_id
 * @property int $business_id
 * @property int $salary_type_id
 * @property int $salary
 * @property \Modules\Business\Models\SalaryType $salary_type
 * @property \Modules\Business\Models\Business $business
 */
class Employee extends Model
{
    use HasFactory;

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'user_id',
        'business_id',
        'salary',
        'salary_type',
    ];

    public function business(): BelongsTo
    {
        return $this->belongsTo(Business::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
