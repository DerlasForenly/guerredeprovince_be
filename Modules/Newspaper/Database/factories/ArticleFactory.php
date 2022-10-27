<?php

namespace Modules\Newspaper\Database\factories;

use Illuminate\Support\Str;
use Modules\Newspaper\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class ArticleFactory
 */
class ArticleFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'title'   => 'Article_' . Str::random(8),
            'content' => 'Content for article with random string: ' . Str::random(500),
            'newspaper_id' => null,
            'user_id' => 1,
            'category_id' => null,
        ];
    }

    public function title($title): ArticleFactory
    {
        return $this->state(function (array $attributes) use ($title) {
            return [
                'title' => $title,
            ];
        });
    }

    public function content($content): ArticleFactory
    {
        return $this->state(function (array $attributes) use ($content) {
            return [
                'title' => $content,
            ];
        });
    }
}
