<?php

namespace Modules\Position\Database\factories;

use Database\Factories\Traits\HasName;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Position\Models\PositionType;

class PositionTypeFactory extends Factory
{
    use HasName;

    protected $model = PositionType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            //
        ];
    }
}
