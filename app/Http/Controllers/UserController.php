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
        $validate = $request->validate([
            "name" => ['required'],
            "email" => ['required']
        ]);
        if($validate){
            $dataprofile = UserProfile::where([['id_user','=',$id]])->get()->first();
            $datauser = User::findOrFail($id);

            $file = $request->file('foto_profile');
            $foto = $file != null ? date('Ymdhis').$file->getClientOriginalName() : $dataprofile->foto_profile;
            if($file != null){
                $file->move('public/central/uploads',$foto);
            }
            $dataprofile->update([
                'bio' => $request->bio != null ? $request->bio : $dataprofile->bio,
                'alamat' => $request->alamat != null ? $request->alamat : $dataprofile->alamat,
                'no_hp' => $request->no_hp != null ? $request->no_hp : $dataprofile->no_hp,
                'foto_profile' => $foto,
            ]);
            $datauser->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
            if($datauser){
                session()->flash('success',"Profile Has Been Update");
                return redirect()->back();
            }else{
                session()->flash('error',"Something Went Wrong");
                return redirect()->back();
            }
        }
    }
    public function activity(){
        $data = UserActivities::where([['id_user','=',auth()->user()->id]])->orderBy('created_at','DESC')->limit(20)->get();
        return view('central.admin.user.activity',compact(['data']));
    }
}
