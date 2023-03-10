<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Http\Request;
use Stancl\Tenancy\Database\Models\Domain;

class TenancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Tenant::join('domains','tenants.id','=','domains.tenant_id')->get(['tenants.*','tenants.id as id_tenant','domains.*']);
        return view('central.admin.tenancy.index',compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $paket = Paket::latest()->get();
        return view('central.admin.tenancy.create',compact(['paket']));
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
            'domains' => ['required'],
            'id' => ['required'],
            'plan' => ['required'],
        ]);
        if($validate){
            $tenant = Tenant::create([
                'id' => $request->id,
                'plan' => $request->plan
            ]);
            Domain::create([
                'domain' => $request->domains,
                'tenant_id' => $request->id
            ]);
            if($tenant){
                session()->flash('success',"Tenancy Has Been Create");
                return redirect()->route('tenancy.index');
            }else{
                session()->flash('error',"Tenancy Cannot Create");
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
        $data = Tenant::findOrFail($id);
        $data->delete();
        $data->domains()->delete();
        if($data){
            session()->flash('success',"Tenancy Has Been Deleted");
        }else{
            session()->flash('error',"Tenancy Cannot Delete");
        }
        return redirect()->route('tenancy.index');
    }
}
