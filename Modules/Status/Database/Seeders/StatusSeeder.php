<?php

namespace Modules\Status\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Status\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        foreach (Status::STATUSES as $key => $status) {
            Status::create([
               'id' => $key,
               'name' => $status,
            ]);
        }
    }
}
