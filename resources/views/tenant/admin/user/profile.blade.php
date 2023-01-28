@extends('tenant.admin.layout.index')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> User Profile</h4>
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link active" href="{{route('userProfile')}}"><i class="bx bx-user me-1"></i> Account</a>
                    </li>
                  </ul>
            </div>
            <div class="col-md-12">
                <form action="{{route('updateProfile',$id)}}"></form>
                <div class="card">
                    <h5 class="card-header">Profile Details</h5>
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            @if ($data->foto_profile != '-')
                            <img
                            src="{{'public/tenant/upload_file/user/'.$data->foto_profile}}"
                            alt="user-avatar"
                            class="d-block rounded img-circle"
                            height="100"
                            width="100"
                            name="view-img"
                            id="view-img"
                          />
                            @else
                            <img
                            src="{{'public/tenant/admin/assets/img/avatars/2.png'}}"
                            alt="user-avatar"
                            class="d-block rounded img-circle"
                            height="100"
                            width="100"
                            name="view-img"
                            id="view-img"
                          />
                            @endif
                          <div class="button-wrapper">
                            <label for="upload" class="me-2 mb-4" tabindex="0">
                              <span class="d-none d-sm-block">Upload New Photo</span>
                              <i class=" d-block d-sm-none"></i>
                              <input
                                type="file"
                                id="foto_profile"
                                name="foto_profile"
                                class="form-control"
                                accept="image/png, image/jpeg"
                              />
                            </label>
                            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                          </div>
                        </div>
                      </div>
                      <hr class="my-0" />
                      <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{$data->name}}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" id="email" class="form-control" value="{{$data->email}}">
                            </div>
                            <div class="form-group">
                                <label>Bio</label>
                                <textarea name="bio" id="bio" class="form-control" cols="30" rows="10">{{$data->bio}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="10">{{$data->alamat}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>No Hp</label>
                                <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{$data->no_hp}}">
                            </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary me-2">Update Profile</button>
                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content-script')
    <script>
        $('#foto_profile').change( function(event) {
            $("#view-img").fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
        });

    </script>
@endsection
