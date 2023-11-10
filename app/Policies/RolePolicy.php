<?php

namespace App\Policies;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class RolePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermission('role_access');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, \App\Models\Role $role): bool
{
    // Lógica para determinar si $user puede ver $role
    return true; // o alguna lógica más específica
}


    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermission('role_create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, \App\Models\Role $role): bool
{
    // Lógica para determinar si $user puede actualizar $role
    return true; // o alguna lógica más específica
}


    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, \App\Models\Role $role): bool
{
    // Lógica para determinar si $user puede eliminar $role
    return true; // o alguna lógica más específica
}


    public function deleteAny(User $user)
    {
        return $user->hasPermission('role_delete');
    }
    
    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Permission $permission): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Permission $permission): bool
    {
        //
    }
}
