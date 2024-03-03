<?php

namespace Modules\Request\Services;

use Modules\Request\Models\Request;

interface AcceptStrategy
{
    public function execute(Request $request);
}