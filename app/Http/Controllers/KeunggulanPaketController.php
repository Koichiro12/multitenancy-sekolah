<?php

namespace App\Http\Controllers;

use App\Models\KeunggulanPaket;
use Illuminate\Http\Request;

class KeunggulanPaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = KeunggulanPaket::latest()->get();
        return view('central.admin.paket.keunggulan.index',compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('central.admin.paket.keunggulan.create');
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
            'name' => ['required'],
            'status' => ['required']
        ]);
        if($validate){
            $create = KeunggulanPaket::create([
                'name' => $request->name,
                'status' => $request->status,
            ]);
            if($create){
                session()->flash('success',"Keunggulan Has Been Create");
                return redirect()->route('keunggulan_paket.index');
            }else{
                session()->flash('error',"Keunggulan Cannot Create");
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
        $data = KeunggulanPaket::findOrFail($id);
        if($data){
            return view('central.admin.paket.keunggulan.edit',compact(['data']));
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
            'name' => ['required'],
            'status' => ['required']
        ]);
        if($validate){
            $update = KeunggulanPaket::findOrFail($id);
            $update->update([
                'name' => $request->name,
                'status' => $request->status,
            ]);
            if($update){
                session()->flash('success',"Keunggulan Has Been Update");
                return redirect()->route('keunggulan_paket.index');
            }else{
                session()->flash('error',"Keunggulan Cannot Update");
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
        $data = KeunggulanPaket::findOrFail($id);
        $data->delete();
        if($data){
            session()->flash('success',"Keunggulan Has Been Deleted");
            return redirect()->route('keunggulan_paket.index');
        }else{
            session()->flash('error',"Keunggulan Cannot Deleted");
            return redirect()->back();
        }
    }
}
