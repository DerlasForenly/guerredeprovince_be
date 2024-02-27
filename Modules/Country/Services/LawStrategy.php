<?php

namespace Modules\Country\Services;

use Modules\Country\Models\Law;

/**
 * The Strategy interface declares operations common to all supported versions
 * of some algorithm.
 *
 * The Context uses this interface to call the algorithm defined by Concrete
 * Strategies.
 */
interface LawStrategy
{
    public function execute(Law $law): void;
}