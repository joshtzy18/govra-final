<?php

namespace App\Policies;

use App\Models\NewsUpdates;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class NewsUpdatesPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        if($user->hasPermissionTo('View News Update') || $user->hasPermissionTo('CRUD News Update')){
            return true;
        }
        return false;
        
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, NewsUpdates $newsUpdates): bool
    {
        if($user->hasPermissionTo('View News Update') || $user->hasPermissionTo('CRUD News Update')){
            return true;
        }
        return false;
        
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        if($user->hasPermissionTo('Create News Update') || $user->hasPermissionTo('CRUD News Update')){
            return true;
        }
        return false;
        
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, NewsUpdates $newsUpdates): bool
    {
        if($user->hasPermissionTo('Update News Update') || $user->hasPermissionTo('CRUD News Update')){
            return true;
        }
        return false;
        
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, NewsUpdates $newsUpdates): bool
    {
        if($user->hasPermissionTo('Delete News Update') || $user->hasPermissionTo('CRUD News Update')){
            return true;
        }
        return false;
        
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, NewsUpdates $newsUpdates): bool
    {

        
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, NewsUpdates $newsUpdates): bool
    {
        
        
    }
}