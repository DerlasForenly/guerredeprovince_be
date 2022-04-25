<?php

namespace Modules\Business\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Business\Actions\GetSalaryAction;

class GetSalaryController extends Controller
{
    public function __invoke(
        GetSalaryAction $action
    ): JsonResponse {
        return $action->handle();
    }
}
