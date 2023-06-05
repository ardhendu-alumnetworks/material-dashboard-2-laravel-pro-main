<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Item;
use Illuminate\Auth\Access\HandlesAuthorization;

class ItemPolicy
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
     * Determine whether the user can see the items.
     */
    public function viewAny()
    {
        return true;
    }

    /**
     * Determine whether the user can create items.
     */
    public function create(User $user)
    {
        return $user->isAdmin() || $user->isCreator();
    }

    /**
     * Determine whether the user can update the item.
     */
    public function update(User $user, Item $item)
    {
        
        return ($user->isAdmin() || $user->isCreator());
    }

    /**
     * Determine whether the user can delete the item.
     */
    public function delete(User $user, Item $item)
    {
        
        return ($user->isAdmin() || $user->isCreator());
    }
}
