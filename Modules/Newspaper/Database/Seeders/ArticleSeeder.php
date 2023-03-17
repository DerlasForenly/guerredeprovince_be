<?php

namespace Modules\Newspaper\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Modules\Newspaper\Models\Article;
use Modules\Newspaper\Models\Category;
use Modules\Newspaper\Models\Comment;
use Modules\Newspaper\Models\Rating;
use Modules\Settings\Models\Language;
use Modules\User\Models\User;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Article::factory()
            ->newspaper(1)
            ->count(2)
            ->create();

        Article::factory()
            ->newspaper(2)
            ->count(2)
            ->create();

        Article::factory()
            ->count(2)
            ->create();

        Article::factory()
            ->title('Humor_' . Str::random(8))
            ->count(5)
            ->category(Category::HUMOR_ID)
            ->create();

        Article::factory()
            ->title('Science_' . Str::random(8))
            ->count(5)
            ->category(Category::SCIENCE_ID)
            ->create();

        Article::factory()
            ->title('RealPol_' . Str::random(8))
            ->count(5)
            ->category(Category::REAL_POLITICS_ID)
            ->create();

        Article::factory()
            ->title('GamePol_' . Str::random(8))
            ->count(5)
            ->category(Category::GAME_POLITICS_ID)
            ->create();

        $user = User::findByNickname('HumorLover');
        foreach (Article::where('category_id', Category::HUMOR_ID)->get() as $article) {
            Rating::factory()
                ->user($user->id)
                ->article($article->id)
                ->create();
        }

        $user = User::findByNickname('ScienceLover');
        foreach (Article::where('category_id', Category::SCIENCE_ID)->get() as $article) {
            Rating::factory()
                ->user($user->id)
                ->article($article->id)
                ->create();
        }

        $user     = User::findByNickname('PoliticLover');
        $articles = Article::whereIn('category_id', [Category::GAME_POLITICS_ID, Category::REAL_POLITICS_ID])->get();
        foreach ($articles as $article) {
            Rating::factory()
                ->user($user->id)
                ->article($article->id)
                ->create();
        }

        $user     = User::findByNickname('HumorScienceLover');
        $articles = Article::whereIn('category_id', [Category::HUMOR_ID, Category::SCIENCE_ID])->get();
        foreach ($articles as $article) {
            Rating::factory()
                ->user($user->id)
                ->article($article->id)
                ->create();
        }
    }
}