<?php

namespace Modules\War\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\War\Models\Damage;

class DamageFactory extends Factory
{
    protected $model = Damage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'damage' => rand(1, 500),
        ];
    }

    public function user($id): DamageFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'user_id' => $id,
            ];
        });
    }

    public function side($id): DamageFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'side_id' => $id,
            ];
        });
    }

    public function war($id): DamageFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'war_id' => $id,
            ];
        });
    }
}
