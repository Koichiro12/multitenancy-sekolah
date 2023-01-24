<?php

namespace App\Http\Controllers\tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TenantAuthController extends Controller
{
    //
    public function login(){
        if(!Auth::check()){
            return view('tenant.auth.signin');
        }
        return redirect('/dashboard');
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
        return redirect()->route('signin')->with('error',"Email/Password Incorrect Or Not Registered")->onlyInput('email');
    }
    public function logout(Request $request){
        Auth::logout();
     
        $request->session()->invalidate();
        $request->session()->regenerateToken();
     
        return redirect()->route('signin');
    }
}
