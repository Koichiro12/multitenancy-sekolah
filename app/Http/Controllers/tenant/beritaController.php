<?php

namespace App\Http\Controllers\tenant;

use App\Http\Controllers\Controller;
use App\Models\tenant\tenantBerita;
use Illuminate\Http\Request;

class beritaController extends Controller
{
    public function index()
    {
        $berita = tenantBerita::latest()->get();
        return view('tenant.page.news', compact('berita'));
    }
    
    public function detailBerita($id)
    {
        $detailBerita = tenantBerita::find($id);
        return view('tenant.page.detailNews', compact('detailBerita'));
    }
}
