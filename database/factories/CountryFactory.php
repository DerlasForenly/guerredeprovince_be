<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Nation;
use App\Models\Country;

class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => 'Country_' . Str::random(10),
            'description' => 'It is a test country',
            'nation_id' => rand(1, Nation::all()->count()),
            'government_type_id' => 1,
        ];
    }

    public function name($name): CountryFactory
    {
        return $this->state(function (array $attributes) use ($name) {
            return [
                'name' => $name,
            ];
        });
    }

    public function description($description): CountryFactory
    {
        return $this->state(function (array $attributes) use ($description) {
            return [
                'description' => $description,
            ];
        });
    }

    public function nation($id): CountryFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'nation_id' => $id,
            ];
        });
    }
}
