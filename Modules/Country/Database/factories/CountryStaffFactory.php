<?php

namespace Modules\Country\Database\factories;

use Database\Factories\Traits\HasPosition;
use Database\Factories\Traits\HasUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Country\Models\CountryStaff;

class CountryStaffFactory extends Factory
{
    use HasPosition,
        HasUser;

    /**
     * @var string
     */
    protected $model = CountryStaff::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [];
    }

    public function country($id): CountryStaffFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'country_id' => $id,
            ];
        });
    }
}
