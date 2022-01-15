<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegionWarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [

        ];
    }

    public function country($id): RegionWarFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'region_id' => Country::find($id)->regions[0]->id
            ];
        });
    }

    public function region($id): RegionWarFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'region_id' => $id
            ];
        });
    }

    public function war($id): RegionWarFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'war_id' => $id
            ];
        });
    }

    public function side($id): RegionWarFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'side_id' => $id
            ];
        });
    }
}
