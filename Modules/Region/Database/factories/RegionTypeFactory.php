<?php

namespace Modules\Region\Database\factories;

use Database\Factories\Traits\HasName;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Region\Models\RegionType;

class RegionTypeFactory extends Factory
{
    use HasName;

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RegionType::class;

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
}

