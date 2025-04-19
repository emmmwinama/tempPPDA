<?php

namespace App\Policies;

use App\Models\OpenTender;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OpenTenderPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'PDE']);
    }

    public function view(User $user, OpenTender $openTender): bool
    {
    }

    public function create(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'PDE']);
    }

    public function update(User $user, OpenTender $openTender): bool
    {
        return $user->hasAnyRole(['admin']);
    }

    public function delete(User $user, OpenTender $openTender): bool
    {
        return $user->hasAnyRole(['admin']);
    }

    public function restore(User $user, OpenTender $openTender): bool
    {
    }

    public function forceDelete(User $user, OpenTender $openTender): bool
    {
    }
}
