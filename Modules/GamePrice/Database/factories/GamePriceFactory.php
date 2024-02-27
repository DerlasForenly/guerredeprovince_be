<?php

namespace Modules\GamePrice\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\GamePrice\Models\GamePrice;

class GamePriceFactory extends Factory
{
    protected $model = GamePrice::class;

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
