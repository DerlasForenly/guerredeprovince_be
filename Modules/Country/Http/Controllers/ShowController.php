<?php

namespace Modules\Country\Http\Controllers;

use Modules\Country\Models\Country;

class ShowController
{
    /**
     * Show the specified resource.
     * @param Country $country
     * @return Country
     */
    public function __invoke(Country $country): Country
    {
        return $country;
    }
}
