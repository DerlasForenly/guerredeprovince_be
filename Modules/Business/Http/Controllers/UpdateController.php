<?php

namespace Modules\Business\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Business\Actions\UpdateAction;
use Modules\Party\Http\Requests\UpdateRequest;
use Modules\Business\Models\Business;

class UpdateController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param UpdateAction $action
     * @param Business $business
     * @return Business
     */
    public function __invoke(
        UpdateRequest $request,
        UpdateAction $action,
        Business $business
    ): Business {
        return $action->handler($business);
    }
}
