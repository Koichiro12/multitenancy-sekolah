<?php

namespace App\Http\Controllers\tenant;

use App\Http\Controllers\Controller;
use App\Models\tenant\tenantFasilitas;
use Illuminate\Http\Request;

class fasilitasController extends Controller
{

    //////////////////////////////////////////////////////////////////
    /////////////////////FASILITAS FUNCTION///////////////////////////
    /////////////////////FASILITAS FUNCTION///////////////////////////
    /////////////////////FASILITAS FUNCTION///////////////////////////
    //////////////////////////////////////////////////////////////////
    public function fasilitas()
    {
        $fasilitas = tenantFasilitas::get();
        return view('tenant.admin.fasilitas.index', compact('fasilitas'));
    }
    public function createFasilitas()
    {
        return view('tenant.admin.fasilitas.create');
    }
    public function editFasilitas($id)
    {
        $showFasilitas = tenantFasilitas::findOrFail($id);
        if ($showFasilitas) {
            return view('tenant.admin.fasilitas.edit', compact(['showFasilitas']));
        }
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
        return view('tenant.admin.fasilitas.edit', compact('showFasilitas'));
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
    public function uploadImageFasilitas($image)
    {
        $extFile = date('Ymdhis') . $image->getClientOriginalName();
        $path = $image->move('public/tenant/upload_file/fasilitas', $extFile);
        $path = str_replace('\\', '/', $path);
        return $path;
    }
}
