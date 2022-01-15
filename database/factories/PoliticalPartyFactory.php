<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\Region;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PoliticalPartyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $country_id = rand(1, Country::all()->count());

        return [
            'name' => 'Party_' . Str::random(5),
            'description' => 'Test party',
            'tag' => Str::random(3),
            'country_id' => $country_id,
        ];
    }

    public function country($id): PoliticalPartyFactory
    {
        return $this->state(function (array $attributes) use($id) {
            return [
                'country_id' => $id,
            ];
        });
    }

    public function name($name): PoliticalPartyFactory
    {
        return $this->state(function (array $attributes) use ($name) {
            return [
                'name' => $name
            ];
        });
    }

    public function tag($tag): PoliticalPartyFactory
    {
        return $this->state(function (array $attributes) use ($tag) {
            return [
                'tag' => $tag
            ];
        });
    }
}
