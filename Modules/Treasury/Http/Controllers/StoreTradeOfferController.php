<?php

namespace Modules\Treasury\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Modules\Treasury\Models\TradeOffer;

class StoreTradeOfferController extends Controller
{

    public function __invoke(Request $request): \Illuminate\Http\JsonResponse
    {
        /**
         * @var \Modules\User\Models\User $user
         */
        $user = auth()->user();

        $offer = TradeOffer::create([
            'user_id' => $user->id,
            'resource_id' => $request->resource_id,
            'quantity' => $request->quantity,
            'isBuying' => $request->isBuying,
            'price' => $request->price
        ]);

        return response()->json([
            'message' => 'OK',
            'offer' => $offer,
        ], 201);
    }
}