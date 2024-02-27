<?php

namespace Modules\Business\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Business\Database\factories\SalaryTypeFactory;

class SalaryType extends Model
{
    use HasFactory;

    public const MONEY    = 'money';
    public const RESOURCE = 'resource';

    public const MONEY_ID    = 1;
    public const RESOURCE_ID = 2;

    public const SALARY_TYPES = [
        self::MONEY_ID    => self::MONEY,
        self::RESOURCE_ID => self::RESOURCE,
    ];
}
