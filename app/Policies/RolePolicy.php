<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Role;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine whether the user can see the roles.
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can create roles.
     *
     */
    public function create(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the role.
     *
     */
    public function update(User $user, Role $role)
    {
     
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the role.
     *
     */

    public function delete(User $user, Role $role)
    {
      
        return ($user->isAdmin());
    }
}
