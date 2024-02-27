<?php

namespace Modules\Treasury\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Routing\Controller;
use Modules\Business\Models\Business;

class BusinessTreasuryController extends Controller
{
    public function __invoke(Business $business): Collection
    {
        return $business->treasuries()->get();
    }
}
