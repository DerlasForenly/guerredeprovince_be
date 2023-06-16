<?php

namespace Modules\Treasury\Services;

use Modules\Treasury\Models\Treasury\Treasurable;
use Modules\Treasury\Models\Treasury\Treasury;

class TransactionService
{
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

    /**
     * @param Treasury $from
     * @param int $quantity
     * @return bool
     */
    private function isEnought(Treasury $from, int $quantity): bool
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

            $this->isEnought($treasuryFrom, $treasury['quantity']) ??
                $this->sendResources($treasuryFrom, $treasuryTo, $treasury['quantity']);
        }
    }
}
