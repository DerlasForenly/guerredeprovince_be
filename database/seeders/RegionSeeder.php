<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ukraine_regions = [
            'Київ',
            'Київська область',
            'Полтавська область',
            'Харківська область',
            'Донецька область',
            'Одеська область',
            'Луганська область',
            'Черкаська область',
            'Івано-Франківська область',
            'Львівська область',
            'Волинська область',
            'Закарпатська область',
            'Рівненська область',
            'Миколаївська область',
            'Автономна республіка Крим',
            'Севастополь',
            'Чернівецька область',
            'Житомирська область',
            'Чернігівська область',
            'Хмельницька область',
            'Тернопільська область',
            'Сумська область',
            'Вінницька область',
            'Дніпропетровська область',
            'Запорізька область',
            'Кропивницька область',
            'Херсонська область'
        ];

        foreach ($ukraine_regions as $region) {
            Region::factory()
                ->name($region)
                ->country(1)
                ->create();
        }

        Region::factory()
            ->count(5)
            ->country(2)
            ->create();

        Region::factory()
            ->count(5)
            ->independent()
            ->create();
    }
}
