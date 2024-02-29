<?php

namespace Modules\Country\Services;

use Modules\Country\Models\Election;

/**
 * The Strategy interface declares operations common to all supported versions
 * of some algorithm.
 *
 * The Context uses this interface to call the algorithm defined by Concrete
 * Strategies.
 */
interface ElectionStrategy
{
    public function execute(Election $election): void;
}