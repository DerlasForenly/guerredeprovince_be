<?php

namespace Modules\Region\Database\factories;

use Database\Factories\Traits\HasDescription;
use Database\Factories\Traits\HasName;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Modules\Country\Models\Country;
use Modules\Region\Models\Region;

class RegionFactory extends Factory
{
    use HasName,
        HasDescription;

    /**
     * @var string
     */
    protected $model = Region::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name'           => 'Region_' . Str::random(10),
            'description'    => 'It is a test region',
            'country_id'     => Country::inRandomOrder()->first()->id,
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

    public function country($id): RegionFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'country_id' => $id,
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
