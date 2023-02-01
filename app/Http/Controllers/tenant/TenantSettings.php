<?php

namespace App\Http\Controllers\tenant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\tenant\TenantSettings as TenantTenantSettings;

class TenantSettings extends Controller
{
    //
    public function view_sekolah_settings(){
        $data = TenantTenantSettings::latest()->get();
        return view('tenant.admin.sekolah.index',compact(['data']));
    }
    public function update_sekolah_setting(Request $request){
        $data_settings = TenantTenantSettings::latest()->get();
        foreach($data_settings as $data){
            if($request[$data['settings_name']] != null){
                $update = TenantTenantSettings::findOrFail($data['id']);
                $update->update([
                    'value' => $request[$data['settings_name']],
                ]);   
            }
            if($request->hasFile($data['settings_name'])){
                $file = $request->file($data['settings_name']);
                $foto = $file != null ? date('Ymdhis').$file->getClientOriginalName() : $data['value'];
                if($file != null){
                    $file->move('public/tenant/upload_file/sekolah',$foto);
                }
                $update = TenantTenantSettings::findOrFail($data['id']);
                $update->update([
                    'value' => $foto,
                ]);  
            }
        }
       session()->flash('success',"Sekolah Has Been Updated");
        return redirect()->route('sekolah');
    }
}
