<?php

namespace App;

use App\Models\User;

trait Likable
{
    public function like($user = null)
    {
        $user ??= auth()->user();

        return $this->likes()->attach($user);
    }

    public function likes()
    {
        return $this->morphToMany(User::class, 'likable')->withTimestamps();
    }
}
