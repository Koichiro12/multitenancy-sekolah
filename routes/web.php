<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[PageController::class,'index'])->name('dasboard');
Route::get('/fitur',[PageController::class,'view_fitur'])->name('fitur');
Route::get('/paket',[PageController::class,'view_paket'])->name('paket');
Route::get('/berita',[PageController::class,'view_berita'])->name('berita');
Route::get('/promo',[PageController::class,'view_promo'])->name('promo');
Route::get('/tentang',[PageController::class,'view_tentang'])->name('tentang');
Route::get('/order',[PageController::class,'view_order'])->name('order');
