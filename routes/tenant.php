<?php

declare(strict_types=1);

use App\Http\Controllers\tenant\adminController;
use App\Http\Controllers\tenant\alumniController;
use App\Http\Controllers\tenant\beritaController;
use App\Http\Controllers\tenant\PagesController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
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
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/', function () {
        return 'This is Your Multi-tenant API applications. The id of the current tenant is ' . tenant('id');
    });
});

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/', [PagesController::class, 'home'])->name('home');
    Route::get('/about', [PagesController::class, 'about'])->name('about');
    Route::get('/alumni', [alumniController::class, 'index'])->name('alumni');
    Route::get('/ppdb', [PagesController::class, 'ppdb'])->name('ppdb');
    Route::get('/news', [beritaController::class, 'index'])->name('news');
    Route::get('/detail-berita-{id}', [beritaController::class, 'detailBerita'])->name('detailBerita');
    Route::get('/guru', [PagesController::class, 'guru'])->name('guru');
    Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');
    Route::get('/login', [PagesController::class, 'login'])->name('login');

    // dashboard route
    Route::get('/dashboard', [adminController::class, 'index'])->name('dashboard');
    // dashboard route berita
    Route::get('/dashboard-berita', [adminController::class, 'berita'])->name('dashboardBerita');
    Route::post('/dashboard-berita-add', [adminController::class, 'addBerita'])->name('dashboardBeritaAdd');
    Route::get('/dashboard-berita-del-{id}', [adminController::class, 'deleteBerita'])->name('dashboardBeritaDel');
    Route::get('/dashboard-berita-show-{id}', [adminController::class, 'showBerita'])->name('dashboardBeritaShow');
    Route::post('/dashboard-berita-update-{id}', [adminController::class, 'updateBerita'])->name('dashboardBeritaUpdate');
    // dashboard route fasilitas
    Route::get('/dashboard-fasilitas', [adminController::class, 'fasilitas'])->name('dashboardFasilitas');
    Route::post('/dashboard-fasilitas-add', [adminController::class, 'addFasilitas'])->name('dashboardFasilitasAdd');
    Route::get('/dashboard-fasilitas-del-{id}', [adminController::class, 'deleteFasilitas'])->name('dashboardFasilitasDel');
    Route::get('/dashboard-fasilitas-show-{id}', [adminController::class, 'showFasilitas'])->name('dashboardFasilitasShow');
    Route::post('/dashboard-fasilitas-update-{id}', [adminController::class, 'updateFasilitas'])->name('dashboardFasilitasUpdate');
    // dashboard route alumni
    Route::get('/dashboard-alumni', [adminController::class, 'alumni'])->name('dashboardAlumni');
    Route::post('/dashboard-alumni-add', [adminController::class, 'addAlumni'])->name('dashboardAlumniAdd');
    Route::get('/dashboard-alumni-del-{id}', [adminController::class, 'deleteAlumni'])->name('dashboardAlumniDel');
    Route::get('/dashboard-alumni-show-{id}', [adminController::class, 'showAlumni'])->name('dashboardAlumniShow');
    Route::post('/dashboard-alumni-update-{id}', [adminController::class, 'updateAlumni'])->name('dashboardAlumniUpdate');
    // dashboard route guru
    Route::get('/dashboard-guru', [adminController::class, 'guru'])->name('dashboardGuru');
    Route::post('/dashboard-guru-add', [adminController::class, 'addGuru'])->name('dashboardGuruAdd');
    Route::get('/dashboard-guru-del-{id}', [adminController::class, 'deleteGuru'])->name('dashboardGuruDel');
    Route::get('/dashboard-guru-show-{id}', [adminController::class, 'showGuru'])->name('dashboardGuruShow');
    Route::post('/dashboard-guru-update-{id}', [adminController::class, 'updateGuru'])->name('dashboardGuruUpdate');
});
