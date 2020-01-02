<?php

namespace App\Policies;

use App\User;
use App\Advertisements;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class AdvertisementsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any advertisements.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the advertisements.
     *
     * @param  \App\User  $user
     * @param  \App\Advertisements  $advertisements
     * @return mixed
     */
    public function view(User $user, Advertisements $advertisements)
    {
        return true;

    }

    /**
     * Determine whether the user can create advertisements.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {

    }

    /**
     * Determine whether the user can update the advertisements.
     *
     * @param  \App\User  $user
     * @param  \App\Advertisements  $advertisements
     * @return mixed
     */
    public function update(User $user, Advertisements $advertisements)
    {
        //
    }

    /**
     * Determine whether the user can delete the advertisements.
     *
     * @param  \App\User  $user
     * @param  \App\Advertisements  $advertisements
     * @return mixed
     */
    public function delete(User $user, Advertisements $advertisements)
    {
        //
    }

    /**
     * Determine whether the user can restore the advertisements.
     *
     * @param  \App\User  $user
     * @param  \App\Advertisements  $advertisements
     * @return mixed
     */
    public function restore(User $user, Advertisements $advertisements)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the advertisements.
     *
     * @param  \App\User  $user
     * @param  \App\Advertisements  $advertisements
     * @return mixed
     */
    public function forceDelete(User $user, Advertisements $advertisements)
    {
        //
    }
}
