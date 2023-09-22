<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller\Auth\Auth;
use App\Http\Controllers\Auth\AuthController\Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

 /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate()
    {
      $email = request()->input('email');
      $password = request()->input('password');
      $user = User::where('email', $email)->first();
      if ($user && Hash::check($password, $user->password)) {
      return redirect()->intended ('user-index');
      } else {
      return back()->withInput()->with('error', 'Incorrect username or password');
      }
      } 

      protected function validator(array $data)
      {
          return Validator::make($data, [
              'name' => ['required', 'string', 'max:255'],
              'gender' => ['required', 'string', 'max:255'],
              'contact' => ['required', 'string', 'max:255'],
              'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
              'username' => ['required', 'string', 'max:255', 'unique:users'],
              'password' => ['required', 'string', 'min:8', 'confirmed'],
          ]);
      }


    public function index(){
        return view('auth/login');
    }

    public function signup(){
        return view('auth/signup');
    }

    // public function postSignup(Request $request){
        
    //   $input = $request->all();

    //   User::create([
    //     'name' => $input['name'],
    //     'gender' => $input['gender'],
    //     'email' => $input['email'],
    //     'password' => Hash::make($input['password'])

    //   ]);
    //   return view('auth/login');
      
        
    // }

   public function postSignup(Request $request)
    {
      $input = $request->all();
    
         User::create([
            'name' => $input['name'],
            'gender' => $input['gender'],
            'contact' => $input['contact'],
            'email' => $input['email'],
            'username' => $input['username'],
            'password' => Hash::make($input['password']),
        ]);
        return view('auth/login');
    }

    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect('login');
    }

   
} 