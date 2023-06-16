<?php

namespace Modules\Action\Services;

use Modules\Action\Models\Action;

class ActionCalculationsService
{
    public static function getRemainingTimeInSec($start, $time): int
    {
        // Get the current time
        $currentTime = time();

        // Define the start time of the action
        $actionStartTime = strtotime($start);

        // Define the duration of the action in minutes
        $actionDuration = $time;

        // Calculate the end time of the action
        $actionEndTime = $actionStartTime + ($actionDuration * 60);

        // Calculate the remaining time until the end of the action
        return $actionEndTime - $currentTime;
    }
}