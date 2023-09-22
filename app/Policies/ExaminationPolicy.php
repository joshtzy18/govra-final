<?php

namespace App\Policies;

use App\Models\Examination;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ExaminationPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        if($user->hasPermissionTo('View Examination') || $user->hasPermissionTo('CRUD Examination')){
            return true;
        }
        return false;
        
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Examination $examination): bool
    {
        if($user->hasPermissionTo('View Examination') || $user->hasPermissionTo('CRUD Examination')){
            return true;
        }
        return false;
        
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        if($user->hasPermissionTo('Create Examination') || $user->hasPermissionTo('CRUD Examination')){
            return true;
        }
        return false;
        
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Examination $examination): bool
    {
        if($user->hasPermissionTo('Update Examination') || $user->hasPermissionTo('CRUD Examination')){
            return true;
        }
        return false;
        
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Examination $examination): bool
    {
        if($user->hasPermissionTo('Delete Examination') || $user->hasPermissionTo('CRUD Examination')){
            return true;
        }
        return false;
        
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Examination $examination): bool
    {
        
        
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Examination $examination): bool
    {
    
        
    }
}