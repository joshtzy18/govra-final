<?php

namespace App\Policies;

use App\Models\Announcement;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AnnouncementPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        if($user->hasPermissionTo('View Announcement') || $user->hasPermissionTo('CRUD Announcement')){
            return true;
        }
        return false;
        
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user): bool
    {
        if($user->hasPermissionTo('View Announcement') || $user->hasPermissionTo('CRUD Announcement')){
            return true;
        }
        return false;
        
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        if($user->hasPermissionTo('Create Announcement') || $user->hasPermissionTo('CRUD Announcement')){
            return true;
        }
        return false;
        
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user): bool
    {
        if($user->hasPermissionTo('Update Announcement') || $user->hasPermissionTo('CRUD Announcement')){
            return true;
        }
        return false;
        
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user): bool
    {
        if($user->hasPermissionTo('Delete Announcement') || $user->hasPermissionTo('CRUD Announcement')){
            return true;
        }
        return false;
        
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user): bool
    {
        
        
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Announcement $announcement): bool
    {
        
        
    }
}