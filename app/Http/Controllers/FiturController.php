<?php

namespace App\Http\Controllers;

use App\Models\Features;
use Illuminate\Http\Request;

class FiturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Features::latest()->get();
        return view('central.admin.fitur.index',compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('central.admin.fitur.create');
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
            'feature_name' => ['required'],
            'feature_desc' => ['required'],
        ]);
        if($validate){
            $file = $request->file('icon');
            $foto = $file != null ? date('Ymdhis').$file->getClientOriginalName() : '-';
            if($file != null){
                $file->move('public/central/uploads',$foto);
            }
            $create = Features::create([
                'icon' => $foto,
                'feature_name' => $request->feature_name,
                'feature_desc' => $request->feature_desc,
            ]);
            if($create){
                session()->flash('success',"Features Has Been Create");
                return redirect()->route('features.index');
            }else{
                session()->flash('error',"Features Cannot Create");
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
        $data = Features::findOrFail($id);
        if($data){
            return view('central.admin.fitur.edit',compact(['data']));
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
            'feature_name' => ['required'],
            'feature_desc' => ['required'],
        ]);
        if($validate){
            $update = Features::findOrFail($id);
            $file = $request->file('icon');
            $foto = $file != null ? date('Ymdhis').$file->getClientOriginalName() : $update->icon;
            if($file != null){
                $file->move('public/central/uploads',$foto);
            }
            $update->update([
                'icon' => $foto,
                'feature_name' => $request->feature_name,
                'feature_desc' => $request->feature_desc,
            ]);
            if($update){
                session()->flash('success',"Features Has Been Edited");
                return redirect()->route('features.index');
            }else{
                session()->flash('error',"Features Cannot Edited");
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
        $data = Features::findOrFail($id);
        $data->delete();
        if($data){
            session()->flash('success',"Features Has Been Delete");
        }else{
            session()->flash('error',"Features Cannot Delete");
        }
        return redirect()->route('features.index');
    }
}
