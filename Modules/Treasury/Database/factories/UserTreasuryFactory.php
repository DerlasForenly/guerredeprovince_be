<?php

namespace Modules\Treasury\Database\factories;

use Database\Factories\Traits\HasUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Treasury\Models\UserTreasury;

class UserTreasuryFactory extends Factory
{
    use HasUser;

    /**
     * @var string
     */
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

    public function quantity($quantity): UserTreasuryFactory
    {
        return $this->state(function (array $attributes) use ($quantity) {
            return [
                'quantity' => $quantity
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
