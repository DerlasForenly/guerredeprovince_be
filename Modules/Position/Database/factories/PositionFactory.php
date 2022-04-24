<?php

namespace Modules\Position\Database\factories;

use Database\Factories\Traits\HasDescription;
use Database\Factories\Traits\HasName;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Position\Models\Position;

class PositionFactory extends Factory
{
    use HasName,
        HasDescription;

    protected $model = Position::class;

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

    public function type($id): PositionFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'position_type_id' => $id,
            ];
        });
    }
}
