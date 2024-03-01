<?php

namespace Modules\User\Models\Relationships\User;

use Modules\Action\Models\MoveAction;
use Modules\Action\Models\WarAction;
use Modules\Action\Models\WorkAction;
use Modules\Army\Models\Army;
use Modules\Business\Models\Employee;
use Modules\Country\Models\CountryStaff;
use Modules\Newspaper\Models\NewspaperStaff;
use Modules\Party\Models\PoliticalPartyStaff;
use Modules\Resource\Models\Resource;
use Modules\Status\Models\Status;
use Modules\Treasury\Models\TradeOffer;

trait HasOne
{
    public function countryStaff(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(CountryStaff::class);
    }

    public function inProcessMove(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(MoveAction::class)->where('status_id', Status::IN_PROCESS_ID);
    }

    public function inProcessWork(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(WorkAction::class)
            ->where('status_id', Status::IN_PROCESS_ID);
    }

    public function inProcessWar(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(WarAction::class)
            ->where('status_id', Status::IN_PROCESS_ID);
    }

    public function army(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Army::class);
    }

    public function employee(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Employee::class);
    }

    public function politicalPartyStaff(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(PoliticalPartyStaff::class, 'user_id');
    }

    public function newspaperStaff(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(NewspaperStaff::class, 'user_id');
    }

    public function tradeOfferMoneyTreasury()
    {
        return $this->hasOne(TradeOffer::class, 'user_id', 'id')
            ->where('resource_id', Resource::MONEY_ID);
    }
}
