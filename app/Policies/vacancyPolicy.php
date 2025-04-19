<?php

namespace App\Policies;

use App\Models\User;
use App\Models\vacancy;
use Illuminate\Auth\Access\HandlesAuthorization;

class vacancyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->hasAnyRole(['admin', 'Public Relations']);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\vacancy  $vacancy
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, vacancy $vacancy)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->hasAnyRole(['admin', 'Public Relations']);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\vacancy  $vacancy
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, vacancy $vacancy)
    {
        return $user->hasAnyRole(['admin']);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\vacancy  $vacancy
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, vacancy $vacancy)
    {
        return $user->hasAnyRole(['admin']);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\vacancy  $vacancy
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, vacancy $vacancy)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\vacancy  $vacancy
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, vacancy $vacancy)
    {
        //
    }
}
