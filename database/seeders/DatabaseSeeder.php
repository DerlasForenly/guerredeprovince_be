<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Business\Database\Seeders\BusinessSeeder;
use Modules\Business\Database\Seeders\EmployeeSeeder;
use Modules\Business\Database\Seeders\SalaryTypeSeeder;
use Modules\Corporation\Database\Seeders\CorporationSeeder;
use Modules\Country\Database\Seeders\CountrySeeder;
use Modules\Country\Database\Seeders\CountryStaffSeeder;
use Modules\Country\Database\Seeders\GovernmentTypeSeeder;
use Modules\Country\Database\Seeders\NationSeeder;
use Modules\GamePrice\Database\Seeders\GamePriceResourceSeeder;
use Modules\GamePrice\Database\Seeders\GamePriceSeeder;
use Modules\Newspaper\Database\Seeders\ArticleSeeder;
use Modules\Newspaper\Database\Seeders\CategorySeeder;
use Modules\Newspaper\Database\Seeders\CommentSeeder;
use Modules\Newspaper\Database\Seeders\NewspaperDatabaseSeeder;
use Modules\Party\Database\Seeders\PoliticalPartySeeder;
use Modules\Party\Database\Seeders\PoliticalPartyStaffSeeder;
use Modules\Position\Database\Seeders\PositionSeeder;
use Modules\Region\Database\Seeders\RegionSeeder;
use Modules\Region\Database\Seeders\RegionTypeSeeder;
use Modules\Request\Database\Seeders\JoinRequestSeeder;
use Modules\Request\Database\Seeders\RequestSeeder;
use Modules\Request\Database\Seeders\RequestTypeSeeder;
use Modules\Resource\Database\Seeders\ResourceSeeder;
use Modules\Settings\Database\Seeders\LanguageSeeder;
use Modules\Status\Database\Seeders\StatusSeeder;
use Modules\Treasury\Database\Seeders\BusinessTreasurySeeder;
use Modules\Treasury\Database\Seeders\UserTreasurySeeder;
use Modules\User\Database\Seeders\UserSeeder;
use Modules\War\Database\Seeders\DamageSeeder;
use Modules\War\Database\Seeders\WarSeeder;
use Modules\War\Database\Seeders\WarSideSeeder;

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
            CategorySeeder::class,
            GovernmentTypeSeeder::class,
            SalaryTypeSeeder::class,
            RequestTypeSeeder::class,
            PositionSeeder::class,
            ResourceSeeder::class,
            WarSideSeeder::class,
            StatusSeeder::class,
            RegionTypeSeeder::class,
            LanguageSeeder::class,
            NationSeeder::class,
            CorporationSeeder::class,
            CountrySeeder::class,
            RegionSeeder::class,
            UserSeeder::class,
            BusinessTreasurySeeder::class,
            WarSeeder::class,
            DamageSeeder::class,
            BusinessSeeder::class,
            BusinessTreasurySeeder::class,
            UserTreasurySeeder::class,
            EmployeeSeeder::class,
            PoliticalPartySeeder::class,
            JoinRequestSeeder::class,
            PoliticalPartyStaffSeeder::class,
            GamePriceSeeder::class,
            GamePriceResourceSeeder::class,
            RequestSeeder::class,
            CountryStaffSeeder::class,
            NewspaperDatabaseSeeder::class,
            ArticleSeeder::class,
            CommentSeeder::class,
        ]);
    }
}
