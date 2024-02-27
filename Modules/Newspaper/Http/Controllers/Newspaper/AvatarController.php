<?php

namespace Modules\Newspaper\Http\Controllers\Newspaper;

use Illuminate\Support\Facades\Storage;
use Modules\Newspaper\Models\Newspaper;

/**
 * Class AvatarController
 */
class AvatarController
{
    public function __invoke(Newspaper $newspaper)
    {
        $path = $newspaper->avatar;

        if ($path !== null && Storage::exists($path)) {
            $path = Storage::path($path);
        } else {
            $path = Storage::path('avatars/default.jpg');
        }

        $file = basename($path);

        return response()->download($path, $file);
    }
}
