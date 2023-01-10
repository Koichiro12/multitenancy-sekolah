@extends('central.admin.layout.app')
@section('page','Edit Testimoni')
@section('content-app')

<div class="content-wrapper">
    @if(session('error'))
                <div class="alert alert-danger text-center">
                    {{ session('error') }}
                </div>
            @endif 
    <form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{route('testimonial.update',$data->id)}}">
        @csrf
        @method('PUT')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center">Foto</div>
                    <div class="form-group text-center">
                        <hr>
                        @if ($data->testi_image != '-')
                            <img src="{{asset('public/central/uploads/'.$data->testi_image)}}" width="100%" height="100%" id="view_image">
                        @else
                            <img src="{{asset('public/central/img/blank_foto_profile.png')}}" id="view_image"width="100%" height="100%"  alt="image">
                        @endif
                        <br>
                        <hr>
                        <input type="file" class="form-control" name="testi_image" id="testi_image" accept="image/png, image/jpeg">
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
                            <input type="text" name="testi_name" value="{{$data->testi_name}}" id="testi_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Profesi</label>
                            <input type="text" name="testi_name" value="{{$data->testi_profesion}}" id="testi_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Testimoni</label>
                            <textarea name="testi_desc" id="testi_desc"  class="form-control" style="height:200px;" cols="30" rows="10">{{$data->testi_desc}}</textarea>  
                          </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a class="btn btn-light" href="{{route('testimonial.index')}}">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
@endsection
@section('content-script')
    <script>
        $('#testi_image').change( function(event) {
            $("#view_image").fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
        });
    </script>
@endsection