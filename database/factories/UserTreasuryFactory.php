<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserTreasuryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quantity' => 100,
        ];
    }

    public function user($id): UserTreasuryFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'user_id' => $id
            ];
        });
    }

    public function resource($id): UserTreasuryFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'resource_id' => $id
            ];
        });
    }
}
