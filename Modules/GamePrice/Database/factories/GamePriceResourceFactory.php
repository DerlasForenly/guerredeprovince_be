<?php

namespace Modules\GamePrice\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\GamePrice\Models\GamePriceResource;

class GamePriceResourceFactory extends Factory
{
    protected $model = GamePriceResource::class;

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

    public function values($price_id, $resource_id, $quantity): GamePriceResourceFactory
    {
        return $this->state(function (array $attributes) use ($price_id, $resource_id, $quantity) {
            return [
                'game_price_id' => $price_id,
                'resource_id' => $resource_id,
                'quantity' => $quantity,
            ];
        });
    }

    public function price($id): GamePriceResourceFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'game_price_id' => $id
            ];
        });
    }

    public function resource($id): GamePriceResourceFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'resource_id' => $id
            ];
        });
    }

    public function quantity($quantity): GamePriceResourceFactory
    {
        return $this->state(function (array $attributes) use ($quantity) {
            return [
                'quantity' => $quantity
            ];
        });
    }
}
