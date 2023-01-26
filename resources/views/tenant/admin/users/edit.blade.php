@extends('tenant.admin.layout.index')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span>Edit Users</h4>
        <div class="card mb-4">
            <h5 class="card-header">Edit Users</h5>
            <form action="{{ route('dashboardUsersUpdate',$users->id) }}" method="POST" enctype="multipart/form-data" class="card-body">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Username</label>
                    <input type="text" name="name" value="{{$users->name}}" class="form-control @error('name') border-danger  @enderror"
                        id="exampleFormControlInput1" required>
                    @error('name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="mail" name="email" value="{{$users->email}}" class="form-control  @error('email') border-danger @enderror"
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
                        id="exampleFormControlInput1">
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
                        <option value="0" @if ($users->level == 0)
                            {{'selected'}}
                        @endif >Administrator</option>
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
