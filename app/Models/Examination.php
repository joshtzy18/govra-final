<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'examination_advisory_no',
        'to',
        'subject',
        'content',
        'links',    
        
    ];

    protected $casts = [
        'created_at' => 'datetime'
    ];

    public function getFormattedDate(){
        
        return $this->created_at->format('F j Y');
    }
}