<?php

namespace Modules\Country\Http\Controllers;

use Modules\Country\Http\Resources\CountryResource;
use Modules\Country\Models\Country;

class ShowController
{
    /**
     * Show the specified resource.
     * @param Country $country
     * @return \Modules\Country\Http\Resources\CountryResource
     */
    public function __invoke(Country $country): CountryResource
    {
        return new CountryResource($country);
    }
}
