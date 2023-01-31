<?php

namespace App\Http\Controllers\tenant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TenantSettings extends Controller
{
    //
    public function view_sekolah_settings(){
        return view('tenant.admin.sekolah.index');
    }
}
