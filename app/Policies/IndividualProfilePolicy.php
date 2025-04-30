<?php

namespace App\Policies;

use App\Models\IndividualProfile;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class IndividualProfilePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, IndividualProfile $individualProfile): bool
    {
        return $user->id === $individualProfile->user_id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->id === Auth::id();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, IndividualProfile $individualProfile): bool
    {
        return $user->id === $individualProfile->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, IndividualProfile $individualProfile): bool
    {
        return $user->id === $individualProfile->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, IndividualProfile $individualProfile): bool
    {
        return $user->id === $individualProfile->user_id;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, IndividualProfile $individualProfile): bool
    {
        return false;
    }
}
