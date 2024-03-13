<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Thread;

class ThreadPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function hasPermissions(User $user, Thread $thread): bool {
        return $user->id === $thread->user_id || $user->isAdmin();
    }
}
