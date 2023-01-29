<?php

namespace Modules\Newspaper\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Newspaper\Models\Comment;

/**
 * Class DeleteController
 */
class DeleteController extends Controller
{
    /**
     * @param \Modules\Newspaper\Models\Comment $comment
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Comment $comment): JsonResponse
    {
        $comment->delete();

        return response()->json([
            'message' => 'OK',
        ]);
    }
}
