<?php

namespace Modules\Request\Database\factories;

use Database\Factories\Traits\HasName;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Request\Models\RequestType;

class RequestTypeFactory extends Factory
{
    use HasName;

    /**
     * @var string
     */
    protected $model = RequestType::class;

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
