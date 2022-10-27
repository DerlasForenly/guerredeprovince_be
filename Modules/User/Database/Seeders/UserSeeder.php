<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Modules\User\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->nickname('Test_user_' . Str::random(10))
            ->email(Str::random(10) . '@gmail.com')
            ->count(5)
            ->create();

        User::factory()
            ->nickname('Derlas Forenly')
            ->email('tany.tany283@gmail.com')
            ->nation(1)
            ->country(1)
            ->create();

        User::factory()
            ->nickname('Sora von Einzbern')
            ->email('soso.soso@gmail.com')
            ->nation(1)
            ->country(1)
            ->create();

        User::factory()
            ->nickname('Бодя Ножик')
            ->email('bknife@gmail.com')
            ->nation(1)
            ->country(1)
            ->create();

        User::factory()
            ->nickname('Туман')
            ->email('tuman@gmail.com')
            ->create();
    }
}
