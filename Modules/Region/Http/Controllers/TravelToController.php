<?php

namespace Modules\Region\Http\Controllers;

use Modules\Region\Actions\TravelToAction;
use Modules\Region\Models\Region;

class TravelToController
{
    /**
     * @param TravelToAction $action
     * @param Region $region
     * @return mixed
     */
    public function __invoke(
        TravelToAction $action,
        Region $region,
    ): mixed {
        return $action->handle($region);
    }
}
