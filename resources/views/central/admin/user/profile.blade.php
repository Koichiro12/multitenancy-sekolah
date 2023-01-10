@extends('central.admin.layout.app')
@section('page','User Profiles')
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
<form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{route('update_profile',auth()->user()->id)}}">
    @csrf
    @method('POST')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="form-group text-center">
                        <label for="foto_profile">Foto Profile</label>
                        <hr>
                        @if ($data->foto_profile != '-')
                            <img src="{{asset('public/central/uploads/'.$data->foto_profile)}}" width="100%" height="100%" id="view_image">
                        @else
                            <img src="{{asset('public/central/img/blank_foto_profile.png')}}" id="view_image" class="img-xl rounded-circle" width="100%" height="100%"  alt="image">
                        @endif
                        <br>
                        <hr>
                        <input type="file" class="form-control" name="foto_profile" id="foto_profile" accept="image/png, image/jpeg">
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
                        <label for="username">Name</label>
                        <input type="text" class="form-control" id="username" name="name" value="{{$data->name}}">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{$data->email}}" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="no_hp">No Hp</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{$data->no_hp}}" placeholder="Nomor_Hp">
                      </div>
                      <div class="form-group">
                        <label for="bio">Bio</label>
                        <textarea name="bio" id="bio" class="form-control" style="height:200px;" cols="30" rows="10">{{$data->bio}}</textarea>  
                      </div>
                      <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" style="height:200px;" cols="30" rows="10">{{$data->alamat}}</textarea>  
                      </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary me-2">Update Profile</button>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
@endsection
@section('content-script')
    <script>
        $('#foto_profile').change( function(event) {
            $("#view_image").fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
        });
    </script>
@endsection