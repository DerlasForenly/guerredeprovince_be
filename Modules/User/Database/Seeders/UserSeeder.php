<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
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
            ->count(5)
            ->create();
    }
}
