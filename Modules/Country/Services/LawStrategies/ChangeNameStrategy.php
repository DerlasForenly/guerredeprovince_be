<?php

namespace Modules\Country\Services\LawStrategies;

use Illuminate\Support\Facades\DB;
use Modules\Country\Models\Law;
use Modules\Country\Services\LawStrategy;
use Modules\Status\Models\Status;

class ChangeNameStrategy implements LawStrategy
{
    public function execute(Law $law): void
    {
        $law->refresh();
        DB::beginTransaction();

        $country        = $law->country;
        $meta           = json_decode($law->meta, true);
        $country->name  = $meta['name'];
        $law->status_id = Status::FINISHED_ID;

        $law->save();
        $country->save();
        DB::commit();
    }
}