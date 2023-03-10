<?php

namespace App\Http\Controllers\tenant;

use App\Http\Controllers\Controller;
use App\Models\tenant\tenantAlumni;
use App\Models\tenant\tenantGuru;
use App\Models\tenant\tenantJabatan;
use App\Models\tenant\TenantSettings;
use Illuminate\Http\Request;

class guruController extends Controller
{
    public function index()
    {
        $dataSetting = TenantSettings::get();
        $kepalaSekolah = tenantGuru::where('kategori', 'kepala sekolah')->get();
        $guru = tenantGuru::where('kategori', 'guru')->get();
        if ($guru->count() > 0) {
            return view('tenant.page.guru', compact('guru', 'kepalaSekolah', 'dataSetting'));
        } else {
            session()->flash('notfound', 'guru Belum Ada');
            return view('tenant.page.guru', compact('guru', 'kepalaSekolah', 'dataSetting'));
        }
    }
    public function guru()
    {
        $guru = tenantGuru::get();
        return view('tenant.admin.guru.index', compact('guru'));
    }
    public function createGuru()
    {
        $jabatan = tenantJabatan::get();
        return view('tenant.admin.guru.create', compact('jabatan'));
    }
    public function editGuru($id)
    {

        $jabatan = tenantJabatan::get();
        $showGuru = tenantGuru::findOrFail($id);
        if ($showGuru) {
            return view('tenant.admin.guru.edit', compact(['showGuru', 'jabatan']));
        }
    }
    public function addGuru(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'image' => 'required|unique:guru|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $image = $this->uploadImageGuru($request->image);
        $file = new tenantGuru();
        $file->nama = $request->nama;
        $file->kategori =  $request->kategori;
        $file->deskripsi = $request->deskripsi;
        $file->image = $image;
        $file->save();
        return redirect()->route('dashboardGuru');
    }
    public function deleteGuru($id)
    {
        $guru = tenantGuru::find($id);
        $image = public_path($guru->image);
        if ($image) {
            unlink($guru->image);
        }
        tenantGuru::destroy($id);
        return redirect()->route('dashboardGuru');
    }
    public function showGuru($id)
    {
        $showGuru = tenantGuru::find($id);
        return view('tenant.admin.guru.edit', compact('showGuru'));
    }
    public function updateGuru(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'image' => 'required|unique:guru|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $guru = tenantGuru::find($id);
        if (!empty($request->image)) {
            unlink($guru->image);
            $image = $this->uploadImageGuru($request->image);
            $guru->image = $image;
        }
        $guru->nama = $request->nama;
        $guru->kategori = $request->kategori;
        $guru->deskripsi = $request->deskripsi;
        $guru->image = $image;
        $guru->save();
        return redirect()->route('dashboardGuru');
    }
    public function uploadImageGuru($image)
    {
        $extFile =  $image->getClientOriginalName();
        $path = $image->move('public/tenant/upload_file/guru', date('Ymdhis') . $extFile);
        $path = str_replace('\\', '/', $path);
        return $path;
    }
}
