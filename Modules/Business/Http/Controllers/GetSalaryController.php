<?php

namespace Modules\Business\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Business\Services\SalaryService;

class GetSalaryController extends Controller
{
    public function __invoke(): JsonResponse
    {
        $user = auth()->userOrFail();
        $salaryService = new SalaryService($user);

        $compensation  = $salaryService->sendCompensation();
        $time          = $compensation['time'];
        $exp           = $compensation['exp'];
        $resources     = $compensation['resources'];

        $this->releasePlayer($user);

        return response()->json([
            'message' => "You worked for $time minutes.",
            'salary' => $resources,
            'exp' => $exp,
        ]);
    }

    /**
     * Remove action to make player able to act other actions
     *
     * @param $user
     * @return void
     */
    private function releasePlayer($user): void
    {
        $user->action->delete();
    }
}
