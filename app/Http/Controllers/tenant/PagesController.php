<?php

namespace App\Http\Controllers\tenant;

use App\Http\Controllers\Controller;
use App\Models\tenant\tenantBerita;
use App\Models\tenant\tenantFasilitas;
use App\Models\tenant\tenantGallery;
use App\Models\tenant\tenantGuru;
use App\Models\tenant\TenantSettings;
use App\Models\tenant\tenantSponsor;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function login()
    {
        return view('tenant.auth.signin');
    }
    public function home()
    {
        $berita = tenantBerita::get();
        $fasilitas = tenantFasilitas::get();
        $dataSetting = TenantSettings::get();
        $sponsor = tenantSponsor::get();
        return view('tenant.page.home', compact('berita', 'fasilitas', 'dataSetting', 'sponsor'));
    }
    public function about()
    {
        $dataSetting = TenantSettings::get();
        return view('tenant.page.about', compact('dataSetting'));
    }
    public function alumni()
    {
        return view('.tenant.page.alumni');
    }
    public function ppdb()
    {
        $dataSetting = TenantSettings::get();
        return view('tenant.page.ppdb', compact('dataSetting'));
    }
}
