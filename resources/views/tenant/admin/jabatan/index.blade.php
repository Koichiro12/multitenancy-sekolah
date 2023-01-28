@extends('tenant.admin.layout.index')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard / Guru /</span> Jabatan</h4>

        <div class="card mb-4">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h5 class="card-title">Data Jabatan</h5>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('dashboarJabatanCreate') }}" class="btn btn-primary">Tambah</a>
                    </div>
                </div>

            </div>
            <div class="w-100 ">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th class="text-center">Nama Jabatan</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($jabatan as $j)
                            <tr>
                                <td class="text-center"><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $j->id }}</strong>
                                </td class="text-center">
                                <td class="text-center">{{ $j->nama_jabatan }}</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('dashboardJabatanShow', [$j->id]) }}"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="{{ route('dashboardJabatanDel', [$j->id]) }}"><i
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
