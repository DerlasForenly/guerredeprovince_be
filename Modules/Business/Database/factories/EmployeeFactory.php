<?php

namespace Modules\Business\Database\factories;

use Database\Factories\Traits\HasBusiness;
use Database\Factories\Traits\HasUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Business\Models\Business;
use Modules\Business\Models\Employee;

class EmployeeFactory extends Factory
{
    use HasUser,
        HasBusiness;

    /**
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'business_id' => rand(1, Business::all()->count())
        ];
    }

}
