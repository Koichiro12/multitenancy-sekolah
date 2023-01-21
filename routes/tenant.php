<?php

declare(strict_types=1);

use App\Http\Controllers\tenant\beritaController;
use App\Http\Controllers\tenant\PagesController;
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
    Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');
    Route::get('/', [PagesController::class, 'home'])->name('home');
    Route::get('/about', [PagesController::class, 'about'])->name('about');
    Route::get('/alumni', [PagesController::class, 'alumni'])->name('alumni');
    Route::get('/ppdb', [PagesController::class, 'ppdb'])->name('ppdb');
    Route::get('/news', [beritaController::class, 'index'])->name('news');
    Route::get('/detail-news', [PagesController::class, 'detailNews'])->name('detailNews');
    Route::get('/login', [PagesController::class, 'login'])->name('login');
});
