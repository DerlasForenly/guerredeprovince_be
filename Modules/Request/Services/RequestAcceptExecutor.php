<?php

namespace Modules\Request\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Modules\Request\Models\Request;
use Modules\Request\Models\RequestType;
use Modules\Request\Services\Strategies\AcceptJoinPartyRequestStrategy;
use Modules\Status\Models\Status;

class RequestAcceptExecutor
{
    const STRATEGIES = [
        RequestType::JOIN_PARTY_ID => AcceptJoinPartyRequestStrategy::class,
    ];

    /**
     * @var \Modules\Request\Services\AcceptStrategy Context maintains a reference to one of the Strategy
     * objects. The Context does not know the concrete class of a strategy. It
     * should work with all strategies via the Strategy interface.
     */
    protected AcceptStrategy $strategy;

    /**
     * @param \Modules\Request\Models\Request $request
     */
    public function __construct(protected Request $request)
    {
        $className      = self::STRATEGIES[$request->type_id];
        $this->strategy = new $className($request);
    }

    /**
     * The Context delegates some work to the Strategy object instead of
     * implementing multiple versions of the algorithm on its own.
     *
     * @return void
     */
    public function execute(): void
    {
        Log::info('Started accepting request.', ['request_id' => $this->request->id]);
        DB::beginTransaction();

        $this->strategy->execute($this->request);

        $this->request->status_id = Status::ACCEPTED_ID;
        $this->request->save();

        DB::commit();
        Log::info('Finished accepting request.', ['request_id' => $this->request->id]);
    }
}