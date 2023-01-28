<?php

namespace App\Http\Controllers\tenant;

use App\Http\Controllers\Controller;
use App\Models\tenant\tenantArtikel;
use Illuminate\Http\Request;

class artikelController extends Controller
{
    public function artikel()
    {
        $artikel = tenantArtikel::get();
        return view('tenant.admin.artikel.index', compact('artikel'));
    }
    public function createArtikel()
    {
        return view('tenant.admin.artikel.create');
    }
    public function editArtikel($id)
    {
        $showArtikel = tenantArtikel::findOrFail($id);
        if ($showArtikel) {
            return view('tenant.admin.artikel.edit', compact(['showArtikel']));
        }
    }
    public function addArtikel(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'keyword' => 'required',
            'image' => 'required|unique:berita|image|mimes:jpg,png,jpeg,gif,svg',
            'deskripsi' => 'required',
        ]);
        $image = $this->uploadImageArtikel($request->image);
        $file = new TenantArtikel();
        $file->judul = $request->judul;
        $file->kategori = 'artikel';
        $file->keyword = $request->keyword;
        $file->deskripsi = $request->deskripsi;
        $file->image = $image;
        $file->save();
        return redirect()->route('dashboardArtikel');
    }
    public function deleteArtikel($id)
    {
        $artikel = tenantArtikel::find($id);
        $image = public_path($artikel->image);
        if ($image) {
            unlink($artikel->image);
        }
        tenantArtikel::destroy($id);
        return redirect()->route('dashboardArtikel');
    }
    public function showArtikel($id)
    {
        $showArtikel = tenantArtikel::find($id);
        return view('tenant.admin.artikel.edit', compact('showArtikel'));
    }
    public function updateArtikel(Request $request, $id)

    {
        $request->validate([
            'judul' => 'required',
            'keyword' => 'required',
            'image' => 'required|unique:berita|image|mimes:jpg,png,jpeg,gif,svg',
            'deskripsi' => 'required',
        ]);
        $berita = tenantArtikel::find($id);
        if (!empty($request->image)) {
            unlink($berita->image);
            $image = $this->uploadImageArtikel($request->image);
            $berita->image = $image;
        }
        $berita->judul = $request->judul;
        $berita->keyword = $request->keyword;
        $berita->kategori = 'kategori';
        $berita->deskripsi = $request->deskripsi;
        $berita->save();
        return redirect()->route('dashboardArtikel');
    }

    public function uploadImageArtikel($image)
    {
        $extFile = date('Ymdhis') . $image->getClientOriginalName();
        $path = $image->move('public/tenant/upload_file/artikel', $extFile);
        $path = str_replace('\\', '/', $path);
        return $path;
    }
}
