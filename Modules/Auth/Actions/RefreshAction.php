<?php

namespace Modules\Auth\Actions;

use Illuminate\Http\JsonResponse;
use Modules\Auth\Actions\Traits\CreateNewToken;

class RefreshAction
{
    use CreateNewToken;

    /**
     * @return JsonResponse
     */
    public function handle(): JsonResponse
    {
        return $this->createNewToken(auth()->refresh());
    }
}
