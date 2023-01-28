@extends('tenant.admin.layout.index')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard / Guru / Jabatan </span>Create Jabatan</h4>
        <div class="card mb-4">
            <h5 class="card-header">Tambahkan Jabatan</h5>
            <form action="{{ route('dashboardJabatanAdd') }}" method="POST" enctype="multipart/form-data" class="card-body">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Jabatan</label>
                    <input type="text" name="nama" class="form-control @error('nama') border-danger  @enderror"
                        id="exampleFormControlInput1">
                    @error('nama')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>

    </div>
@endsection
