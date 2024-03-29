<?php

namespace Modules\Treasury\Services;

use Modules\Resource\Models\Resource;
use Modules\Treasury\Models\Treasury\Treasurable;
use Modules\Treasury\Models\Treasury\Treasury;

class TransactionService
{
    /**
     * Send resources from game
     *
     * @param Treasury $to
     * @param int $quantity
     * @return void
     */
    public function sendResourcesFromGame(Treasury $to, int $quantity): void
    {
        $to->quantity += $quantity;
        $to->save();
    }

    /**
     * Send resources from one treasury to another
     *
     * @param Treasury $from
     * @param Treasury $to
     * @param int $quantity
     * @return void
     */
    public function sendResources(Treasury $from, Treasury $to, int $quantity): void
    {
        $from->quantity -= $quantity;
        $to->quantity += $quantity;
        $from->save();
        $to->save();
    }

    public function sendMoney(Treasurable $from, Treasurable $to, int $quantity): void
    {
        $fromTreasury = $from->treasuries()->where('resource_id', Resource::MONEY_ID)->first();
        $toTreasury = $to->treasuries()->where('resource_id', Resource::MONEY_ID)->first();

        $this->sendResources($fromTreasury, $toTreasury, $quantity);
    }

    /**
     * @param Treasury $from
     * @param int $quantity
     * @return bool
     */
    private function isEnough(Treasury $from, int $quantity): bool
    {
        return $from->quantity >= $quantity;
    }

    /**
     * Send pack of resources from Treasurable model to another Treasurable model
     *
     * @param Treasurable $from
     * @param Treasurable $to
     * @param array $treasuries
     * @return void
     */
    public function send(Treasurable $from, Treasurable $to, array $treasuries): void
    {
        foreach ($treasuries as $treasury) {
            $treasuryFrom = $from->treasuries()->where('resource_id', $treasury['id']);
            $treasuryTo   = $to->treasuries()->where('resource_id', $treasury['id']);

            $this->isEnough($treasuryFrom, $treasury['quantity']) ??
                $this->sendResources($treasuryFrom, $treasuryTo, $treasury['quantity']);
        }
    }
}
