<?php

namespace Modules\Newspaper\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\User\Models\User;

/**
 * Class Rating
 *
 * @property boolean $value
 * @property int $user_id
 * @property int $article_id
 * @property int $comment_id
 *
 * @property User $user
 * @property \Modules\Newspaper\Models\Article $article
 * @property Comment $comment
 */
class Rating extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'value',
        'user_id',
        'article_id',
        'comment_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class, 'article_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function comment(): BelongsTo
    {
        return $this->belongsTo(Comment::class, 'comment_id');
    }
}
