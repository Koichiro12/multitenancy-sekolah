@extends('tenant.admin.layout.index')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard / <a class="text-muted fw-light"
                    href="{{ route('dashboardArtikel') }}">Artikel /</a> </span> Create Artikel </h4>
        <div class="card mb-4">
            <h5 class="card-header">Tambahkan Artikel</h5>
            <form action="{{ route('dashboardArtikelAdd') }}" method="POST" enctype="multipart/form-data" class="card-body">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Judul Artikel</label>
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
                    <label for="formFile" class="form-label">Gambar Artikel</label>
                    <input name="image" class="form-control  @error('image') border-danger  @enderror" type="file"
                        id="formFile">
                    @error('image')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Artikel</label>
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

    </div>
@endsection
