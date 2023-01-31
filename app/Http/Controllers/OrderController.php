<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Paket;
use Illuminate\Http\Request;
use PDO;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Order::join('pakets','orders.kode_paket','=','pakets.id')->get(['orders.id as id_order','orders.*','pakets.*']);
        return view('central.admin.order.index',compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'kode_paket' => ['required'],
            'domains' => ['required'],
            'nama' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'alamat' => ['required'],
            'pesan' => ['required'],
        ]);
        if($validate){
            $create = Order::create([
                'kode_paket' => $request->kode_paket,
                'domains' => $request->domains,
                'nama' => $request->nama,
                'email' => $request->email,
                'phone' => $request->phone,
                'alamat' => $request->alamat,
                'pesan' => $request->pesan,
                'status_order' => '0',
            ]);
            if($create){
                session()->flash('success',"Order Berhasil, Pihak Kami Akan Segera Menghubungi Anda Melalui Email / No Telephone");
            }else{
                session()->flash('error',"Oops, Something Went Wrong");
            }
            return redirect()->back();
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
        $data = Order::join('pakets','orders.kode_paket','=','pakets.id')
                        ->where([['orders.id','=',$id]])
                        ->get(['orders.id as id_order','orders.*','pakets.*'])->first();
        if($data){
            return view('central.admin.order.edit',compact(['data']));
        }
    }

    public function ubah_status(Request $request, $id){
        $validate = $request->validate([
            'status_order' => ['required'],
        ]);
        if($validate){
            $data = Order::findOrFail($id);
            $data->update([
                'status_order' => $request->status_order
            ]);
            if($data){
                
                session()->flash('success',"Update Status Selesai");
            }else{
                session()->flash('error',"Oops, Something Went Wrong");
            }
            return redirect()->route('orders.index');
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
    }
}
