<?php

namespace Modules\Newspaper\Http\Controllers\Article;

use Illuminate\Support\Facades\Storage;
use Modules\Newspaper\Models\Article;
use Modules\Newspaper\Models\Newspaper;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

/**
 * Class AvatarController
 */
class AvatarController
{
    /**
     * @param \Modules\Newspaper\Models\Article $article
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function __invoke(Article $article): BinaryFileResponse
    {
        $path = $article->avatar;

        if ($path !== null && Storage::exists($path)) {
            $path = Storage::path($path);
        } else {
            $path = Storage::path('avatars/default.jpg');
        }

        $file = basename($path);

        return response()->download($path, $file);
    }
}
