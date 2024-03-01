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
            ->nickname('Derlas Forenly')
            ->email('tany.tany283@gmail.com')
            ->nation(1)
            ->country(1)
            ->create();

        for ($i = 0; $i < 20; $i++) {
            User::factory()
                ->nickname('Test_user_' . Str::random(10))
                ->email(Str::random(10) . '@gmail.com')
                ->create();
        }

        $recommendationTestingUsers = [
            'HumorLover',
            'ScienceLover',
            'PoliticLover',
            'HumorScienceLover',
            'HumorHater',
            'PoliticHaterHumorLover',
            'NoneLover',
            'NoneHater',
            'AllLover',
            'AllHater',
            'AllExceptHumorLover',
            'HSPLover',
            'Trader1',
        ];

        foreach ($recommendationTestingUsers as $user) {
            User::factory()
                ->nickname($user)
                ->email(Str::random(10) . '@gmail.com')
                ->create();
        }
    }
}
