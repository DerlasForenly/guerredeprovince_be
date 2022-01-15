<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GamePriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }

    public function name($name): GamePriceFactory
    {
        return $this->state(function (array $attributes) use ($name) {
            return [
                'name' => $name
            ];
        });
    }
}
