<?php

namespace Modules\Government\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Government\Models\Government;

class GovernmentFactory extends Factory
{
    protected $model = Government::class;

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

    public function name($name): GovernmentFactory
    {
        return $this->state(function (array $attributes) use ($name) {
            return [
                'name' => $name
            ];
        });
    }
}
