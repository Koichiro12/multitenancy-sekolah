<?php

namespace App\Http\Controllers\tenant;

use App\Http\Controllers\Controller;
use App\Models\tenant\tenantBerita;
use App\Models\tenant\TenantSettings;
use Illuminate\Http\Request;

class beritaController extends Controller
{
    public function index()
    {
        $berita = tenantBerita::latest()->get();
        $dataSetting = TenantSettings::get();
        if ($berita->count() > 0) {
            return view('tenant.page.news', compact('berita', 'dataSetting'));
        } else {
            session()->flash('notfound', 'Berita Belum Ada');
            return view('tenant.page.news', compact('berita', 'dataSetting'));
        }
    }

    public function detailBerita($id)
    {
        $detailBerita = tenantBerita::find($id);
        $dataSetting = TenantSettings::get();
        return view('tenant.page.detailNews', compact('detailBerita', 'dataSetting'));
    }
    public function createBerita()
    {
        return view('tenant.admin.news.create');
    }
    public function berita()
    {
        $berita = tenantBerita::get();
        return view('tenant.admin.news.index', compact('berita'));
    }
    public function addBerita(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'keyword' => 'required',
            'image' => 'required|unique:berita|image|mimes:jpg,png,jpeg,gif,svg',
            'deskripsi' => 'required',
        ]);
        $image = $this->uploadImageBerita($request->image);
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
        return view('tenant.admin.news.edit', compact('showBerita'));
    }
    public function editBerita($id)
    {

        $showBerita = tenantBerita::findOrFail($id);
        if ($showBerita) {
            return view('tenant.admin.news.edit', compact(['showBerita']));
        }
    }
    public function updateBerita(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'keyword' => 'required',
            'image' => 'required|unique:berita|image|mimes:jpg,png,jpeg,gif,svg',
            'deskripsi' => 'required',
        ]);
        $berita = tenantBerita::find($id);
        if (!empty($request->image)) {
            unlink($berita->image);
            $image = $this->uploadImageBerita($request->image);
            $berita->image = $image;
        }
        $berita->judul = $request->judul;
        $berita->keyword = $request->keyword;
        $berita->kategori = 'kategori';
        $berita->deskripsi = $request->deskripsi;
        $berita->save();
        return redirect()->route('dashboardBerita');
    }
    public function uploadImageBerita($image)
    {
        $extFile =  $image->getClientOriginalName();
        $path = $image->move('public/tenant/upload_file/berita', date('Ymdhis') . $extFile);
        $path = str_replace('\\', '/', $path);
        return $path;
    }
}
