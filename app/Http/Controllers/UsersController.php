<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserActivities;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = User::latest()->get();
        return view('central.admin.users.index',compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('central.admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'level' => ['required'],
        ]);
        if($validate){
            $create = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'level' => $request->level,
            ]);
            if($create){
                $datas = User::where([['name','=',$request->name],['email','=',$request->email],['level','=',$request->level]])->get()->first();
                $profile = UserProfile::create([
                    'id_user' => $datas->id,
                    'bio' => "Hello World",
                    'alamat' => "-",
                    'no_hp' => "-",
                    'foto_profile' => '-',    
                ]);
                $activities = UserActivities::create([
                    'id_user' => auth()->user()->id,
                    'icon' => '<i class="mdi mdi-account"></i>',
                    'activities' => 'Create Users : '.$datas->name,
                ]);
                if($profile){
                    session()->flash('success',"User Has Been Added");
                    return redirect()->route('users.index');
                }
                
            }else{
                session()->flash('error',"User Cannot Added");
                return redirect()->back();
            }
        }else{
            session()->flash('error','Something Went Wrong');
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = User::findOrFail($id);
        if($data){
            return view('central.admin.users.edit',compact(['data']));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validate = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'level' => ['required'],
        ]);
        if($validate){
            $update = User::findOrFail($id);
            $password = $request->password != null ? Hash::make($request->password) : $update->password;
            $update->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $password,
                'level' => $request->level,
            ]);
            if($update){
                $activities = UserActivities::create([
                    'id_user' => auth()->user()->id,
                    'icon' => '<i class="mdi mdi-account"></i>',
                    'activities' => 'Update Users : '.$update->name,
                ]);
                session()->flash('success',"User Has Been Update");
                return redirect()->route('users.index');
            }else{
                session()->flash('error',"User Cannot Update");
                return redirect()->back();
            }
        }else{
            session()->flash('error','Something Went Wrong');
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = User::findOrFail($id);
        $data->delete();
        if($data){
            $activities = UserActivities::create([
                'id_user' => auth()->user()->id,
                'icon' => '<i class="mdi mdi-account"></i>',
                'activities' => 'Delete Users : '.$data->name,
            ]);
            session()->flash('success',"User Has Been Delete");
        }else{
            session()->flash('error',"User Cannot Delete");
        }
        return redirect()->route('users.index');
    }
}
