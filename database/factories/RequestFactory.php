<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RequestFactory extends Factory
{
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

    public function sender($id): RequestFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'sender_id' => $id
            ];
        });
    }

    public function getter($id): RequestFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'getter_id' => $id
            ];
        });
    }

    public function type($id): RequestFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'request_type_id' => $id
            ];
        });
    }
}
