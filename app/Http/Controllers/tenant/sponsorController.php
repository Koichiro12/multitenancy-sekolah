<?php

namespace App\Http\Controllers\tenant;


use App\Http\Controllers\Controller;
use App\Models\tenant\tenantSponsor;
use Illuminate\Http\Request;

class sponsorController extends Controller
{
    public function sponsor()
    {
        $sponsor = tenantSponsor::get();
        return view('tenant.admin.sponsor.index', compact('sponsor'));
    }
    public function createSponsor()
    {
        $sponsor = tenantSponsor::get();
        return view('tenant.admin.sponsor.create', compact('sponsor'));
    }
    public function editSponsor($id)
    {
        $showSponsor = tenantSponsor::findOrFail($id);
        if ($showSponsor) {
            return view('tenant.admin.sponsor.edit', compact(['showSponsor']));
        }
    }
    public function addSponsor(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'image' => 'required|unique:sponsor|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $image = $this->uploadImageSponsor($request->image);
        $file = new tenantSponsor();
        $file->nama = $request->nama;
        $file->image = $image;
        $file->save();
        return redirect()->route('dashboardSponsor');
    }
    public function deleteSponsor($id)
    {
        $sponsor = tenantSponsor::find($id);
        $image = public_path($sponsor->image);
        if ($image) {
            unlink($sponsor->image);
        }
        tenantSponsor::destroy($id);
        return redirect()->route('dashboardSponsor');
    }
    public function showSponsor($id)
    {
        $showSponsor = tenantSponsor::find($id);
        return view('tenant.admin.sponsor.edit', compact('showSponsor'));
    }
    public function updateSponsor(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'image' => 'required|unique:sponsor|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $sponsor = tenantSponsor::find($id);
        if (!empty($request->image)) {
            unlink($sponsor->image);
            $image = $this->uploadImageSponsor($request->image);
            $sponsor->image = $image;
        }
        $sponsor->nama = $request->nama;
        $sponsor->image = $image;
        $sponsor->save();
        return redirect()->route('dashboardSponsor');
    }
    public function uploadImageSponsor($image)
    {
        $extFile =  $image->getClientOriginalName();
        $path = $image->move('public/tenant/upload_file/sponsor', date('Ymdhis') . $extFile);
        $path = str_replace('\\', '/', $path);
        return $path;
    }
}
