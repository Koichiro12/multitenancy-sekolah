<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserActivities;
use App\Models\UserProfile;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function profile(){
        $data = UserProfile::join('users','user_profiles.id_user','=','users.id')
        ->where('users.id','=',auth()->user()->id)
        ->get(['users.id as id_user','users.*','user_profiles.*'])->first();
        return view('central.admin.user.profile',compact(['data']));
        
    }
    public function update_profile(Request $request,$id){

    }
    public function activity(){
        $data = UserActivities::where([['id_user','=',auth()->user()->id]])->orderBy('created_at','DESC')->limit(20)->get();
        return view('central.admin.user.activity',compact(['data']));
    }
}
