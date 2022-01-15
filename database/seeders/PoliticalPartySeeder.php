<?php

namespace Database\Seeders;

use App\Models\PoliticalParty;
use App\Models\User;
use Illuminate\Database\Seeder;

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
