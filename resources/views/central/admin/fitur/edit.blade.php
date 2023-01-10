@extends('central.admin.layout.app')
@section('page','Edit Features')
@section('content-app')

<div class="content-wrapper">
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
                    <form class="forms-sample" method="POST" action="{{route('features.update',$data->id)}}">
                        @csrf
                        @method('PUT')
                       <div class="form-group">

                       </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a class="btn btn-light" href="{{route('features.index')}}">Cancel</a>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection