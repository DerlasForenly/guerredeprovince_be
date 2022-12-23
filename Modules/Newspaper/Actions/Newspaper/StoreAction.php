<?php

namespace Modules\Newspaper\Actions\Newspaper;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use Modules\Newspaper\Models\Article;
use Modules\Newspaper\Models\Newspaper;
use Modules\Newspaper\Models\NewspaperStaff;
use Modules\Position\Models\Position;
use Modules\User\Models\User;

/**
 * Class StoreAction
 */
class StoreAction
{
    /**
     * @param array $params
     * @return \Illuminate\Http\JsonResponse
     */
    public function handle(array $params): JsonResponse
    {
        /**
         * @var User $user
         */
        $user = auth()->userOrFail();

        /**
         * @var Newspaper $newspaper
         */
        $newspaper = Newspaper::create($params);

        $picture = $params['avatar'];
        $picture_name = $newspaper->id . "_avatar." . $picture->getClientOriginalExtension();
        $path = "avatars/newspapers/";

        Storage::putFileAs($path, $picture, $picture_name);

        $newspaper->avatar = $path . $picture_name;
        $newspaper->save();

        $position = NewspaperStaff::create([
           'user_id' => $user->id,
           'newspaper_id' => $newspaper->id,

           'position_id' => Position::NEWSPAPER_OWNER_ID,
        ]);

        return response()->json([
            'message'      => 'OK',
            'newspaper_id' => $newspaper->id,
        ], 201);
    }
}
