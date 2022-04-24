<?php

namespace Modules\Business\Database\factories;

use Database\Factories\Traits\HasName;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Business\Models\SalaryType;

class SalaryTypeFactory extends Factory
{
    use HasName;

    /**
     * @var string
     */
    protected $model = SalaryType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            //
        ];
    }
}
