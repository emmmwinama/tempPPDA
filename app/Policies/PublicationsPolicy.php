<?php

namespace App\Policies;

use App\Models\Publications;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PublicationsPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'Public Relations']);
    }

    public function view(User $user, Publications $publications): bool
    {
    }

    public function create(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'Public Relations']);
    }

    public function update(User $user, Publications $publications): bool
    {
        return $user->hasAnyRole(['admin', 'Public Relations']);
    }

    public function delete(User $user, Publications $publications): bool
    {
        return $user->hasAnyRole(['admin']);
    }

    public function restore(User $user, Publications $publications): bool
    {
    }

    public function forceDelete(User $user, Publications $publications): bool
    {
    }
}
