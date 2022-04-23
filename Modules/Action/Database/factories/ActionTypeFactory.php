<?php

namespace Modules\Action\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Action\Models\ActionType;

class ActionTypeFactory extends Factory
{
    protected $model = ActionType::class;

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

    public function name($name): ActionTypeFactory
    {
        return $this->state(function (array $attributes) use ($name) {
            return [
                'name' => $name,
            ];
        });
    }
}
