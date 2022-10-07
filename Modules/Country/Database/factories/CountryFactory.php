<?php

namespace Modules\Country\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Modules\Country\Models\Country;
use Modules\Country\Models\GovernmentType;
use Modules\Country\Models\Nation;

class CountryFactory extends Factory
{
    protected $model = Country::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name'               => 'Country_' . Str::random(10),
            'description'        => 'It is a test country',
            'nation_id'          => rand(1, Nation::all()->count()),
            'government_type_id' => GovernmentType::PRESIDENTIAL_REPUBLIC_ID,
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
