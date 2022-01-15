<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            ->count(3)
            ->country(1)
            ->create();

        User::factory()
            ->count(3)
            ->nation(1)
            ->create();

        User::factory()
            ->count(10)
            ->country(1)
            ->create();
    }
}
