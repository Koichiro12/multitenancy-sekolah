@extends('central.admin.layout.app')
@section('page','Create Feature')
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
    <form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{route('features.store')}}">
        @csrf
        @method('POST')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center">Foto</div>
                    <div class="form-group text-center">
                        <hr>
                            <img src="{{asset('public/central/img/blank_foto_profile.png')}}" id="view_image" width="100%" height="100%"  alt="image">
                        <br>
                        <hr>
                        <input type="file" class="form-control" name="icon" id="icon" accept="image/png, image/jpeg">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@yield('page')</h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-description">@yield('page') Here</p>
                    </div>
                       <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="feature_name" id="feature_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="feature_desc" id="feature_desc" class="form-control" style="height:200px;" cols="30" rows="10"></textarea>  
                          </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a class="btn btn-light" href="{{route('features.index')}}">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
@endsection
@section('content-script')
    <script>
        $('#icon').change( function(event) {
            $("#view_image").fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
        });
    </script>
@endsection