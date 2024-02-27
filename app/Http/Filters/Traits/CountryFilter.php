<?php

namespace App\Http\Filters\Traits;

/**
 * @mixin \App\Http\Filters\QueryFilter
 */
trait CountryFilter
{
    public function country(int $id): void
    {
        $this->builder->where('country_id', $id);
    }
}