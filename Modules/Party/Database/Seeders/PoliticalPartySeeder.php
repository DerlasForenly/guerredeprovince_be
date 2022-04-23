<?php

namespace Modules\Party\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Party\Models\PoliticalParty;
use Modules\User\Models\User;

class PoliticalPartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();

        PoliticalParty::factory()
            ->country(1)
            ->name('Пивне Архієпископство')
            ->tag('ПИВО')
            ->create();
    }
}
