<?php

namespace Modules\Country\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Modules\Country\Models\Election;
use Modules\Country\Services\ElectionFinishExecutor;

class FinishElectionJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Time when election is in progress
     */
    const TIME = 15;

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
        $finishElection = new ElectionFinishExecutor($this->election);
        $finishElection->execute();
    }
}