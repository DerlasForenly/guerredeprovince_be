<?php

namespace Modules\Business\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Business\Models\Business;

class DestroyController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param Business $business
     * @return Business
     */
    public function __invoke(Business $business): Business
    {
        return $business;
    }
}
