<?php

namespace Modules\Action\Services;

class ActionCalculationsService
{
    /**
     * @param string $start
     * @param int $time
     * @param bool $timeInSeconds
     *
     * @return int
     */
    public static function getRemainingTimeInSec(string $start, int $time, bool $timeInSeconds = false): int
    {
        $currentTime     = time();
        $actionStartTime = strtotime($start);
        $time            = $timeInSeconds ? $time : $time * 60;

        $actionEndTime = $actionStartTime + $time;

        return $actionEndTime - $currentTime;
    }
}