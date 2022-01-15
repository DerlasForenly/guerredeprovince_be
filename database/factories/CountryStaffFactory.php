<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CountryStaffFactory extends Factory
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
