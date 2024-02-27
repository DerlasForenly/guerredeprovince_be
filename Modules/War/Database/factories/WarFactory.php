<?php

namespace Modules\War\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\War\Models\War;

class WarFactory extends Factory
{
    protected $model = War::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'status_id' => 1,
        ];
    }
}
