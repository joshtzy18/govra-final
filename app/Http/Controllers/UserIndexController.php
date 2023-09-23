<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\View\View;
use App\Models\Examination;
use App\Models\NewsUpdates;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;


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

    public function DownloadResume(){

      

        $user_id = auth()->user()->id;
        $user_name = auth()->user()->username;
        $surname = auth()->user()->surname;
        $first_name = auth()->user()->first_name;
        $name_extension = auth()->user()->name_extension;
        $middle_name = auth()->user()->middle_name;
        $date_of_birth = auth()->user()->date_of_birth;
        $place_of_birth = auth()->user()->place_of_birth;
        $sex =  auth()->user()->sex;
        $civil_status =  auth()->user()->civil_status;
        $height = auth()->user()->height;
        $weight = auth()->user()->weight;
        $blood_type = auth()->user()->blood_type;
        $gsis_no = auth()->user()->gsis_id_no;
        $pag_ibig_no = auth()->user()->pagibig_id_no;
        $philhealth_no = auth()->user()->philhealth_no;
        $sss_no = auth()->user()->sss_no;
        $tin_no = auth()->user()->tin_no;
        $agency_employee_no =  auth()->user()->agency_employee_no;
        $citizenship =  auth()->user()->citizenship;


        
    
        $pdf = PDF::loadView('pdf.user-resume', compact('user_id','user_name','surname','first_name','middle_name','name_extension','date_of_birth','place_of_birth','sex','civil_status','height','weight','blood_type','gsis_no','pag_ibig_no','philhealth_no','sss_no','tin_no','agency_employee_no','citizenship'))
        ->setPaper('Legal', 'portrait');
        return $pdf->stream();

        
        // return  view('pdf.user-resume');
        // return $pdf->download('resume.pdf');

        
        // $pdf = PDF::loadView('pdf.user-resume');
        
        // return $pdf->download('user-resume.pdf');

    }
   
    
    

   
    
}