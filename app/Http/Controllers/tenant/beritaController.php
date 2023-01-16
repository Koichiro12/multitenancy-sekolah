<?php

namespace App\Http\Controllers\tenant;

use App\Http\Controllers\Controller;
use App\Models\tenant\tenantBerita;
use Illuminate\Http\Request;

class beritaController extends Controller
{
    public function index()
    {
        $berita = tenantBerita::get();
        return view('tenant.page.news', compact('berita'));
    }
}
