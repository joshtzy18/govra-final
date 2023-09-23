<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravolt\Avatar\Avatar;

class ProfileController extends Controller
{
    public function show()
    {
        return view('profile');
    }
}
