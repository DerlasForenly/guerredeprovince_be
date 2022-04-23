<?php

namespace Modules\Government\Models\Traits;

use Modules\Country\Models\Country;

trait Relationships
{
    public function countries()
    {
        return $this->belongsTo(Country::class);
    }
}
