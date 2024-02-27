<?php

namespace Modules\Party\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Party\Actions\DeleteAction;
use Modules\Party\Models\PoliticalParty;

class DestroyController extends Controller
{
    /**
     * Remove the specified political party from storage.
     *
     * @param DeleteAction $action
     * @param PoliticalParty $party
     * @return JsonResponse
     */
    public function __invoke(
        DeleteAction $action,
        PoliticalParty $party
    ): JsonResponse {
        return $action->handler($party);
    }
}
