<?php

namespace Modules\Treasury\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Country\Models\Country;

class CountryTreasuryController extends Controller
{
    public function __invoke(Country $country)
    {
        return $country->treasuries()->get();
    }
}
