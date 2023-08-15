<?php

namespace Modules\Action\Jobs;

use Illuminate\Support\Facades\Log;
use Modules\Action\Models\MoveAction;
use Modules\Status\Models\Status;

class MoveUserActionJob extends ActionJob
{
    /**
     * Create a new job instance.
     *
     * @param int $user_id
     * @param \Modules\Action\Models\MoveAction $action
     */
    public function __construct(int $user_id, protected MoveAction $action)
    {
        parent::__construct($user_id);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(): void
    {
        Log::info("Move action job for user has been started.", ['user_id' => $this->user->id]);

        $this->action->refresh();
        $this->user->refresh();

        if ($this->action->status_id === Status::FINISHED_ID || $this->action->status_id === Status::CANCELED_ID) {
            Log::info("Work action job for user has been canceled or finished.", ['user_id' => $this->user->id]);

            return;
        }

        $this->user->update([
            'current_region_id' => $this->action->end_region_id,
        ]);

        $this->action->update([
            'status_id' => Status::FINISHED_ID,
        ]);

        Log::info("Move action job for user has been finished.", ['user_id' => $this->user->id]);
    }
}