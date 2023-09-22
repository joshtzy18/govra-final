<?php

namespace App\Http\Controllers;

use App\Http\Requests\TryRequest;
use Illuminate\Support\Facades\Auth;

class Try extends Controller
{
    public function index(){
        return view('try.index');
    }
    
    public function authenticate (TryRequest $request){
    $email = $request ->input('email');
    $password = $request ->input('password');

    $credentials = array (
        'email' => $email,
        'password' => $password,
        'role' => User::User
    );
    if (Auth::attempt($credentials)) {
        $request -> session() ->regenerate();
        return redirect()->intended(route('user-index'));
    }
    else
        return redirect()->back()->with ('wrong credentials');
    }

}
