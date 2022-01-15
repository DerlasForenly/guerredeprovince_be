<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Country;

class RegionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => 'Region_' . Str::random(10),
            'description' => 'It is a test region',
            'country_id' => rand(2, Country::all()->count()),
            'region_type_id' => 1
        ];
    }

    public function independent(): RegionFactory
    {
        return $this->state(function (array $attributes) {
            return [
                'country_id' => null,
            ];
        });
    }

    public function name($name): RegionFactory
    {
        return $this->state(function (array $attributes) use ($name) {
            return [
                'name' => $name,
            ];
        });
    }

    public function country($id): RegionFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'country_id' => $id,
            ];
        });
    }

    public function description($description): RegionFactory
    {
        return $this->state(function (array $attributes) use ($description) {
            return [
                'description' => $description,
            ];
        });
    }

    public function autonomy(): RegionFactory
    {
        return $this->state(function (array $attributes) {
            return [
                'region_type_id' => 2,
            ];
        });
    }
}
