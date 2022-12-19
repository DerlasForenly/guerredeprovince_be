<?php

namespace Modules\Newspaper\Database\factories;

use Database\Factories\Traits\HasContent;
use Database\Factories\Traits\HasLanguage;
use Database\Factories\Traits\HasNewspaper;
use Database\Factories\Traits\HasTitle;
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
        HasUser,
        HasTitle,
        HasContent,
        HasLanguage;

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
            'title'        => 'Article_' . Str::random(8),
            'content'      => 'Content for article with random string',
            'newspaper_id' => null,
            'user_id'      => 1,
            'category_id'  => null,
            'language_id'  => null,
        ];
    }
}
