<?php

namespace App\Policies;

use App\Models\AwardNotice;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AwardNoticePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'PDE']);
    }

    public function view(User $user, AwardNotice $awardNotice): bool
    {
    }

    public function create(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'PDE']);
    }

    public function update(User $user, AwardNotice $awardNotice): bool
    {
        return $user->hasAnyRole(['admin']);
    }

    public function delete(User $user, AwardNotice $awardNotice): bool
    {
        return $user->hasAnyRole(['admin']);
    }

    public function restore(User $user, AwardNotice $awardNotice): bool
    {
    }

    public function forceDelete(User $user, AwardNotice $awardNotice): bool
    {
    }
}
