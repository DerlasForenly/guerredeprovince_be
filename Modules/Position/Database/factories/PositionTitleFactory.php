<?php

namespace Modules\Position\Database\factories;

use Database\Factories\Traits\HasDescription;
use Database\Factories\Traits\HasName;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Position\Models\PositionTitle;

class PositionTitleFactory extends Factory
{
    use HasName,
        HasDescription;

    protected $model = PositionTitle::class;

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
