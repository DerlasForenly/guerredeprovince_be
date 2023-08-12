<?php

namespace Modules\Action\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Modules\Region\Models\Region;
use Modules\User\Models\User;

class WarActionJob extends ActionJob {

    function handle()
    {
        // TODO: Implement handle() method.
    }
}