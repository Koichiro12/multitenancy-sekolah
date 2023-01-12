@extends('central.admin.layout.app')
@section('page','Create Keunggulan Paket')
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
                    <form class="forms-sample" method="POST" action="{{route('keunggulan_paket.store')}}">
                        @csrf
                        @method('POST')
                       <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                       </div>
                       <div class="form-group">
                            <label>Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="0">Aktif</option>
                                <option value="1">Tidak Aktif</option>
                            </select>
                       </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a class="btn btn-light" href="{{route('keunggulan_paket.index')}}">Cancel</a>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection