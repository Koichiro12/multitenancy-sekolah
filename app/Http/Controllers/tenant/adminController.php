<?php

namespace App\Http\Controllers\tenant;

use App\Http\Controllers\Controller;
use App\Models\tenant\tenantAlumni;
use App\Models\tenant\tenantBerita;
use App\Models\tenant\tenantFasilitas;
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
        return view('tenant.admin.editBerita', compact('showBerita'));
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

    //////////////////////////////////////////////////////////////////
    /////////////////////FASILITAS FUNCTION///////////////////////////
    /////////////////////FASILITAS FUNCTION///////////////////////////
    /////////////////////FASILITAS FUNCTION///////////////////////////
    //////////////////////////////////////////////////////////////////
    public function fasilitas()
    {
        $fasilitas = tenantFasilitas::get();
        return view('tenant.admin.fasilitas', compact('fasilitas'));
    }
    public function addFasilitas(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'image' => 'required|unique:fasilitas|image|mimes:jpg,png,jpeg,gif,svg',
            'deskripsi' => 'required',
        ]);
        $image = $this->uploadImageFasilitas($request->image);
        $file = new tenantFasilitas();
        $file->nama = $request->nama;
        $file->deskripsi = $request->deskripsi;
        $file->image = $image;
        $file->save();
        return redirect()->route('dashboardFasilitas');
    }
    public function deleteFasilitas($id)
    {
        $fasilitas = tenantFasilitas::find($id);
        $image = public_path($fasilitas->image);
        if ($image) {
            unlink($fasilitas->image);
        }
        tenantFasilitas::destroy($id);
        return redirect()->route('dashboardFasilitas');
    }
    public function showFasilitas($id)
    {
        $showFasilitas = tenantFasilitas::find($id);
        return view('tenant.admin.editFasilitas', compact('showFasilitas'));
    }
    public function updateFasilitas(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'image' => 'required|unique:fasilitas|image|mimes:jpg,png,jpeg,gif,svg',
            'deskripsi' => 'required',
        ]);
        $fasilitas = tenantFasilitas::find($id);
        if (!empty($request->image)) {
            unlink($fasilitas->image);
            $image = $this->uploadImageFasilitas($request->image);
            $fasilitas->image = $image;
        }
        $fasilitas->nama = $request->nama;
        $fasilitas->deskripsi = $request->deskripsi;
        $fasilitas->image = $image;
        $fasilitas->save();
        $fasilitas->save();
        return redirect()->route('dashboardFasilitas');
    }

    //////////////////////////////////////////////////////////////////
    /////////////////////ALUMNI FUNCTION///////////////////////////
    /////////////////////ALUMNI FUNCTION///////////////////////////
    /////////////////////ALUMNI FUNCTION///////////////////////////
    //////////////////////////////////////////////////////////////////
    public function alumni()
    {
        $alumni = tenantAlumni::get();
        return view('tenant.admin.alumni', compact('alumni'));
    }
    public function addAlumni(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'prestasi' => 'required',
            'deskripsi' => 'required',
            'image' => 'required|unique:alumni|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $image = $this->uploadImageAlumni($request->image);
        $file = new tenantAlumni();
        $file->judul = $request->judul;
        $file->prestasi = $request->prestasi;
        $file->deskripsi = $request->deskripsi;
        $file->image = $image;
        $file->save();
        return redirect()->route('dashboardAlumni');
    }
    public function deleteAlumni($id)
    {
        $alumni = tenantAlumni::find($id);
        $image = public_path($alumni->image);
        if ($image) {
            unlink($alumni->image);
        }
        tenantAlumni::destroy($id);
        return redirect()->route('dashboardAlumni');
    }
    public function showAlumni($id)
    {
        $showAlumni = tenantAlumni::find($id);
        return view('tenant.admin.editAlumni', compact('showAlumni'));
    }
    public function updateAlumni(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'prestasi' => 'required',
            'deskripsi' => 'required',
            'image' => 'required|unique:alumni|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $alumni = tenantAlumni::find($id);
        if (!empty($request->image)) {
            unlink($alumni->image);
            $image = $this->uploadImageAlumni($request->image);
            $alumni->image = $image;
        }
        $alumni->judul = $request->judul;
        $alumni->prestasi = $request->prestasi;
        $alumni->deskripsi = $request->deskripsi;
        $alumni->image = $image;
        $alumni->save();
        return redirect()->route('dashboardAlumni');
    }
    public function uploadImageBerita($image)
    {
        $extFile = $image->getClientOriginalName();
        $path = $image->move('public/tenant/upload_file/berita', $extFile);
        $path = str_replace('\\', '/', $path);
        return $path;
    }
    public function uploadImageFasilitas($image)
    {
        $extFile = $image->getClientOriginalName();
        $path = $image->move('public/tenant/upload_file/fasilitas', $extFile);
        $path = str_replace('\\', '/', $path);
        return $path;
    }
    public function uploadImageAlumni($image)
    {
        $extFile = $image->getClientOriginalName();
        $path = $image->move('public/tenant/upload_file/alumni', $extFile);
        $path = str_replace('\\', '/', $path);
        return $path;
    }
}
