@extends('central.admin.layout.app')
@section('page','Detail Order')
@section('content-app')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            @if(session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif 
        @if(session('error'))
            <div class="alert alert-danger text-center">
                {{ session('error') }}
            </div>
        @endif 
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form action="{{route('orders.ubah_status',$data->id_order)}}" method="POST">
                    @csrf
                    @method('PUT')
                <div class="card-body">
                    <h4 class="card-title">@yield('page')</h4>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-description"> @yield('page') Here</p>
                        <div class="add-items d-flex mb-0">
                            <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td width="20%">Nama</td>
                                <td>: {{$data->nama}}</td>
                            </tr>
                            <tr>
                                <td width="20%">Email</td>
                                <td>: {{$data->email}}</td>
                            </tr>
                            <tr>
                                <td width="20%">No Hp</td>
                                <td>: {{$data->phone}}</td>
                            </tr>
                            <tr>
                                <td width="20%">Alamat</td>
                                <td>: {{$data->alamat}}</td>
                            </tr>
                            <tr>
                                <td width="20%">Domain</td>
                                <td>: {{$data->domains}}</td>
                            </tr>
                            <tr>
                                <td width="20%">Pesan</td>
                                <td>: {{$data->pesan}}</td>
                            </tr>
                            <tr>
                                <td width="20%">Paket</td>
                                <td>:  {{$data->nama_paket}} - Rp.{{$data->harga_paket}} / {{$data->per_harga_paket}}</td>
                            </tr>
                            <tr>
                                <td>
                                    Status
                                </td>
                                <td><select name="status_order" id="status_order" class="form-control">
                                    <option value="0" @if ($data->status_order == '0')
                                        {{'selected'}}
                                    @endif>-- Pilih Status --</option>
                                    <option value="1" @if ($data->status_order == '1')
                                        {{'selected'}}
                                    @endif>Active</option>
                                    <option value="2" @if ($data->status_order == '2')
                                        {{'selected'}}
                                    @endif>NonActive</option>
                                </select></td>
                            </tr>
                        </table>
                    </div>                    
                </div>
                <div class="card-footer">
                    <input type="submit" value="Submit" class="btn btn-primary">
                    <a href="{{route('orders.index')}}" class="btn btn-danger">Cancel</a>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection