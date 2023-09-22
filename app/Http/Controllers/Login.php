<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;


class Login extends Controller
{
    public function index(){
        return view('login.index');
    }
    
    public function authenticate (LoginRequest $request){
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
