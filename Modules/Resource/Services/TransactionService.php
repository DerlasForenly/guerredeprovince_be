<?php

namespace Modules\Resource\Services;

use Modules\Treasury\Models\Treasury\Treasury;

class TransactionService
{
    /**
     * @param Treasury $from
     * @param Treasury $to
     * @param int $quantity
     * @return void
     */
    public static function send(Treasury $from, Treasury $to, int $quantity): void
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
    public static function isEnought(Treasury $from, int $quantity): bool
    {
        return $from->quantity >= $quantity;
    }
}
