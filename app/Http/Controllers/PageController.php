<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Features;
use App\Models\KeunggulanPaket;
use App\Models\ListUnggulPaket;
use App\Models\Paket;
use App\Models\testimonial;

class PageController extends Controller
{
    //
    public function index(){
        $feature = Features::latest()->get();   
        $testimoni = testimonial::latest()->get();
        $keunggulan = KeunggulanPaket::latest()->get();
        $data = Paket::latest()->orderBy('id')->get();
        $list_keunggulan = ListUnggulPaket::latest()->get();
        $nilai_tengah = ($data->count() - 1) / 2 > 0 ? round($data->count() / 2) : 0;      
        return view('central.index',compact(['feature','testimoni','keunggulan','data','list_keunggulan','nilai_tengah']));
    }
    public function view_paket(){
        $keunggulan = KeunggulanPaket::latest()->get();
        $data = Paket::latest()->orderBy('id')->get();
        $list_keunggulan = ListUnggulPaket::latest()->get();
        $nilai_tengah = ($data->count() - 1) / 2 > 0 ? round($data->count() / 2) : 0;
        return view('central.paket',compact(['data','keunggulan','list_keunggulan','nilai_tengah']));
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
        $paket = Paket::latest()->get();
        return view('central.order',compact(['paket']));
    }

}