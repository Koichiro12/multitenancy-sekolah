@extends('tenant.admin.layout.index')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Users</h4>

        <div class="card mb-4">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h5 class="card-title">Data Users</h5>
                    </div>
                    <div class="col-md-2">
                    <a href="{{route('dashboarUsersCreate')}}" class="btn btn-primary">Tambah</a>
                    </div>
                </div>
 
            </div>
            <div class="w-100 ">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    @foreach ($users as $item)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>******</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('dashboardUsersEdit', [$item->id]) }}"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="{{ route('dashboardUsersDel', [$item->id]) }}"><i
                                                class="bx bx-trash me-1"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
