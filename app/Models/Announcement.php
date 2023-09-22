<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'title',
        'announcement_no',
        'for',
        'subject',
        'content',
        'content_table',
        'announce_contacts',
        'links'
    ];

    protected $casts = [
        'created_at' => 'datetime'
    ];

    public function getFormattedDate(){
        
        return $this->created_at->format('F j Y');
    }
}