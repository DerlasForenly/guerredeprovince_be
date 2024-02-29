<?php

namespace Modules\Country\Http\Filters;

use App\Http\Filters\QueryFilter;
use App\Http\Filters\Traits\CountryFilter;
use App\Http\Filters\Traits\PartyFilter;
use App\Http\Filters\Traits\StatusFilter;
use App\Http\Filters\Traits\TypeFilter;

class ElectionFilter extends QueryFilter
{
    use CountryFilter, StatusFilter, TypeFilter, PartyFilter;
}