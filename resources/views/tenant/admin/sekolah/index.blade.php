@extends('tenant.admin.layout.index')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Sekolah</h4>
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
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link active" href="#"><i class="bx bx-user me-1"></i> Settings</a>
                    </li>
                  </ul>
            </div>
            <div class="col-md-12">
                <form action="#" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('POST')
                <div class="card">
                    <h5 class="card-header">Profile Details</h5>
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                        
                            <img
                            src="{{'public/tenant/admin/assets/img/avatars/2.png'}}"
                            alt="user-avatar"
                            class="d-block rounded img-circle"
                            height="100"
                            width="100"
                            name="view-img"
                            id="view-img"
                          />
                          <div class="button-wrapper">
                            <label for="upload" class="me-2 mb-4" tabindex="0">
                              <span class="d-none d-sm-block">Logo</span>
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

                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                        <a href="#" class="btn btn-danger">Cancel</a>
                      </div>
                </div>
              </form>
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
