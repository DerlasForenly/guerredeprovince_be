<?php

namespace Modules\Newspaper\Database\factories;

use Database\Factories\Traits\HasArticle;
use Database\Factories\Traits\HasContent;
use Database\Factories\Traits\HasUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Modules\Newspaper\Models\Comment;

/**
 * Class CommentFactory
 */
class CommentFactory extends Factory
{
    use HasUser,
        HasArticle,
        HasContent;

    /**
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'content' => 'Content_' . Str::random(50),
        ];
    }
}
