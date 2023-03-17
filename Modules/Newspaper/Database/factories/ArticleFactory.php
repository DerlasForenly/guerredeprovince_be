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
use Modules\Newspaper\Models\Category;
use Modules\Settings\Models\Language;
use Modules\User\Models\User;

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
            'user_id'      => User::all()->random(),
            'category_id'  => Category::all()->random(),
            'language_id'  => Language::UKRAINIAN_ID,
        ];
    }

    /**
     * @param int $id
     * @return $this
     */
    public function category(int $id): self
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'category_id' => $id,
            ];
        });
    }
}
