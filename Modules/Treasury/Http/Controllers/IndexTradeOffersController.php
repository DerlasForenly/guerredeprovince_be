<?php

namespace Modules\Treasury\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Modules\Resource\Models\Resource;
use Modules\Treasury\Http\Resources\TradeOfferResource;
use Modules\Treasury\Models\TradeOffer;

class IndexTradeOffersController extends Controller
{
    public function __invoke(): AnonymousResourceCollection
    {
        return TradeOfferResource::collection(TradeOffer::whereNot('resource_id', Resource::MONEY_ID)->get());
    }
}