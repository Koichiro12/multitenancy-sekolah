<?php

namespace App\Http\Controllers\tenant;

use App\Http\Controllers\Controller;
use App\Models\tenant\tenantBerita;
use Illuminate\Http\Request;

class adminController extends Controller

{
    public function index()
    {
        return view('tenant.admin.dashboard');
    }
    public function berita()
    {
        $berita = tenantBerita::get();
        return view('tenant.admin.berita', compact('berita'));
    }
    public function addBerita(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'keyword' => 'required',
            'image' => 'required',
            'deskripsi' => 'required',
        ]);
        $image = $this->uploadImage($request->image);
        $file = new tenantBerita();
        $file->judul = $request->judul;
        $file->kategori = 'berita';
        $file->keyword = $request->keyword;
        $file->deskripsi = $request->deskripsi;
        $file->image = $image;
        $file->save();
        return redirect()->route('dashboardBerita');
    }
    public function deleteBerita($id)
    {
        $berita = tenantBerita::find($id);
        $image = public_path($berita->image);
        if ($image) {
            unlink($berita->image);
        }
        tenantBerita::destroy($id);
        return redirect()->route('dashboardBerita');
    }
    public function showBerita($id)
    {
        $showBerita = tenantBerita::find($id);
        return view('tenant.admin.editBerita', compact('showBerita'));
    }
    public function updateBerita(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'keyword' => 'required',
            'image' => 'required',
            'deskripsi' => 'required',
        ]);
        $berita = tenantBerita::find($id);
        if (!empty($request->image)) {
            unlink($berita->image);
            $image = $this->uploadImage($request->image);
            $berita->image = $image;
        }
        $berita->judul = $request->judul;
        $berita->keyword = $request->keyword;
        $berita->kategori = 'kategori';
        $berita->deskripsi = $request->deskripsi;
        $berita->save();
        return redirect()->route('dashboardBerita');
    }
    public function uploadImage($image)
    {
        $extFile = $image->getClientOriginalName();
        $path = $image->move('public/tenant/upload_file/berita', $extFile);
        $path = str_replace('\\', '/', $path);
        return $path;
    }
}
