<?php

namespace App\Http\Controllers;

use App\Models\Government;
use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function fetch($id)
    {
        // $fetch  = Government::where('id',$id)->first()
        $details = Government::find($id);

    
       
            return view('user/job-clicked-user', compact('details'));
           
      
    }
}