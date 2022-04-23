<?php

namespace Modules\Business\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Business\Models\SalaryType;

class SalaryTypeFactory extends Factory
{
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

    public function name($name): SalaryTypeFactory
    {
        return $this->state(function (array $attributes) use ($name) {
            return [
                'name' => $name,
            ];
        });
    }
}
