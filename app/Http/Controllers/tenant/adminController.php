<?php

namespace App\Http\Controllers\tenant;

use App\Http\Controllers\Controller;
use App\Models\tenant\tenantAlumni;
use App\Models\tenant\tenantBerita;
use App\Models\tenant\tenantFasilitas;
use App\Models\tenant\tenantGuru;
use App\Models\tenant\tenantArtikel;
use App\Models\tenant\tenantGallery;
use App\Models\tenant\tenantJabatan;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller

{
    public function index()
    {
        return view('tenant.admin.dashboard');
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

    //////////////////////////////////////////////////////////////////
    /////////////////////ALUMNI FUNCTION///////////////////////////
    /////////////////////ALUMNI FUNCTION///////////////////////////
    /////////////////////ALUMNI FUNCTION///////////////////////////
    //////////////////////////////////////////////////////////////////
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
    //////////////////////////////////////////////////////////////////
    /////////////////////GURU FUNCTION///////////////////////////
    /////////////////////GURU FUNCTION///////////////////////////
    /////////////////////GURU FUNCTION///////////////////////////
    //////////////////////////////////////////////////////////////////
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
        $guru = tenantGuru::findOrFail($id);
        if ($guru) {
            return view('tenant.admin.guru.edit', compact(['guru']));
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
    //////////////////////////////////////////////////////////////////
    /////////////////////JABATAN FUNCTION///////////////////////////
    /////////////////////JABATAN FUNCTION///////////////////////////
    /////////////////////JABATAN FUNCTION///////////////////////////
    //////////////////////////////////////////////////////////////////
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

    //////////////////////////////////////////////////////////////////
    /////////////////////ARTIKEL FUNCTION///////////////////////////
    /////////////////////ARTIKEL FUNCTION///////////////////////////
    /////////////////////ARTIKEL FUNCTION///////////////////////////
    //////////////////////////////////////////////////////////////////
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
    //////////////////////////////////////////////////////////////////
    /////////////////////GALLERY FUNCTION///////////////////////////
    /////////////////////GALLERY FUNCTION///////////////////////////
    /////////////////////GALLERY FUNCTION///////////////////////////
    //////////////////////////////////////////////////////////////////
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
            return view('tenant.admin.artikel.edit', compact(['showGallery']));
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
        return view('tenant.admin.artikel.edit', compact('showGallery'));
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

    //////////////////////////////////////////////////////////////////
    /////////////////////USERS FUNCTION///////////////////////////
    /////////////////////USERS FUNCTION///////////////////////////
    /////////////////////USERS FUNCTION///////////////////////////
    //////////////////////////////////////////////////////////////////
    public function users()
    {
        $users = User::latest()->get();
        return view('tenant.admin.users.index', compact('users'));
    }
    public function createUsers()
    {
        return view('tenant.admin.users.create');
    }
    public function editUsers($id)
    {
        $users = User::findOrFail($id);
        if ($users) {
            return view('tenant.admin.users.edit', compact(['users']));
        }
    }
    public function addUsers(Request $request)
    {
        $validate = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
            'level' => ['required'],
        ]);
        if ($validate) {
            $create = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'level' => $request->level,
            ]);

            if ($create) {
                $data_users = User::where([['name','=',$request->name],['email','=',$request->email],['level','=',$request->level],
                ])->get()->first();
                UserProfile::create([
                    'id_user' => $data_users->id,
                    'bio' => 'Your Bio Here',
                    'alamat' => '-',
                    'no_hp' => '-',
                    'foto_profile' => '-',
                ]);
                return redirect()->route('dashboardUsers');
            }
        }
    }
    public function deleteUsers($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        UserProfile::where([['id_user','=',$id]])->delete();
        if ($data) {
            return redirect()->route('dashboardUsers');
        }
    }
    public function showUsers($id)
    {
    }
    public function updateUsers(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'level' => ['required'],
        ]);
        if ($validate) {
            $update = User::findOrFail($id);
            $pass = $request->password != null ? Hash::make($request->password) : $update->password;
            $update->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $pass,
                'level' => $request->level,
            ]);
            if ($update) {
                return redirect()->route('dashboardUsers');
            }
        }
    }
    //////////////////////////////////////////////////////////////////
    /////////////////////USER FUNCTION///////////////////////////
    /////////////////////USER FUNCTION///////////////////////////
    /////////////////////USER FUNCTION///////////////////////////
    //////////////////////////////////////////////////////////////////

    public function userProfile()
    {
        $data = User::join('user_profiles','users.id','=','user_profiles.id_user')
                ->where([['users.id','=',auth()->user()->id]])->get()->first();
        $id = auth()->user()->id;
        return view('tenant.admin.user.profile',compact(['data','id']));
    }
    public function updateProfile(Request $request,$id)
    {
        $validate = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
        ]);
    }
    //////////////////////////////////////////////////////////////////
    /////////////////////IMAGE UPLOADING FUNCTION///////////////////////////
    /////////////////////IMAGE UPLOADING FUNCTION///////////////////////////
    /////////////////////IMAGE UPLOADING FUNCTION///////////////////////////
    //////////////////////////////////////////////////////////////////


    public function uploadImageArtikel($image)
    {
        $extFile = date('Ymdhis').$image->getClientOriginalName();
        $path = $image->move('public/tenant/upload_file/artikel', $extFile);
        $path = str_replace('\\', '/', $path);
        return $path;
    }
    public function uploadImageBerita($image)
    {
        $extFile = date('Ymdhis').$image->getClientOriginalName();
        $path = $image->move('public/tenant/upload_file/berita', $extFile);
        $path = str_replace('\\', '/', $path);
        return $path;
    }
    public function uploadImageFasilitas($image)
    {
        $extFile = date('Ymdhis').$image->getClientOriginalName();
        $path = $image->move('public/tenant/upload_file/fasilitas', $extFile);
        $path = str_replace('\\', '/', $path);
        return $path;
    }
    public function uploadImageAlumni($image)
    {
        $extFile = date('Ymdhis').$image->getClientOriginalName();
        $path = $image->move('public/tenant/upload_file/alumni', $extFile);
        $path = str_replace('\\', '/', $path);
        return $path;
    }
    public function uploadImageGuru($image)
    {
        $extFile = date('Ymdhis').$image->getClientOriginalName();
        $path = $image->move('public/tenant/upload_file/guru', $extFile);
        $path = str_replace('\\', '/', $path);
        return $path;
    }
    public function uploadImageGallery($image)
    {
        $extFile = $image->getClientOriginalName();
        $path = $image->move('public/tenant/upload_file/gallery', $extFile);
        $path = str_replace('\\', '/', $path);
        return $path;
    }
}
