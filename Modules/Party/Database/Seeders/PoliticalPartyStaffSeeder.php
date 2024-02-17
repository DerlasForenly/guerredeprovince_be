<?php

namespace Modules\Party\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Party\Models\PoliticalPartyStaff;
use Modules\Position\Models\Position;

class PoliticalPartyStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        PoliticalPartyStaff::factory()
            ->user(1)
            ->politicalParty(1)
            ->position(Position::POLITICAL_PARTY_LEADER_ID)
            ->create();
    }
}
