<?php

namespace Modules\War\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Country\Models\Country;
use Modules\War\Models\RegionWar;

class RegionWarFactory extends Factory
{
    protected $model = RegionWar::class;

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
