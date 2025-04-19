<?php

namespace App\Policies;

use App\Models\Newsletters;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NewslettersPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'Public Relations']);
    }

    public function view(User $user, Newsletters $newsletters): bool
    {
    }

    public function create(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'Public Relations']);
    }

    public function update(User $user, Newsletters $newsletters): bool
    {
        return $user->hasAnyRole(['admin', 'Public Relations']);
    }

    public function delete(User $user, Newsletters $newsletters): bool
    {
        return $user->hasAnyRole(['admin']);
    }

    public function restore(User $user, Newsletters $newsletters): bool
    {
    }

    public function forceDelete(User $user, Newsletters $newsletters): bool
    {
    }
}
