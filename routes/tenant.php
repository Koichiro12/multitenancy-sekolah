<?php

declare(strict_types=1);

use App\Http\Controllers\tenant\adminController;
use App\Http\Controllers\tenant\alumniController;
use App\Http\Controllers\tenant\artikelController;
use App\Http\Controllers\tenant\beritaController;
use App\Http\Controllers\tenant\fasilitasController;
use App\Http\Controllers\tenant\galleryController;
use App\Http\Controllers\tenant\guruController;
use App\Http\Controllers\tenant\jabatanController;
use App\Http\Controllers\tenant\PagesController;
use App\Http\Controllers\tenant\TenantAuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomainOrSubdomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'api',
    InitializeTenancyByDomainOrSubdomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/', function () {
        return 'This is Your Multi-tenant API applications. The id of the current tenant is ' . tenant('id');
    });
});

Route::middleware([
    'web',
    InitializeTenancyByDomainOrSubdomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/', [PagesController::class, 'home'])->name('home');
    Route::get('/about', [PagesController::class, 'about'])->name('about');
    Route::get('/alumni', [alumniController::class, 'index'])->name('alumni');
    Route::get('/ppdb', [PagesController::class, 'ppdb'])->name('ppdb');
    Route::get('/news', [beritaController::class, 'index'])->name('news');
    Route::get('/artikel', [artikelController::class, 'index'])->name('artikel');
    Route::get('/detail-artikel-{id}', [artikelController::class, 'detailArtikel'])->name('detailArtikel');
    Route::get('/detail-berita-{id}', [beritaController::class, 'detailBerita'])->name('detailBerita');
    Route::get('/guru', [PagesController::class, 'guru'])->name('guru');
    Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');

    //Authetications
    Route::get('/signin', [TenantAuthController::class, 'login'])->name('signin');
    Route::post('/auth', [TenantAuthController::class, 'authenticate'])->name('auth');
    Route::post('/signout', [TenantAuthController::class, 'logout'])->name('signout');

    Route::middleware(['universal'])->group(function () {
        Route::middleware(['tenant-auth'])->group(function () {
            //User Route
            Route::get('/user-profile', [adminController::class, 'userProfile'])->name('userProfile');
            Route::post('/update-profile-{id}', [adminController::class, 'updateProfile'])->name('updateProfile');
            // dashboard route
            Route::get('/dashboard', [adminController::class, 'index'])->name('dashboard');

            // dashboard route Artikel
            Route::get('/dashboard-artikel', [artikelController::class, 'artikel'])->name('dashboardArtikel');
            Route::get('/dashboard-artikel-create', [artikelController::class, 'createArtikel'])->name('dashboardArtikelCreate');
            Route::get('/dashboard-artikel-edit-{id}', [artikelController::class, 'editArtikel'])->name('dashboardArtikelEdit');
            Route::post('/dashboard-artikel-add', [artikelController::class, 'addArtikel'])->name('dashboardArtikelAdd');
            Route::get('/dashboard-artikel-del-{id}', [artikelController::class, 'deleteArtikel'])->name('dashboardArtikelDel');
            Route::get('/dashboard-artikel-show-{id}', [artikelController::class, 'showArtikel'])->name('dashboardArtikelShow');
            Route::post('/dashboard-artikel-update-{id}', [artikelController::class, 'updateArtikel'])->name('dashboardArtikelUpdate');

            // dashboard route berita
            Route::get('/dashboard-berita', [beritaController::class, 'berita'])->name('dashboardBerita');
            Route::get('/dashboard-berita-create', [beritaController::class, 'createBerita'])->name('dashboardBeritaCreate');
            Route::get('/dashboard-berita-edit-{id}', [beritaController::class, 'editBerita'])->name('dashboardBeritaEdit');
            Route::post('/dashboard-berita-add', [beritaController::class, 'addBerita'])->name('dashboardBeritaAdd');
            Route::get('/dashboard-berita-del-{id}', [beritaController::class, 'deleteBerita'])->name('dashboardBeritaDel');
            Route::get('/dashboard-berita-show-{id}', [beritaController::class, 'showBerita'])->name('dashboardBeritaShow');
            Route::post('/dashboard-berita-update-{id}', [beritaController::class, 'updateBerita'])->name('dashboardBeritaUpdate');

            // dashboard route fasilitas
            Route::get('/dashboard-fasilitas', [fasilitasController::class, 'fasilitas'])->name('dashboardFasilitas');
            Route::get('/dashboard-fasilitas-create', [fasilitasController::class, 'createFasilitas'])->name('dashboardFasilitasCreate');
            Route::get('/dashboard-fasilitas-edit-{id}', [fasilitasController::class, 'editFasilitas'])->name('dashboardFasilitasEdit');
            Route::post('/dashboard-fasilitas-add', [fasilitasController::class, 'addFasilitas'])->name('dashboardFasilitasAdd');
            Route::get('/dashboard-fasilitas-del-{id}', [fasilitasController::class, 'deleteFasilitas'])->name('dashboardFasilitasDel');
            Route::get('/dashboard-fasilitas-show-{id}', [fasilitasController::class, 'showFasilitas'])->name('dashboardFasilitasShow');
            Route::post('/dashboard-fasilitas-update-{id}', [fasilitasController::class, 'updateFasilitas'])->name('dashboardFasilitasUpdate');
            // dashboard route alumni
            Route::get('/dashboard-alumni', [alumniController::class, 'alumni'])->name('dashboardAlumni');
            Route::get('/dashboard-alumni-create', [alumniController::class, 'createAlumni'])->name('dashboardAlumniCreate');
            Route::get('/dashboard-alumni-edit-{id}', [alumniController::class, 'editAlumni'])->name('dashboardAlumniEdit');
            Route::post('/dashboard-alumni-add', [alumniController::class, 'addAlumni'])->name('dashboardAlumniAdd');
            Route::get('/dashboard-alumni-del-{id}', [alumniController::class, 'deleteAlumni'])->name('dashboardAlumniDel');
            Route::get('/dashboard-alumni-show-{id}', [alumniController::class, 'showAlumni'])->name('dashboardAlumniShow');
            Route::post('/dashboard-alumni-update-{id}', [alumniController::class, 'updateAlumni'])->name('dashboardAlumniUpdate');
            // dashboard route guru
            Route::get('/dashboard-guru', [guruController::class, 'guru'])->name('dashboardGuru');
            Route::get('/dashboard-guru-create', [guruController::class, 'createGuru'])->name('dashboarGuruCreate');
            Route::get('/dashboard-guru-edit-{id}', [guruController::class, 'editGuru'])->name('dashboardGuruEdit');
            Route::post('/dashboard-guru-add', [guruController::class, 'addGuru'])->name('dashboardGuruAdd');
            Route::get('/dashboard-guru-del-{id}', [guruController::class, 'deleteGuru'])->name('dashboardGuruDel');
            Route::get('/dashboard-guru-show-{id}', [guruController::class, 'showGuru'])->name('dashboardGuruShow');
            Route::post('/dashboard-guru-update-{id}', [guruController::class, 'updateGuru'])->name('dashboardGuruUpdate');
            // dashboard route jabatan
            Route::get('/dashboard-jabatan', [jabatanController::class, 'jabatan'])->name('dashboardJabatan');
            Route::get('/dashboard-jabatan-create', [jabatanController::class, 'createJabatan'])->name('dashboarJabatanCreate');
            Route::get('/dashboard-jabatan-edit-{id}', [jabatanController::class, 'editJabatan'])->name('dashboardJabatanEdit');
            Route::post('/dashboard-jabatan-add', [jabatanController::class, 'addJabatan'])->name('dashboardJabatanAdd');
            Route::get('/dashboard-jabatan-del-{id}', [jabatanController::class, 'deleteJabatan'])->name('dashboardJabatanDel');
            Route::get('/dashboard-jabatan-show-{id}', [jabatanController::class, 'showJabatan'])->name('dashboardJabatanShow');
            Route::post('/dashboard-jabatan-update-{id}', [jabatanController::class, 'updateJabatan'])->name('dashboardJabatanUpdate');
            // dashboard route gallery
            Route::get('/dashboard-gallery', [galleryController::class, 'gallery'])->name('dashboardGallery');
            Route::get('/dashboard-gallery-create', [galleryController::class, 'createGallery'])->name('dashboarGalleryCreate');
            Route::get('/dashboard-gallery-edit-{id}', [galleryController::class, 'editGallery'])->name('dashboardGalleryEdit');
            Route::post('/dashboard-gallery-add', [galleryController::class, 'addGallery'])->name('dashboardGalleryAdd');
            Route::get('/dashboard-gallery-del-{id}', [galleryController::class, 'deleteGallery'])->name('dashboardGalleryDel');
            Route::get('/dashboard-gallery-show-{id}', [galleryController::class, 'showGallery'])->name('dashboardGalleryShow');
            Route::post('/dashboard-gallery-update-{id}', [galleryController::class, 'updateGallery'])->name('dashboardGalleryUpdate');
            // dashboard route User
            Route::get('/dashboard-users', [adminController::class, 'users'])->name('dashboardUsers');
            Route::get('/dashboard-users-create', [adminController::class, 'createUsers'])->name('dashboarUsersCreate');
            Route::get('/dashboard-users-edit-{id}', [adminController::class, 'editUsers'])->name('dashboardUsersEdit');
            Route::post('/dashboard-users-add', [adminController::class, 'addUsers'])->name('dashboardUsersAdd');
            Route::get('/dashboard-users-del-{id}', [adminController::class, 'deleteUsers'])->name('dashboardUsersDel');
            Route::get('/dashboard-users-show-{id}', [adminController::class, 'showUsers'])->name('dashboardUsersShow');
            Route::post('/dashboard-users-update-{id}', [adminController::class, 'updateUsers'])->name('dashboardUsersUpdate');
        });
    });
});
