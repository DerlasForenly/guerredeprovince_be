<?php

namespace Modules\Country\Http\Filters;

use App\Http\Filters\QueryFilter;
use App\Http\Filters\Traits\CountryFilter;
use App\Http\Filters\Traits\StatusFilter;

class ElectionFilter extends QueryFilter
{
    use CountryFilter, StatusFilter;
}