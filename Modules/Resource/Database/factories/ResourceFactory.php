<?php

namespace Modules\Resource\Database\factories;

use Database\Factories\Traits\HasName;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Resource\Models\Resource;

class ResourceFactory extends Factory
{
    use HasName;

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Resource::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [

        ];
    }
}

