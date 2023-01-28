@extends('tenant.admin.layout.index')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span>Create Users</h4>
        <div class="card mb-4">
            <h5 class="card-header">Tambahkan Users</h5>
            <form action="{{ route('dashboardUsersAdd') }}" method="POST" enctype="multipart/form-data" class="card-body">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Username</label>
                    <input type="text" name="name" class="form-control @error('name') border-danger  @enderror"
                        id="exampleFormControlInput1" required>
                    @error('name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="mail" name="email" class="form-control  @error('email') border-danger @enderror"
                        id="exampleFormControlInput1" required>
                    @error('email')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control  @error('password') border-danger @enderror"
                        id="exampleFormControlInput1" required>
                    @error('password')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Level</label>
                    <select name="level" id="level" class="form-control @error('level') border-danger @enderror" required>
                        <option value="">-- Pilih Level</option>
                        <option value="0">Administrator</option>
                    </select>
                    @error('level')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
                <a href="{{route('dashboardUsers')}}" class="btn btn-danger">Cancel</a>
            </form>
        </div>

    </div>
@endsection
