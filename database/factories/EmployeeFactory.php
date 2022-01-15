<?php

namespace Database\Factories;

use App\Models\Business;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'business_id' => rand(1, Business::all()->count())
        ];
    }

    public function user($id): EmployeeFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'user_id' => $id,
            ];
        });
    }
}
