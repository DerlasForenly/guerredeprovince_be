<?php

namespace Modules\Newspaper\Database\factories;

use Database\Factories\Traits\HasArticle;
use Database\Factories\Traits\HasComment;
use Database\Factories\Traits\HasUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Newspaper\Models\Rating;

/**
 * Class RatingFactory
 */
class RatingFactory extends Factory
{
    use HasUser,
        HasArticle,
        HasComment;

    /**
     * @var string
     */
    protected $model = Rating::class;

    /**
     * @return array
     */
    public function definition(): array
    {
        return [
            'value' => rand(0, 1) === 1 ? 1 : -1,
        ];
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function value(bool $value): self
    {
        return $this->state(function (array $attributes) use ($value) {
            return [
                'value' => $value,
            ];
        });
    }
}
