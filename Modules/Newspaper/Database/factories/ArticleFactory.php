<?php

namespace Modules\Newspaper\Database\factories;

use Database\Factories\Traits\HasNewspaper;
use Database\Factories\Traits\HasUser;
use Illuminate\Support\Str;
use Modules\Newspaper\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class ArticleFactory
 */
class ArticleFactory extends Factory
{
    use HasNewspaper,
        HasUser;

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

    /**
     * @param string $title
     * @return \Modules\Newspaper\Database\factories\ArticleFactory
     */
    public function title(string $title): ArticleFactory
    {
        return $this->state(function (array $attributes) use ($title) {
            return [
                'title' => $title,
            ];
        });
    }

    /**
     * @param string $content
     * @return \Modules\Newspaper\Database\factories\ArticleFactory
     */
    public function content(string $content): ArticleFactory
    {
        return $this->state(function (array $attributes) use ($content) {
            return [
                'content' => $content,
            ];
        });
    }
}
