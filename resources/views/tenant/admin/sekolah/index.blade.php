@extends('tenant.admin.layout.index')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Sekolah</h4>
        <div class="row">
            <div class="col-md-12">
                @if (session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
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
                <form action="{{ route('update-sekolah') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="card">
                        <h5 class="card-header">Profile Details</h5>
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                @if ($data[6]['value'] != '-')
                                    <img src="{{ 'public/tenant/upload_file/sekolah/' . $data[6]['value'] }}"
                                        alt="user-avatar" class="d-block rounded img-circle" height="100" width="100"
                                        name="view-img" id="view-img" />
                                @else
                                    <img src="{{ 'public/tenant/admin/assets/img/avatars/2.png' }}" alt="user-avatar"
                                        class="d-block rounded img-circle" height="100" width="100" name="view-img"
                                        id="view-img" />
                                @endif

                                <div class="button-wrapper">
                                    <label for="upload" class="me-2 mb-4" tabindex="0">
                                        <span class="d-none d-sm-block">Logo</span>
                                        <i class=" d-block d-sm-none"></i>
                                        <input type="file" id="logo_sekolah" name="logo_sekolah" class="form-control"
                                            accept="image/png, image/jpeg" />
                                    </label>
                                    <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                </div>
                            </div>
                        </div>
                        {{-- <h5 class="card-header">Gambar Sekolah</h5>
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                @if ($data[7]['value'] != '-')
                                    <img src="{{ 'public/tenant/upload_file/sekolah/' . $data[7]['value'] }}"
                                        alt="user-avatar" class="d-block rounded img-circle" height="100" width="100"
                                        name="view-img1" id="view-img1" />
                                @else
                                    <img src="{{ 'public/tenant/admin/assets/img/avatars/2.png' }}" alt="user-avatar"
                                        class="d-block rounded img-circle" height="100" width="100" name="view-img1"
                                        id="view-img1" />
                                @endif

                                <div class="button-wrapper">
                                    <label for="upload" class="me-2 mb-4" tabindex="0">
                                        <span class="d-none d-sm-block">Gambar sekolah</span>
                                        <i class=" d-block d-sm-none"></i>
                                        <input type="file" id="gambar_sekolah" name="gambar_sekolah" class="form-control"
                                            accept="image/png, image/jpeg" />
                                    </label>
                                    <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                </div>
                            </div>
                        </div> --}}
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Sekolah</label>
                                <input type="text" name="nama_sekolah"
                                    value="{{ $data[0]['value'] != '-' ? $data[0]['value'] : $data[0]['default'] }}"
                                    id="nama_sekolah" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" name="slug" id="slug"
                                    value="{{ $data[1]['value'] != '-' ? $data[1]['value'] : $data[1]['default'] }}"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tentang</label>
                                <textarea name="tentang_sekolah" id="tentang_sekolah" class="form-control" cols="30" rows="10">{{ $data[2]['value'] != '-' ? $data[2]['value'] : $data[2]['default'] }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat_sekolah" id="alamat_sekolah" class="form-control" cols="30" rows="10">{{ $data[3]['value'] != '-' ? $data[3]['value'] : $data[3]['default'] }}</textarea>
                            </div>
                            <div class="from-group">
                                <label>No Hp</label>
                                <input type="text" name="no_hp" id="no_hp" class="form-control"
                                    value="{{ $data[4]['value'] != '-' ? $data[4]['value'] : $data[4]['default'] }}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    value="{{ $data[5]['value'] != '-' ? $data[5]['value'] : $data[5]['default'] }}">
                            </div>

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
        $('#logo_sekolah').change(function(event) {
            $("#view-img").fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
        });
    </script>
@endsection
