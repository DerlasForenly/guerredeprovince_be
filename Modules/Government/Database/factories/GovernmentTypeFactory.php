<?php

namespace Modules\Government\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Government\Models\GovernmentType;

class GovernmentTypeFactory extends Factory
{
    protected $model = GovernmentType::class;

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

    public function name($name): GovernmentTypeFactory
    {
        return $this->state(function (array $attributes) use ($name) {
            return [
                'name' => $name
            ];
        });
    }
}
