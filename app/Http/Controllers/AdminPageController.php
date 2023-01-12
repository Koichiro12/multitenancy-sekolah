<?php

namespace App\Http\Controllers;

use App\Models\Features;
use App\Models\News;
use App\Models\Paket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPageController extends Controller
{
    //
    public function index(){
        if(!Auth::check()){
            return redirect('signin');
        }
        $user = User::latest()->get();
        $news = News::latest()->get();
        $fitur = Features::latest()->get();
        $paket = Paket::latest()->get();
        return view('central.admin.dashboard',compact(['user','news','fitur','paket']));
    }
}
