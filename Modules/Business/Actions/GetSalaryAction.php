<?php

namespace Modules\Business\Actions;

use Illuminate\Http\JsonResponse;
use Modules\Business\Services\SalaryService;

class GetSalaryAction
{
    /**
     * @return JsonResponse
     */
    public function handle(): JsonResponse
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
        ], 200);
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
