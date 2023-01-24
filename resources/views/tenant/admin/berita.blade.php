@extends('tenant.admin.layout.index')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Berita</h4>
        <div class="card mb-4">
            <h5 class="card-header">Tambahkan Berita</h5>
            <form action="{{ route('dashboardBeritaAdd') }}" method="POST" enctype="multipart/form-data" class="card-body">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Judul Berita</label>
                    <input type="text" name="judul" class="form-control @error('judul') border-danger  @enderror"
                        id="exampleFormControlInput1">
                    @error('judul')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kata Kunci</label>
                    <input type="text" name="keyword" class="form-control  @error('keyword') border-danger @enderror"
                        id="exampleFormControlInput1">
                    @error('keyword')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Gambar Berita</label>
                    <input name="image" class="form-control  @error('image') border-danger  @enderror" type="file"
                        id="formFile">
                    @error('image')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Berita</label>
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
                            <th>Judul Berita</th>
                            <th>Kata Kunci</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($berita as $b)
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $b->id }}</strong>
                                </td>
                                <td>{{ $b->judul }}</td>
                                <td>
                                    {{ $b->keyword }}
                                </td>
                                <td>{{ $b->deskripsi }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $b->id }}">
                                        Gambar Berita
                                    </button>
                                </td>
                                <div class="modal fade" id="exampleModal{{ $b->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Gambar
                                                    {{ $b->judul }}</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ $b->image }}" class="img-fluid"
                                                    alt="{{ $b->image }}">
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
                                            <a class="dropdown-item" href="{{ route('dashboardBeritaShow', [$b->id]) }}"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="{{ route('dashboardBeritaDel', [$b->id]) }}"><i
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
