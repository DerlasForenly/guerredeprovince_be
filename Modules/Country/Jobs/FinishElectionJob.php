<?php

namespace Modules\Country\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Modules\Country\Models\Election;
use Modules\Status\Models\Status;

class FinishElectionJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @param Election $election
     */
    public function __construct(protected Election $election)
    {
    }

    public function handle(): void
    {
        $this->election->status_id = Status::FINISHED_ID;
        $this->election->save();

        /**
         * @TODO Calculate votes and create parliamentarians
         */
    }
}