<?php

namespace Modules\User\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\User\Models\UserTreasury;

class UserTreasuryFactory extends Factory
{
    protected $model = UserTreasury::class;

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
