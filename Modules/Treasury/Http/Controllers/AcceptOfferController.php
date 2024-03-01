<?php

namespace Modules\Treasury\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Modules\Resource\Models\Resource;
use Modules\Treasury\Models\TradeOffer;
use Modules\Treasury\Services\TransactionService;

class AcceptOfferController extends Controller
{
    public function __invoke(Request $request, TradeOffer $offer): \Illuminate\Http\JsonResponse
    {
        Log::info('Start offer transaction: ', ['offer_id' => $offer->id]);
        /**
         * @var \Modules\User\Models\User $user
         * @var \Modules\Treasury\Models\Treasury\Treasury $userTreasury
         * @var \Modules\User\Models\User $offerOwner
         */
        $user                    = auth()->userOrFail();
        $transactionService      = new TransactionService();
        $userResourceTreasury    = $user->treasuries()->where('resource_id', $offer->resource_id)->first();
        $userMoneyTreasury       = $user->treasuries()->where('resource_id', Resource::MONEY_ID)->first();
        $offerOwnerMoneyTreasury = $offer->owner->tradeOfferMoneyTreasury;

        DB::beginTransaction();
        $transactionService->sendResources(
            $offer->isBuying ? $userResourceTreasury : $offer,
            $offer->isBuying ? $offer : $userResourceTreasury,
            $request->quantity
        );
        $transactionService->sendResources(
            $offer->isBuying ? $offerOwnerMoneyTreasury : $userMoneyTreasury,
            $offer->isBuying ? $userMoneyTreasury : $offerOwnerMoneyTreasury,
            $request->quantity * $offer->price
        );
        DB::commit();
        Log::info('Finish offer transaction: ', ['offer_id' => $offer->id]);

        return response()->json([
            'message' => 'OK',
        ]);
    }
}