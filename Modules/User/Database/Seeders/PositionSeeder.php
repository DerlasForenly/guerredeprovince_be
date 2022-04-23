<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\User\Models\Position;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::factory()
            ->name('President')
            ->description('President is a common title for the head of state in most republics.')
            ->type(1)
            ->create();

        Position::factory()
            ->name('Governor')
            ->description('A governor is, in most cases, a public official with the power to govern the executive branch of a non-sovereign or sub-national level of government, ranking under the head of state.')
            ->type(2)
            ->create();

        Position::factory()
            ->name('Minister of Defense')
            ->description('A defence minister or minister of defence is a cabinet official position in charge of a ministry of defense, which regulates the armed forces in sovereign states.')
            ->type(7)
            ->create();

        Position::factory()
            ->name('Слейвс')
            ->description('Батрачать на фабриках за копійки')
            ->type(25)
            ->create();

        Position::factory()
            ->name('Номенклатура')
            ->description('Голосують за партію!')
            ->type(21)
            ->create();
    }
}
