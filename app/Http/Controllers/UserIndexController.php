<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Models\Examination;
use App\Models\NewsUpdates;
use App\Models\Announcement;


use Illuminate\Http\Request;


class UserIndexController extends Controller
{

    // public function NewsUpdates()
    // {
    //     $NP = NewsUpdates::query('news_updates')
    //     ->get();


    // return view('user/user-index', compact('NP'));


    // }

    // public function announce()
    // {
    //     $AN = Announcement::query('announcements')
    //     ->get();

    //     return view('user/user-index', compact('AN'));

    // }
    public function ShowData(): View
    {
      
        $announcements = Announcement::get();
        $examinations = Examination::get();
        $newsUpdates = NewsUpdates::get(); 
        // $NUdetails = NewsUpdates::find($id);
      
        
      
        

        return view('user.user-index', compact('announcements','examinations','newsUpdates'));
    }
    
  
    
    public function ShowNewsUpdates($id){
        $nudetails = NewsUpdates::find($id);
        $announcements = Announcement::get();
        $examinations = Examination::get();
        $newsUpdates = NewsUpdates::get(); 
    
    
     

       return view('user/news-updates-clicked', compact('nudetails','newsUpdates','announcements','examinations'));

    }

    public function ShowAnnouncements($id){
        
      
        $announce = Announcement::find($id);
    
    
     

       return view('user/announcements-clicked', compact('announce'));

    }
   

    public function ShowExam($id){
        
      
        $exam = Examination::find($id);
    
    
     

       return view('user/examination-clicked', compact('exam'));

    }
   
    
    

   
    
}