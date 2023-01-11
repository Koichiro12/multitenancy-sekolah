<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = News::latest()->get();
        return view('central.admin.news.index',compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('central.admin.news.create');
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
            'news_name' => ['required'],
            'news_desc' => ['required'],
            'news_uploader' => ['required'],
        ]);
        if($validate){
            $file = $request->file('news_image');
            $foto = $file != null ? date('Ymdhis').$file->getClientOriginalName() : '-';
            if($file != null){
                $file->move('public/central/uploads',$foto);
            }
            $create = News::create([
                'news_image' => $foto,
                'news_name' => $request->news_name,
                'news_desc' => $request->news_desc,
                'news_uploader' => $request->news_uploader,
            ]);
            if($create){
                session()->flash('success',"News Has Been Create");
                return redirect()->route('news.index');
            }else{
                session()->flash('error',"News Cannot Create");
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
        $data = News::findOrFail($id);
        if($data){
            return view('central.admin.news.edit',compact(['data']));
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
            'news_name' => ['required'],
            'news_desc' => ['required'],
            'news_uploader' => ['required'],
        ]);
        if($validate){
            $update = News::findOrFail($id);
            $file = $request->file('news_image');
            $foto = $file != null ? date('Ymdhis').$file->getClientOriginalName() : $update->news_image;
            if($file != null){
                $file->move('public/central/uploads',$foto);
            }
            $update->update([
                'news_image' => $foto,
                'news_name' => $request->news_name,
                'news_desc' => $request->news_desc,
                'news_uploader' => $request->news_uploader,
            ]);
            if($update){
                session()->flash('success',"News Has Been Update");
                return redirect()->route('news.index');
            }else{
                session()->flash('error',"News Cannot Update");
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
        $data = News::findOrFail($id);
        $data->delete();
        if($data){
            session()->flash('success',"News Has Been Delete");
        }else{
            session()->flash('error',"News Cannot Delete");
        }
        return redirect()->route('news.index');
    }
}
