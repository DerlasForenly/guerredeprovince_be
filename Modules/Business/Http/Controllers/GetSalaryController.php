<?php

namespace Modules\Business\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Business\Services\SalaryService;

class GetSalaryController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(): JsonResponse
    {
        /**
         * @var \Modules\User\Models\User $user
         */
        $user          = auth()->userOrFail();
        $salaryService = new SalaryService($user);
        $time          = $salaryService->getWorkTime();

        DB::transaction(function () use ($user, $salaryService) {
            $salaryService->sendCompensation();
            $user->action->delete();
        });

        return response()->json([
            'message' => "You have been working for $time minutes.",
        ]);
    }
}
