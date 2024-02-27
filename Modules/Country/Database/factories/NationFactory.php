<?php

namespace Modules\Country\Database\factories;

use Database\Factories\Traits\HasName;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Modules\Country\Models\Nation;

/**
 * Class NationFactory
 */
class NationFactory extends Factory
{
    use HasName;

    /**
     * @var string
     */
    protected $model = Nation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Nation_' . Str::random(10),
        ];
    }
}
