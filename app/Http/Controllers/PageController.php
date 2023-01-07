<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return view('central.index');
    }
    public function login(){
        return view('central.auth.signin');
    }
    public function view_paket(){
        return view('central.paket');
    }
    public function view_tentang(){
        return view('central.tentang');
    }
    public function view_template(){
        return view('central.template');
    }
    public function view_berita(){
        return view('central.berita');
    }
    public function view_promo(){
        return view('central.promo');
    }
    public function view_fitur(){
        return view('central.fitur');
    }
    public function view_order(){
        return view('central.order');
    }
    
}
