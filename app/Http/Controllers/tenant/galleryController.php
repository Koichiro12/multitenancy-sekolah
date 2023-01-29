<?php

namespace App\Http\Controllers\tenant;

use App\Http\Controllers\Controller;
use App\Models\tenant\tenantGallery;
use Illuminate\Http\Request;

class galleryController extends Controller
{

    public function index()
    {
        $gallery = tenantGallery::get();
        if ($gallery->count() > 0) {
            return view('tenant.page.gallery', compact('gallery'));
        } else {
            session()->flash('notfound', 'Gallery Belum Ada');
            return view('tenant.page.gallery', compact('gallery'));
        }
    }
    public function gallery()
    {
        $gallery = tenantGallery::get();
        return view('tenant.admin.gallery.index', compact('gallery'));
    }
    public function createGallery()
    {
        return view('tenant.admin.gallery.create');
    }
    public function editGallery($id)
    {
        $showGallery = tenantGallery::findOrFail($id);
        if ($showGallery) {
            return view('tenant.admin.gallery.edit', compact(['showGallery']));
        }
    }
    public function addGallery(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'image' => 'required|unique:berita|image|mimes:jpg,png,jpeg,gif,svg',
            'deskripsi' => 'required',
        ]);
        $image = $this->uploadImageGallery($request->image);
        $file = new tenantGallery();
        $file->nama = $request->nama;
        $file->deskripsi = $request->deskripsi;
        $file->image = $image;
        $file->save();
        return redirect()->route('dashboardGallery');
    }
    public function deleteGallery($id)
    {
        $gallery = tenantGallery::find($id);
        $image = public_path($gallery->image);
        if ($image) {
            unlink($gallery->image);
        }
        tenantGallery::destroy($id);
        return redirect()->route('dashboardGallery');
    }
    public function showGallery($id)
    {
        $showGallery = tenantGallery::find($id);
        return view('tenant.admin.gallery.edit', compact('showGallery'));
    }
    public function updateGallery(Request $request, $id)

    {
        $request->validate([
            'nama' => 'required',
            'image' => 'required|unique:berita|image|mimes:jpg,png,jpeg,gif,svg',
            'deskripsi' => 'required',
        ]);
        $gallery = tenantGallery::find($id);
        if (!empty($request->image)) {
            unlink($gallery->image);
            $image = $this->uploadImageGallery($request->image);
            $gallery->image = $image;
        }
        $gallery->nama = $request->nama;
        $gallery->deskripsi = $request->deskripsi;
        $gallery->save();
        return redirect()->route('dashboardGallery');
    }
    public function uploadImageGallery($image)
    {
        $extFile = date('Ymdhis') . $image->getClientOriginalName();
        $path = $image->move('public/tenant/upload_file/gallery', $extFile);
        $path = str_replace('\\', '/', $path);
        return $path;
    }
}
