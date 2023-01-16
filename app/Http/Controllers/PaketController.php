<?php

namespace App\Http\Controllers;

use App\Models\KeunggulanPaket;
use App\Models\ListUnggulPaket;
use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Paket::latest()->get();
        return view('central.admin.paket.index',compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $keunggulan = KeunggulanPaket::latest()->get();
        return view('central.admin.paket.create',compact(['keunggulan']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $keunggulan = KeunggulanPaket::latest()->get();
        $data = Paket::findOrFail($id);
        $list_keunggulan = ListUnggulPaket::where([['kode_paket','=',$id]])->get();
        if($data){
            return view('central.admin.paket.edit',compact(['keunggulan','data','list_keunggulan']));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = KeunggulanPaket::findOrFail($id);
        $data->delete();
        if($data){
            session()->flash('success',"Paket Has Been Delete");
        }else{
            session()->flash('error',"Paket Cannot Delete");
        }
        return redirect()->route('testimonial.index');
    }
}
