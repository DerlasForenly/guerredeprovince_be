<?php

namespace Modules\Action\Jobs;

class MoveActionJob extends ActionJob
{
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(): void
    {
        $this->user->update([
            'current_region_id' => $this->action->region_id,
        ]);
    }
}