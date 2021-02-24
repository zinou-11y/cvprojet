<?php

namespace App\Policies;

use App\Models\CV;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Cvpolicy
{
    use HandlesAuthorization;
    public function before($user, $search){
        if($user->is_admin and $search != 'delete'){
            return true;
        }
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CV  $cV
     * @return mixed
     */
    public function view(User $user, Cv $cv)
    {
        return true;
    }


    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CV  $cV
     * @return mixed
     */
    public function update(User $user, Cv $cv)
    {
        return $user->id === $cv->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CV  $cV
     * @return mixed
     */
    public function delete(User $user, Cv $cv)
    {
        return $user->id === $cv->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CV  $cV
     * @return mixed
     */
    public function restore(User $user, Cv $cv)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CV  $cV
     * @return mixed
     */
    public function forceDelete(User $user, Cv $cv)
    {
        //
    }
}
