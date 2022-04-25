<?php

namespace Modules\Action\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Modules\Action\Models\Action;
use Modules\Action\Models\ActionType;
use Modules\War\Models\Damage;
use Modules\War\Models\War;
use function auth;
use function response;

class ActionController extends Controller
{
    public function fight(Request $request, War $war)
    {
        $user = auth()->userOrFail();

        if ($user->current_region_id != $request->region_id) {
            return response()->json([
                'message' => 'You should be in war region',
            ], 418);
        }
        if (!$user->army) {
            return response()->json([
                'message' => 'You are civilian',
            ], 418);
        }
        if ($user->action) {
            if ($user->action->action_type_id !== 2) {
                return response()->json([
                    'message' => 'You are busy on other action. Nothing to do',
                ], 418);
            }

            $diff = Carbon::now()->diffInMinutes($user->action->created_at);

            if ($diff < $user->action->time) {
                return response()->json([
                    'message' => "$diff minutes left, wait",
                ], 418);
            }

            $user->action->delete();
        }

        $action = Action::create([
            'user_id' => $user->id,
            'action_type_id' => 2,
            'time' => $request->quantity,
        ]);
        $damage = Damage::create([
            'region_id' => $request->region_id,
            'war_id' => $war->id,
            'damage' => $request->quantity,
            'user_id' => $user->id,
        ]);

        return response()->json([
            'message' => 'You took damage in war',
            'damage' => $damage,
            'action' => $action,
        ], 418);
    }

    private function getExpFromWork(int $diff)
    {
        return $diff * 10;
    }
}
