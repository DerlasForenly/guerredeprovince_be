<?php

use Illuminate\Support\Facades\Redis;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

use Illuminate\Support\Facades\Route;
use Modules\Action\Jobs\WorkActionJob;
use Modules\Action\Models\WorkAction;
use Modules\Status\Models\Status;

Route::get('/test-redis', function () {
    try {
        Redis::set('test', 'Hello, Redis!');

        $user = \Modules\User\Models\User::find(1);

        $action = WorkAction::create([
            'user_id'        => $user->id,
            'time'           => 15,
            'business_id'    => $user->employee->business->id,
            'salary'         => $user->employee->business->salary,
            'salary_type_id' => $user->employee->business->salary_type_id,
            'status_id'      => Status::IN_PROCESS_ID,
        ]);

        WorkActionJob::dispatch($user, $action)
            ->delay(now()->addSeconds(1));

        return $action;
    } catch (Exception $e) {
        return "Error: " . $e->getMessage();
    }
});
