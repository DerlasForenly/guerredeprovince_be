<?php

namespace Modules\Country\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Modules\Country\Models\Law;
use Modules\Country\Services\LawProjectExecutor;

/**
 *
 */
class ExecuteLawProjectJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @param \Modules\Country\Models\Law $law
     */
    public function __construct(protected Law $law)
    {
    }

    /**
     * @return void
     */
    public function handle(): void
    {
        $executor = new LawProjectExecutor($this->law);
        $executor->execute();
    }
}