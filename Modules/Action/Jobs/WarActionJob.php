<?php

namespace Modules\Action\Jobs;

use Illuminate\Support\Facades\Log;
use Modules\Action\Models\WarAction;
use Modules\Status\Models\Status;

class WarActionJob extends ActionJob
{
    /**
     * Create a new job instance.
     *
     * @param int $user_id
     * @param \Modules\Action\Models\WarAction $action
     */
    public function __construct(int $user_id, protected WarAction $action)
    {
        parent::__construct($user_id);
    }

    /**
     * @return void
     */
    public function handle(): void
    {
        Log::info("War action job for user has been started.", ['user_id' => $this->user->id]);

        $this->action->refresh();
        $this->user->refresh();

        if ($this->action->status_id === Status::FINISHED_ID || $this->action->status_id === Status::CANCELED_ID) {
            Log::info("War action job for user has been canceled or finished.", ['user_id' => $this->user->id]);

            return;
        }

        Log::info("War action job for user has been finished.", ['user_id' => $this->user->id]);
    }
}