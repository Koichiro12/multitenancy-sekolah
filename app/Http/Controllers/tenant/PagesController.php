<?php

namespace App\Http\Controllers\tenant;

use App\Http\Controllers\Controller;
use App\Models\tenant\tenantBerita;
use App\Models\tenant\tenantFasilitas;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function dashboard()
    {
        return view('tenant.admin.dashboard');
    }
    public function login()
    {
        return view('tenant.auth.signin');
    }
    public function home()
    {
        $berita = tenantBerita::get();
        $fasilitas = tenantFasilitas::get();
        return view('tenant.page.home', compact('berita', 'fasilitas'));
    }
    public function about()
    {
        return view('tenant.page.about');
    }
    public function alumni()
    {
        return view('.tenant.page.alumni');
    }
    public function ppdb()
    {
        return view('tenant.page.ppdb');
    }
    public function news()
    {
        return view('tenant.page.news');
    }
    public function guru()
    {

        return view('tenant.page.guru');
    }
}
