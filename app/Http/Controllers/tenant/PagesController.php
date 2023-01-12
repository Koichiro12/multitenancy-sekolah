<?php

namespace App\Http\Controllers\tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function dashboard()
    {
        return view('tenant.admin.dashboard');
    }
    public function home()
    {
        return view('tenant.page.home');
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
    public function detailNews()
    {
        return view('tenant.page.detailNews');
    }
}
