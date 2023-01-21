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
        $validate = $request->validate([
            'nama_paket' => ['required'],
            'harga_paket' => ['required'],
            'per_harga_paket' => ['required'],
        ]);
        if($validate){
            $create = Paket::create([
                'nama_paket' => $request->nama_paket,
                'harga_paket' => $request->harga_paket,
                'per_harga_paket' => $request->per_harga_paket,
                'status_paket' => '1'
            ]);
            if($create){
                $datapaket = Paket::where([['nama_paket','=',$request->nama_paket]
                ,['harga_paket','=',$request->harga_paket]
                ,['per_harga_paket','=',$request->per_harga_paket]
                ,['status_paket','=','1']])->get()->first();
                $keunggulan = KeunggulanPaket::latest()->get();
                foreach ($keunggulan as $item) {
                    if($request['keunggulan_'.$item->id] != null){
                        ListUnggulPaket::create([
                            'kode_paket' => $datapaket->id,
                            'kode_keunggulan' => $item->id,
                        ]);
                    }        
                }
                session()->flash('success',"Paket Has Been Create");
                return redirect()->route('packet.index');
            }else{
                session()->flash('error',"Something Went Wrong");
                return redirect()->back();
            }
           
        }
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
        $validate = $request->validate([
            'nama_paket' => ['required'],
            'harga_paket' => ['required'],
            'per_harga_paket' => ['required'],
        ]);
        if($validate){
            $update = Paket::findOrFail($id);
            $update->update([
                'nama_paket' => $request->nama_paket,
                'harga_paket' => $request->harga_paket,
                'per_harga_paket' => $request->per_harga_paket,
                'status_paket' => '1'
            ]);
            if($update){
                ListUnggulPaket::where([['kode_paket','=',$id]])->delete();
                $keunggulan = KeunggulanPaket::latest()->get();
                foreach ($keunggulan as $item) {
                    if($request['keunggulan_'.$item->id] != null){
                        ListUnggulPaket::create([
                            'kode_paket' => $id,
                            'kode_keunggulan' => $item->id,
                        ]);
                    }        
                }
                session()->flash('success',"Paket Has Been Update");
                return redirect()->route('packet.index');
            }else{
                session()->flash('error',"Something Went Wrong");
                return redirect()->back();
            }
           
        }
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
        $data = Paket::findOrFail($id);
        ListUnggulPaket::where([['kode_paket','=',$id]])->delete();
        $data->delete();
        if($data){
            session()->flash('success',"Paket Has Been Delete");
        }else{
            session()->flash('error',"Paket Cannot Delete");
        }
        return redirect()->route('packet.index');
    }
}
