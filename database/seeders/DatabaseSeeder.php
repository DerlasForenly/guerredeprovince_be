<?php

namespace Database\Seeders;

use App\Models\CountryStaff;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GovernmentTypeSeeder::class,
            SalaryTypeSeeder::class,
            ActionTypeSeeder::class,
            RequestTypeSeeder::class,
            PositionTypeSeeder::class,
            PositionSeeder::class,
            ResourceSeeder::class,
            WarSideSeeder::class,
            StatusSeeder::class,
            RegionTypeSeeder::class,
            LanguageSeeder::class,
            NationSeeder::class,
            CorporationSeeder::class,
            UserSeeder::class,
            UserTreasurySeeder::class,
            CountrySeeder::class,
            RegionSeeder::class,
            WarSeeder::class,
            RegionWarSeeder::class,
            DamageSeeder::class,
            BusinessSeeder::class,
            EmployeeSeeder::class,
            PoliticalPartySeeder::class,
            PoliticalPartyStaffSeeder::class,
            GamePriceSeeder::class,
            GamePriceResourceSeeder::class,
            RequestSeeder::class,
            CountryStaffSeeder::class,
        ]);
    }
}
