<?php

namespace PAL\Policies;

use PAL\User;
use PAL\Photo;
use Illuminate\Auth\Access\HandlesAuthorization;

class PhotoMemoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the photo.
     *
     * @param  \PAL\User  $user
     * @param  \PAL\Photo  $photo
     * @return mixed
     */
    public function view(User $user, Photo $photo)
    {
        //
    }

    /**
     * Determine whether the user can create photos.
     *
     * @param  \PAL\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the photo.
     *
     * @param  \PAL\User  $user
     * @param  \PAL\Photo  $photo
     * @return mixed
     */
    public function update(User $user, Photo $photo)
    {
        return $user->id === $photo->user_id;
    }

    /**
     * Determine whether the user can delete the photo.
     *
     * @param  \PAL\User  $user
     * @param  \PAL\Photo  $photo
     * @return mixed
     */
    public function delete(User $user, Photo $photo)
    {
        //
    }

    /**
     * Determine whether the user can restore the photo.
     *
     * @param  \PAL\User  $user
     * @param  \PAL\Photo  $photo
     * @return mixed
     */
    public function restore(User $user, Photo $photo)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the photo.
     *
     * @param  \PAL\User  $user
     * @param  \PAL\Photo  $photo
     * @return mixed
     */
    public function forceDelete(User $user, Photo $photo)
    {
        //
    }
}
