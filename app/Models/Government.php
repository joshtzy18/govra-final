<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Government extends Model
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

    
   


    public function user():BelongsTo
    {
        return $this->belongsTo(related: User::class);
    }

    public function getLogo(){
        if(str_starts_with(request()->url(), 'http')){
            return $this->logo;
        }
        return '/storage/>logo';
    }

   

}