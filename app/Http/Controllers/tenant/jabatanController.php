<?php

namespace App\Http\Controllers\tenant;

use App\Http\Controllers\Controller;
use App\Models\tenant\tenantJabatan;
use Illuminate\Http\Request;

class jabatanController extends Controller
{
    public function jabatan()
    {
        $jabatan = tenantJabatan::get();
        return view('tenant.admin.jabatan.index', compact('jabatan'));
    }
    public function createJabatan()
    {
        return view('tenant.admin.jabatan.create');
    }
    public function editJabatan($id)
    {
        $showJabatan = tenantJabatan::findOrFail($id);
        if ($showJabatan) {
            return view('tenant.admin.jabatan.edit', compact(['showJabatan']));
        }
    }
    public function addJabatan(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);
        $file = new tenantJabatan();
        $file->nama_jabatan = $request->nama;
        $file->save();
        return redirect()->route('dashboardJabatan');
    }
    public function deleteJabatan($id)
    {
        tenantJabatan::destroy($id);
        return redirect()->route('dashboardJabatan');
    }
    public function showJabatan($id)
    {
        $showJabatan = tenantJabatan::find($id);
        return view('tenant.admin.jabatan.edit', compact('showJabatan'));
    }
    public function updateJabatan(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
        ]);
        $jabatan = tenantJabatan::find($id);
        $jabatan->nama_jabatan = $request->nama;
        $jabatan->save();
        return redirect()->route('dashboardJabatan');
    }
}
