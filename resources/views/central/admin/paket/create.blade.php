@extends('central.admin.layout.app')
@section('page','Create Paket')
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
            @if(session('error'))
                <div class="alert alert-danger text-center">
                    {{ session('error') }}
                </div>
            @endif 
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@yield('page')</h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-description">@yield('page') Here</p>
                    </div>
                    <form class="forms-sample" method="POST" action="{{route('packet.store')}}">
                        @csrf
                        @method('POST')
                       <div class="form-group">
                            <label>Nama Paket</label>
                            <input type="text" name="nama_paket" id="nama_paket" class="form-control">
                       </div>
                       <div class="form-group">
                        <label>Harga Paket</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="number" name="harga_paket" id="harga_paket" class="form-control">
                            </div>
                            <div class="col-md-1 text-center">
                                <h1>/</h1>
                            </div>
                            <div class="col-md-5">
                                <select name="per_harga_paket" id="per_harga_paket" class="form-control">
                                    <option value="bulan"> Bulan </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            @foreach ($keunggulan as $item)
                                <input type="checkbox" name="keunggulan_{{$item->id}}" id="keunggulan_{{$item->id}}" class="form-check-input">    
                                <label for="keunggulan_{{$item->id}}" class="form-check-label">{{$item->name}}</label>
                            <br>
                            @endforeach
                        </div>
                       </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a class="btn btn-light" href="{{route('packet.index')}}">Cancel</a>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection