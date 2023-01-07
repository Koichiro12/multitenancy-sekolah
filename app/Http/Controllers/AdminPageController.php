<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPageController extends Controller
{
    //
    public function index(){
        if(!Auth::check()){
            return redirect('signin');
        }
        return view('central.admin.dashboard');
    }
}
