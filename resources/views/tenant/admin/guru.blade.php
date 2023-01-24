@extends('tenant.admin.layout.index')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Guru</h4>
        <div class="card ">
            <h5 class="card-header">Tambahkan Guru</h5>
            <form action="{{ route('dashboardGuruAdd') }}" method="POST" enctype="multipart/form-data" class="card-body">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Judul</label>
                    <input type="text" name="nama" class="form-control @error('nama') border-danger  @enderror"
                        id="exampleFormControlInput1">
                    @error('nama')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Gambar Alumni</label>
                    <input name="image" class="form-control  @error('image') border-danger  @enderror" type="file"
                        id="formFile">
                    @error('image')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control  @error('deskripsi') border-danger  @enderror"
                        id="exampleFormControlTextarea1" rows="3"></textarea>
                    @error('deskripsi')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
        <div class="card mb-4">
            <h5 class="card-header">Table Dark</h5>
            <div class="w-100 ">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($guru as $g)
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $g->id }}</strong>
                                </td>
                                <td>{{ $g->nama }}</td>
                                <td>{{ $g->deskripsi }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $g->id }}">
                                        Gambar Alumni
                                    </button>
                                </td>
                                <div style="z-index: 1000" class="modal fade" id="exampleModal{{ $g->id }}"
                                    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Gambar
                                                    {{ $g->judul }}</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ $g->image }}" class="img-fluid"
                                                    alt="{{ $g->image }}">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('dashboardGuruShow', [$g->id]) }}"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="{{ route('dashboardGuruDel', [$g->id]) }}"><i
                                                    class="bx bx-trash me-1"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>




    </div>
@endsection
