<?php

namespace App\Http\Controllers;

use App\Models\TextWidget;
use Illuminate\View\View;
use Illuminate\Http\Request;

class TextWidgetController extends Controller
{
    public function announcement(): View
    {
            //     $posts = Government::query()
         //     ->where(column: 'active', operator: '=', value: 1)
         //    ->whereDate('created_at', '<' , \Carbon\Carbon::now());
         //     return view('user/job-offers-user', compact('posts'));
         $announce = TextWidget::query('text_widgets')
                ->where('key', 1)
                ->get();
    

            return view('user/user-index', compact('announce'));


           
         
         
    }
}