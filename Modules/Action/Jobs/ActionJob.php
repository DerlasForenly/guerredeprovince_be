<?php

namespace Modules\Action\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Modules\Action\Models\Action;
use Modules\User\Models\User;

/**
 * @TODO Update logic for jobs to work with realizations instead of abstractions
 */
abstract class ActionJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var \Modules\User\Models\User
     */
    protected User $user;

    /**
     * Create a new job instance.
     *
     * @param int $user_id
     */
    public function __construct(int $user_id)
    {
        $this->user = User::find($user_id);
    }

    abstract public function handle();
}