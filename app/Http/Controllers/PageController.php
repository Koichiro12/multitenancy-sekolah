<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Features;
use App\Models\testimonial;

class PageController extends Controller
{
    //
    public function index(){
        $feature = Features::latest()->get();   
        $testimoni = testimonial::latest()->get();      
        return view('central.index',compact(['feature','testimoni']));
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
        $data = News::latest()->get();
        return view('central.berita',compact(['data']));
    }
    public function view_promo(){
        return view('central.promo');
    }
    public function view_fitur(){
        $data = Features::latest()->get();
        return view('central.fitur',compact(['data']));
    }
    public function view_order(){
        return view('central.order');
    }

}