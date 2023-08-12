<?php

namespace App\Listeners;

use App\Events\ActionProcessed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class EndAction
{

    /**
     * Время (в секундах) до обработки задания.
     *
     * @var int
     */
    public $delay = 60;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\ActionProcessed  $event
     * @return void
     */
    public function handle(ActionProcessed $event)
    {
        //
    }
}
