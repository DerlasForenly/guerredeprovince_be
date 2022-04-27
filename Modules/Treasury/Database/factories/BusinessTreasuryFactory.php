<?php

namespace Modules\Treasury\Database\factories;

use Database\Factories\Traits\HasBusiness;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Treasury\Models\BusinessTreasury;

class BusinessTreasuryFactory extends Factory
{
    use HasBusiness;

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BusinessTreasury::class;

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

    public function quantity($quantity): BusinessTreasuryFactory
    {
        return $this->state(function (array $attributes) use ($quantity) {
            return [
                'quantity' => $quantity
            ];
        });
    }

    public function resource($id): BusinessTreasuryFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'resource_id' => $id
            ];
        });
    }
}

