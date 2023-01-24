<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FiturController;
use App\Http\Controllers\KeunggulanPaketController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\TenancyController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
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


//Authentifikasi Central
Route::get('/signin',[AuthController::class,'signin'])->name('signin');
Route::post('/auth', [AuthController::class, 'authenticate'])->name('auth');
Route::post('/signout',[AuthController::class,'logout']);
//Admin Central
Route::group(['middleware'=>['auth']],function(){
    Route::get('/dashboard',[AdminPageController::class,'index'])->name('dashboard');
    Route::resource('/features',FiturController::class);
    Route::resource('/packet',PaketController::class);
    Route::resource('/keunggulan_paket',KeunggulanPaketController::class);
    Route::resource('/news',NewsController::class);
    Route::resource('/testimonial',TestimonialController::class);
    Route::resource('/users',UsersController::class);
    Route::resource('/contact',ContactController::class);
    Route::resource('/tenancy',TenancyController::class);
    Route::resource('/orders',OrderController::class); 
    Route::get('/user_profile',[UserController::class,'profile'])->name('user_profile');
    Route::get('/user_activity',[UserController::class,'activity'])->name('user_activity');
    Route::post('/update_profile/{id}',[UserController::class,'update_profile'])->name('update_profile');
    
});
//FrontWeb Central
Route::get('/',[PageController::class,'index'])->name('dasboard');
Route::get('/fitur',[PageController::class,'view_fitur'])->name('fitur');
Route::get('/paket',[PageController::class,'view_paket'])->name('paket');
Route::get('/berita',[PageController::class,'view_berita'])->name('berita');
Route::get('/promo',[PageController::class,'view_promo'])->name('promo');
Route::get('/tentang',[PageController::class,'view_tentang'])->name('tentang');
Route::get('/order',[PageController::class,'view_order'])->name('order');
