<?php

namespace App\Http\Controllers;

use App\Models\testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = testimonial::latest()->get();
        return view('central.admin.testimoni.index',compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('central.admin.testimoni.create');
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
            'testi_name' => ['required'],
            'testi_profesion' => ['required'],
            'testi_desc' => ['required'],
        ]);
        if($validate){
            $file = $request->file('testi_image');
            $foto = $file != null ? date('Ymdhis').$file->getClientOriginalName() : '-';
            if($file != null){
                $file->move('public/central/uploads',$foto);
            }
            $create = testimonial::create([
                'testi_image' => $foto,
                'testi_name' => $request->testi_name,
                'testi_profesion' => $request->testi_profesion,
                'testi_desc' => $request->testi_desc,
            ]);
            if($create){
                session()->flash('success',"Testimonial Has Been Create");
                return redirect()->route('testimonial.index');
            }else{
                session()->flash('error',"Testimonial Cannot Create");
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
        $data = testimonial::findOrFail($id);
        if($data){
            return view('central.admin.testimoni.edit',compact(['data']));
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
            'testi_name' => ['required'],
            'testi_profesion' => ['required'],
            'testi_desc' => ['required'],
        ]);
        if($validate){
            $update = testimonial::findOrFail($id);
            $file = $request->file('testi_image');
            $foto = $file != null ? date('Ymdhis').$file->getClientOriginalName() : $update->testi_image;
            if($file != null){
                $file->move('public/central/uploads',$foto);
            }
            $update->update([
                'testi_image' => $foto,
                'testi_name' => $request->testi_name,
                'testi_profesion' => $request->testi_profesion,
                'testi_desc' => $request->testi_desc,
            ]);
            if($update){
                session()->flash('success',"Testimonial Has Been Update");
                return redirect()->route('testimonial.index');
            }else{
                session()->flash('error',"Testimonial Cannot Create");
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
        $data = testimonial::findOrFail($id);
        $data->delete();
        if($data){
            session()->flash('success',"Testimonial Has Been Delete");
        }else{
            session()->flash('error',"Testimonial Cannot Delete");
        }
        return redirect()->route('testimonial.index');
    }
}
