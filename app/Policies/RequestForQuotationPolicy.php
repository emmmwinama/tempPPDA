<?php

namespace App\Policies;

use App\Models\RequestForQuotation;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RequestForQuotationPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole(['admin']);
    }

    public function view(User $user, RequestForQuotation $requestForQuotation): bool
    {
    }

    public function create(User $user): bool
    {
        return $user->hasAnyRole(['admin']);
    }

    public function update(User $user, RequestForQuotation $requestForQuotation): bool
    {
        return $user->hasAnyRole(['admin']);
    }

    public function delete(User $user, RequestForQuotation $requestForQuotation): bool
    {

        return $user->hasAnyRole(['admin']);
//        if ($user->hasPermissionTo('Delete')){
//            return true;
//        }
//        return false;
    }

    public function restore(User $user, RequestForQuotation $requestForQuotation): bool
    {
    }

    public function forceDelete(User $user, RequestForQuotation $requestForQuotation): bool
    {
    }
}
