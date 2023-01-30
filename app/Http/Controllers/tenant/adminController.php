<?php

namespace App\Http\Controllers\tenant;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller

{
    public function index()
    {
        return view('tenant.admin.dashboard');
    }

    //////////////////////////////////////////////////////////////////
    /////////////////////USERS FUNCTION///////////////////////////
    /////////////////////USERS FUNCTION///////////////////////////
    /////////////////////USERS FUNCTION///////////////////////////
    //////////////////////////////////////////////////////////////////
    public function users()
    {
        $users = User::latest()->get();
        return view('tenant.admin.users.index', compact('users'));
    }
    public function createUsers()
    {
        return view('tenant.admin.users.create');
    }
    public function editUsers($id)
    {
        $users = User::findOrFail($id);
        if ($users) {
            return view('tenant.admin.users.edit', compact(['users']));
        }
    }
    public function addUsers(Request $request)
    {
        $validate = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
            'level' => ['required'],
        ]);
        if ($validate) {
            $create = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'level' => $request->level,
            ]);

            if ($create) {
                $data_users = User::where([
                    ['name', '=', $request->name], ['email', '=', $request->email], ['level', '=', $request->level],
                ])->get()->first();
                UserProfile::create([
                    'id_user' => $data_users->id,
                    'bio' => 'Your Bio Here',
                    'alamat' => '-',
                    'no_hp' => '-',
                    'foto_profile' => '-',
                ]);
                return redirect()->route('dashboardUsers');
            }
        }
    }
    public function deleteUsers($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        UserProfile::where([['id_user', '=', $id]])->delete();
        if ($data) {
            return redirect()->route('dashboardUsers');
        }
    }
    public function showUsers($id)
    {
    }
    public function updateUsers(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'level' => ['required'],
        ]);
        if ($validate) {
            $update = User::findOrFail($id);
            $pass = $request->password != null ? Hash::make($request->password) : $update->password;
            $update->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $pass,
                'level' => $request->level,
            ]);
            if ($update) {
                return redirect()->route('dashboardUsers');
            }
        }
    }
    //////////////////////////////////////////////////////////////////
    /////////////////////USER FUNCTION///////////////////////////
    /////////////////////USER FUNCTION///////////////////////////
    /////////////////////USER FUNCTION///////////////////////////
    //////////////////////////////////////////////////////////////////

    public function userProfile()
    {
        $data = User::join('user_profiles', 'users.id', '=', 'user_profiles.id_user')
            ->where([['users.id', '=', auth()->user()->id]])->get()->first();
        $id = auth()->user()->id;
        return view('tenant.admin.user.profile', compact(['data', 'id']));
    }
    public function updateProfile(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
        ]);
        if($validate){
            $data_profile = UserProfile::where([['id_user','=',$id]])->get()->first();
            $file = $request->file('foto_profile');
            $foto = $file != null ? date('Ymdhis').$file->getClientOriginalName() : $data_profile->foto_profile;
            if($file != null){
                $file->move('public/tenant/upload_file/user',$foto);
                $data_profile->foto_profile != '-' ? unlink('public/tenant/upload_file/user/'.$data_profile->foto_profile) : '';
            }
            $data_profile->update([
                'bio' => !empty($request->bio) ? $request->bio :  $data_profile->bio, 
                'alamat' => !empty($request->alamat) ? $request->alamat :  $data_profile->alamat, 
                'no_hp' => !empty($request->no_hp) ? $request->no_hp :  $data_profile->no_hp, 
                'foto_profile' => $foto,
            ]);
            if($data_profile){
                $data_user = User::findOrFail($id);
                $data_user->update([
                    'name' => $request->name,
                    'email' => $request->email
                ]);    
                session()->flash('success',"Users Has Been Updated");
                return redirect()->route('userProfile');
            }
        }
    }
}
