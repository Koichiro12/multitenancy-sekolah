@extends('tenant.admin.layout.index')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard / <a class="text-muted fw-light"
                    href="{{ route('dashboardSponsor') }}">Sponsor /</a> </span> Update Sponsor {{ $showSponsor->nama }}
        </h4>
        <div class="card mb-4">
            <h5 class="card-header">Update Sponsor</h5>
            <form action="{{ route('dashboardSponsorUpdate', [$showSponsor->id]) }}" method="POST"
                enctype="multipart/form-data" class="card-body">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Sponsor</label>
                    <input type="text" name="nama" value="{{ $showSponsor->nama }}"
                        class="form-control @error('nama') border-danger  @enderror" id="exampleFormControlInput1">
                    @error('nama')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Gambar Berita</label>
                    <input name="image" class="form-control   @error('image') border-danger  @enderror" type="file"
                        id="formFile">
                    @error('image')
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
