<?php

namespace Modules\Treasury\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Resource\Models\Resource;
use Modules\Treasury\Http\Requests\StoreTradeOfferRequest;
use Modules\Treasury\Models\TradeOffer;
use Modules\Treasury\Services\TransactionService;

class StoreTradeOfferController extends Controller
{
    public function __invoke(StoreTradeOfferRequest $request): \Illuminate\Http\JsonResponse
    {
        /**
         * @var \Modules\User\Models\User $user
         * @var \Modules\Treasury\Models\Treasury\Treasury $userMoneyTreasury
         * @var \Modules\Treasury\Models\Treasury\Treasury $userResourceTreasury
         */
        $user                 = auth()->userOrFail();
        $transactionService   = new TransactionService();
        $userResourceTreasury = $user->treasuries()->where('resource_id', $request->resource_id)->first();
        $userMoneyTreasury    = $user->treasuries()->where('resource_id', Resource::MONEY_ID)->first();

        DB::beginTransaction();
        if ($request->is_buying) {
            $offer = TradeOffer::create([
                'user_id'     => $user->id,
                'resource_id' => $request->resource_id,
                'quantity'    => $request->quantity,
                'is_buying'   => $request->is_buying,
                'price'       => $request->price,
            ]);

            $bank = $user->tradeOfferMoneyTreasury;
            if (!$bank) {
                $bank = TradeOffer::create([
                    'user_id'     => $user->id,
                    'resource_id' => Resource::MONEY_ID,
                    'quantity'    => $request->quantity * $request->price,
                    'is_buying'   => false,
                    'price'       => 1,
                ]);
            }

            $transactionService->sendResources(
                $userMoneyTreasury,
                $bank,
                $request->quantity * $request->price
            );
        } else {
            $offer = TradeOffer::create([
                'user_id'     => $user->id,
                'resource_id' => $request->resource_id,
                'is_buying'   => $request->is_buying,
                'price'       => $request->price,
            ]);

            $transactionService->sendResources(
                $userResourceTreasury,
                $offer,
                $request->quantity
            );
        }
        DB::commit();

        return response()->json([
            'message' => 'OK',
            'offer'   => $offer,
        ], 201);
    }
}