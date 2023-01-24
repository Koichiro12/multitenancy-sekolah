<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function signin(){
        if(!Auth::check()){
            return view('central.auth.signin');
        }
        return redirect('/dashboard');
    }
    public function register(){
        
    }
    public function authenticate(Request $request){
        $credential = $request->validate([
            'email' => ['required','email'],
            'password' =>['required']
        ]);
        if(Auth::attempt($credential)){
             $request->session()->regenerate();
             return redirect()->intended('/dashboard');
             
        }
        return redirect('signin')->with('error',"Email/Password Incorrect Or Not Registered")->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();
     
        $request->session()->invalidate();
        $request->session()->regenerateToken();
     
        return redirect('signin');
    }
}
