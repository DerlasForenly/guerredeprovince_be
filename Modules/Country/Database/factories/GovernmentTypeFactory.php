<?php

namespace Modules\Country\Database\factories;

use Database\Factories\Traits\HasName;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Country\Models\GovernmentType;

class GovernmentTypeFactory extends Factory
{
    use HasName;

    /**
     * @var string
     */
    protected $model = GovernmentType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [];
    }
}
