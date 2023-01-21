<?php

declare(strict_types=1);

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
    Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');
    Route::get('/about', [PagesController::class, 'about'])->name('about');
    Route::get('/alumni', [alumniController::class, 'index'])->name('alumni');
    Route::get('/ppdb', [PagesController::class, 'ppdb'])->name('ppdb');
    Route::get('/news', [beritaController::class, 'index'])->name('news');
    Route::get('/guru', [PagesController::class, 'guru'])->name('guru');
    Route::get('/detail-berita/{id}', [beritaController::class, 'detailBerita'])->name('detailBerita');
    Route::get('/login', [PagesController::class, 'login'])->name('login');
});
