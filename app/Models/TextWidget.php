<?php

namespace App\Models;

use Doctrine\Common\Cache\Cache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache as FacadesCache;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\Cast\String_;

class TextWidget extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'key',
        'title',
        'content',
        'active',
        ];

        public static function getTitle(string $key): string
        { 
          
           $widget =  FacadesCache::get('text-widget'.$key, function() use ($key) {
                return TextWidget::query()->where('key', '=', $key)->where('active','=', 1)->first();
             });
          
            if($widget){
                return $widget->title;
            }
          
          
        }

        public static function getContent(string $key): string
        {
            $widget =  FacadesCache::get('text-widget'.$key, function() use ($key) {
                return TextWidget::query()
                ->where('key', '=', $key)
                ->where('active','=', 1)
                ->first();
            });
           
            if($widget){
                return $widget->content;
            }
           
            return '';
        }
    
}