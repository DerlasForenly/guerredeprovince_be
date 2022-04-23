<?php

namespace Modules\Request\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Request\Models\RequestType;

class RequestTypeFactory extends Factory
{
    protected $model = RequestType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [];
    }

    public function name($name): RequestTypeFactory
    {
        return $this->state(function (array $attributes) use ($name) {
            return [
                'name' => $name,
            ];
        });
    }
}
