<?php

namespace Modules\Action\Jobs;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Modules\Action\Models\WorkAction;
use Modules\Business\Services\SalaryService;
use Modules\Status\Models\Status;

class WorkActionJob extends ActionJob
{
    /**
     * Create a new job instance.
     *
     * @param int $user_id
     * @param \Modules\Action\Models\WorkAction $action
     */
    public function __construct(int $user_id, protected WorkAction $action)
    {
        parent::__construct($user_id);
    }

    /**
     * @throws \Exception
     */
    public function handle(): void
    {
        Log::info("Work action job for user has been started.", ['user_id' => $this->user->id]);

        $this->action->refresh();
        $this->user->refresh();

        if ($this->action->status_id === Status::CANCELED_ID) {
            Log::info("Work action job for user has been canceled.", ['user_id' => $this->user->id]);

            return;
        }

        DB::transaction(function () {
            $salaryService = new SalaryService($this->user);
            $salaryService->sendCompensation();
            $this->action->status_id = Status::FINISHED_ID;
            $this->action->save();
        });

        Log::info("Work action job for user has been finished.", ['user_id' => $this->user->id]);
    }
}