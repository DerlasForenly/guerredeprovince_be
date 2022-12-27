<?php

namespace Modules\User\Actions;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use Modules\User\Models\User;

/**
 * Class UpdateAction
 */
class UpdateAction
{
    /**
     * @param \Modules\User\Models\User $user
     * @param array $params
     * @return \Illuminate\Http\JsonResponse
     */
    public function handle(User $user, array $params): JsonResponse
    {
        $user->update($params);

        $picture = $params['avatar'];
        $picture_name = $user->id . "_avatar." . $picture->getClientOriginalExtension();
        $path = "avatars/users/";

        Storage::putFileAs($path, $picture, $picture_name);

        $user->avatar = $path . $picture_name;
        $user->save();

        return response()->json([
            'message' => 'OK',
            'user_id' => $user->id,
        ]);
    }
}
