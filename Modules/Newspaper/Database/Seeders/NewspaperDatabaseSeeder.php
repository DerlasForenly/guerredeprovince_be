<?php

namespace Modules\Newspaper\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Newspaper\Models\Article;
use Modules\Newspaper\Models\Newspaper;
use Modules\Newspaper\Models\Rating;
use Modules\Newspaper\Models\Subscription;
use Modules\Settings\Models\Language;
use Modules\User\Models\User;

/**
 * Class NewspaperDatabaseSeeder
 */
class NewspaperDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Newspaper::factory()->count(2)->create();

        Article::factory()
            ->newspaper(1)
            ->count(5)
            ->language(Language::UKRAINIAN_ID)
            ->create();

        Article::factory()
            ->newspaper(2)
            ->count(3)
            ->language(Language::UKRAINIAN_ID)
            ->create();

        Article::factory()
            ->count(5)
            ->language(Language::UKRAINIAN_ID)
            ->create();

        Subscription::factory()
            ->user(1)
            ->newspaper(1)
            ->create();

        /**
         * @var User $user
         * @var Article $article
         */
        foreach (User::all() as $user) {
            foreach (Article::all() as $article) {
                Rating::factory()
                    ->user($user->id)
                    ->article($article->id)
                    ->create();
            }
        }
    }
}
