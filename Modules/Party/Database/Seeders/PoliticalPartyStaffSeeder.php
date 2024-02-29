<?php

namespace Modules\Party\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Party\Models\PoliticalParty;
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
            ->party(1)
            ->position(Position::POLITICAL_PARTY_LEADER_ID)
            ->create();

        PoliticalPartyStaff::factory()
            ->user(2)
            ->party(2)
            ->position(Position::POLITICAL_PARTY_LEADER_ID)
            ->create();

        PoliticalPartyStaff::factory()
            ->user(3)
            ->party(3)
            ->position(Position::POLITICAL_PARTY_LEADER_ID)
            ->create();

        PoliticalPartyStaff::factory()
            ->user(4)
            ->party(4)
            ->position(Position::POLITICAL_PARTY_LEADER_ID)
            ->create();

        for ($i = 5; $i < 20; $i++) {
            PoliticalPartyStaff::factory()
                ->user($i)
                ->party(PoliticalParty::inRandomOrder()->first()->id)
                ->position(Position::POLITICAL_PARTY_MEMBER_ID)
                ->create();
        }
    }
}
