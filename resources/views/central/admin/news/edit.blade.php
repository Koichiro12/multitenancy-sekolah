@extends('central.admin.layout.app')
@section('page','Edit News')
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
<form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{route('news.update',$data->id)}}">
        @csrf
        @method('PUT')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center">Foto</div>
                    <div class="form-group text-center">
                        <hr>
                        @if ($data->news_image != '-')
                            <img src="{{asset('public/central/uploads/'.$data->news_image)}}" width="100%" height="100%" id="view_image">
                        @else
                            <img src="{{asset('public/central/img/blank_foto_profile.png')}}" id="view_image" width="100%" height="100%"  alt="image">
                        @endif
                        <br>
                        <hr>
                        <input type="file" class="form-control" name="news_image" id="news_image" accept="image/png, image/jpeg">
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
                        <input type="hidden" name="news_uploader" id="news_uploader" value="{{auth()->user()->name}}">
                            <label>Judul</label>
                            <input type="text" name="news_name" id="news_name" value="{{$data->news_name}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="news_desc" id="news_desc" class="form-control" style="height:200px;" cols="30" rows="10">{{$data->news_desc}}</textarea>  
                          </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a class="btn btn-light" href="{{route('news.index')}}">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
@endsection
@section('content-script')
    <script>
        $('#news_image').change( function(event) {
            $("#view_image").fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
        });
    </script>
@endsection