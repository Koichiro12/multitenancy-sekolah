<?php

namespace App\Http\Controllers\tenant;

use App\Http\Controllers\Controller;
use App\Models\tenant\tenantAlumni;
use App\Models\tenant\TenantSettings;
use Illuminate\Http\Request;

class alumniController extends Controller
{
    public function index()
    {
        $alumni = tenantAlumni::get();
        $dataSetting = TenantSettings::get();
        if ($alumni->count() > 0) {
            return view('tenant.page.alumni', compact('alumni', 'dataSetting'));
        } else {
            session()->flash('notfound', 'Alumni Belum Ada');
            return view('tenant.page.alumni', compact('alumni', 'dataSetting'));
        }
    }
    public function alumni()
    {
        $alumni = tenantAlumni::get();
        return view('tenant.admin.alumni.index', compact('alumni'));
    }
    public function createAlumni()
    {
        return view('tenant.admin.alumni.create');
    }
    public function editAlumni($id)
    {
        $alumni = tenantAlumni::findOrFail($id);
        if ($alumni) {
            return view('tenant.admin.alumni.edit', compact(['alumni']));
        }
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
        return view('tenant.admin.alumni.edit', compact('showAlumni'));
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

    public function uploadImageAlumni($image)
    {
        $extFile =  $image->getClientOriginalName();
        $path = $image->move('public/tenant/upload_file/alumni', date('Ymdhis') . $extFile);
        $path = str_replace('\\', '/', $path);
        return $path;
    }
}
