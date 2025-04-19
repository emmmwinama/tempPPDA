<?php

namespace App\Policies;

use App\Models\PDE;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PDEPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->HasRole('admin');
    }

    public function view(User $user, PDE $PDE): bool
    {
    }

    public function create(User $user): bool
    {
        return $user->HasRole('admin');
    }

    public function update(User $user, PDE $PDE): bool
    {
        return $user->HasRole('admin');
    }

    public function delete(User $user, PDE $PDE): bool
    {
        return $user->HasRole('admin');
    }

    public function restore(User $user, PDE $PDE): bool
    {
    }

    public function forceDelete(User $user, PDE $PDE): bool
    {
    }
}
