<?php

namespace Modules\Newspaper\Database\factories;

use Database\Factories\Traits\HasName;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Modules\Newspaper\Models\Newspaper;

/**
 * Class NewspaperFactory
 */
class NewspaperFactory extends Factory
{
    use HasName;

    /**
     * @var string
     */
    protected $model = Newspaper::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name'        => 'Newspaper_' . Str::random(8),
            'description' => Str::random(50),
            'avatar'      => 'avatars/default.jpg',
        ];
    }
}
