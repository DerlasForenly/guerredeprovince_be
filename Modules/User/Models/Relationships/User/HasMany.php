<?php

namespace Modules\User\Models\Relationships\User;

use Modules\Business\Models\Business;
use Modules\Newspaper\Models\NewspaperStaff;
use Modules\Newspaper\Models\Rating;
use Modules\Newspaper\Models\Subscription;
use Modules\Request\Models\Request;
use Modules\Treasury\Models\UserTreasury;

trait HasMany
{
    public function resources(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(UserTreasury::class, 'user_id');
    }

    public function businesses(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Business::class, 'user_id');
    }

    public function requests(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Request::class, 'user_id');
    }

    public function treasuries(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(UserTreasury::class, 'user_id');
    }

    public function subscriptions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Subscription::class, 'user_id');
    }

    public function articleRatings(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Rating::class, 'user_id')
            ->where('article_id', '<>', '');
    }

    public function commentRatings(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Rating::class, 'user_id')
            ->where('comment_id', '<>', '');
    }
}
