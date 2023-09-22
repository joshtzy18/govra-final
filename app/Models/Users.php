<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'name',
        'type',
        'overview',
        'vision',
        'mission',
        'location',
        'website',
        'contacts',
        'active',
        'user_id'
    ];
}