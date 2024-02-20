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
    public function run(): void
    {
        PoliticalParty::factory()
            ->country(1)
            ->name('Пивне Архієпископство')
            ->tag('ПИВО')
            ->create();

        PoliticalParty::factory()
            ->country(1)
            ->name('Партія Короля Артура')
            ->tag('АРТ')
            ->create();

        PoliticalParty::factory()
            ->country(1)
            ->name('Союз Визволителів Капібара')
            ->tag('СВК')
            ->create();

        PoliticalParty::factory()
            ->country(1)
            ->name('Станція метро "Оболонь"')
            ->tag('CMO')
            ->create();
    }
}
