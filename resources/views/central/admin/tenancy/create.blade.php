@extends('central.admin.layout.app')
@section('page','Create Tenants')
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
                    <form class="forms-sample" method="POST" action="{{route('tenancy.store')}}">
                        @csrf
                        @method('POST')
                       <div class="form-group">
                            <label>Id</label>
                            <input type="text" name="id" id="id" class="form-control">
                       </div>
                       <div class="form-group">
                                <label>Domain</label>
                                <input type="text" name="domains" id="domains" class="form-control">
                        </div>
                       <div class="form-group">
                            <label>Paket</label>
                            <select name="plan" id="plan" class="form-control">
                                <option> -- Pilih Paket --</option>
                                @foreach ($paket as $item)
                                    <option value="{{$item->nama_paket}}">{{$item->nama_paket}}</option>
                                @endforeach
                            </select>
                       </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a class="btn btn-light" href="{{route('tenancy.index')}}">Cancel</a>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection