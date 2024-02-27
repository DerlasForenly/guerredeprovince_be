<?php

namespace Modules\Newspaper\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Newspaper\Database\factories\NewspaperStaffFactory;
use Modules\Newspaper\Models\Article;
use Modules\Newspaper\Models\Comment;
use Modules\Newspaper\Models\Newspaper;
use Modules\Newspaper\Models\NewspaperStaff;
use Modules\Newspaper\Models\Rating;
use Modules\Newspaper\Models\Subscription;
use Modules\Position\Models\Position;
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

        Subscription::factory()
            ->user(1)
            ->newspaper(1)
            ->create();

        NewspaperStaff::factory()
            ->user(2)
            ->newspaper(1)
            ->position(Position::NEWSPAPER_EDITOR_ID)
            ->create();

        NewspaperStaff::factory()
            ->user(3)
            ->newspaper(1)
            ->position(Position::NEWSPAPER_EDITOR_ID)
            ->create();

        NewspaperStaff::factory()
            ->user(4)
            ->newspaper(1)
            ->position(Position::NEWSPAPER_SECRETARY_ID)
            ->create();
    }
}
