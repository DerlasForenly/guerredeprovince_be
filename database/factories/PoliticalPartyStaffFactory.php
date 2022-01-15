<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PoliticalPartyStaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'position_id' => '2'
        ];
    }

    public function user($id): PoliticalPartyStaffFactory
    {
        return $this->state(function (array $attributes) use($id) {
            return [
                'user_id' => $id,
            ];
        });
    }

    public function position($id): PoliticalPartyStaffFactory
    {
        return $this->state(function (array $attributes) use($id) {
            return [
                'position_id' => $id,
            ];
        });
    }

    public function party($id): PoliticalPartyStaffFactory
    {
        return $this->state(function (array $attributes) use($id) {
            return [
                'political_party_id' => $id,
            ];
        });
    }
}
