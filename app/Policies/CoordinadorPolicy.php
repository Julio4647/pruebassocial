<?php

namespace App\Policies;

use App\Models\Admins;
use App\Models\Coordinador;
use Illuminate\Auth\Access\Response;

class CoordinadorPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Admins $admins): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Admins $admins, Coordinador $coordinador): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Admins $admins): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Admins $admins, Coordinador $coordinador): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Admins $admins, Coordinador $coordinador): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Admins $admins, Coordinador $coordinador): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Admins $admins, Coordinador $coordinador): bool
    {
        //
    }
}
