<?php

namespace Modules\Action\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Modules\Action\Models\WorkAction;
use Modules\Business\Models\Business;
use Modules\Business\Services\SalaryService;
use Modules\Region\Models\Region;
use Modules\Status\Models\Status;
use Modules\User\Models\User;

class WorkActionJob extends ActionJob {

    /**
     * @throws \Exception
     */
    function handle(): void
    {
        Log::info("Work action job for user has been started.", ['user_id' => $this->user->id]);

        $this->action->refresh();
        $this->user->refresh();

        if ($this->action->status_id === Status::CANCELED_ID) {
            Log::info("Work action job for user has been canceled.", ['user_id' => $this->user->id]);

            return;
        }

        $salaryService = new SalaryService($this->user);

        DB::transaction(function () use ($salaryService) {
            $salaryService->sendCompensation();

            $this->action->status_id = Status::FINISHED_ID;
            $this->action->save();
        });

        Log::info("Work action job for user has been finished.", ['user_id' => $this->user->id]);
    }
}