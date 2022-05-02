<?php

namespace Modules\Party\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Party\Models\PoliticalPartyStaff;

class PoliticalPartyStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PoliticalPartyStaff::factory()
            ->politicalParty(1)
            ->user(2)
            ->position(1)
            ->create();

        PoliticalPartyStaff::factory()
            ->politicalParty(1)
            ->user(3)
            ->position(3)
            ->create();

        PoliticalPartyStaff::factory()
            ->politicalParty(1)
            ->user(4)
            ->position(3)
            ->create();
    }
}
