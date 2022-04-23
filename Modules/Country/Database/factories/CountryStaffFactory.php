<?php

namespace Modules\Country\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Country\Models\CountryStaff;

class CountryStaffFactory extends Factory
{
    protected $model = CountryStaff::class;

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

    public function user($id): CountryStaffFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'user_id' => $id,
            ];
        });
    }

    public function country($id): CountryStaffFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'country_id' => $id,
            ];
        });
    }

    public function position($id): CountryStaffFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'position_id' => $id,
            ];
        });
    }
}
