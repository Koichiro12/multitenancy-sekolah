@extends('central.admin.layout.app')
@section('page','Edut User')
@section('content-app')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            @if(session('error'))
                <div class="alert alert-danger text-center">
                    {{ session('error') }}
                </div>
            @endif 
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@yield('page')</h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-description">@yield('page') Here</p>
                    </div>
                    <form class="forms-sample" method="POST" action="{{route('users.update',$data->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label for="username">Username</label>
                          <input type="text" class="form-control" value="{{$data->name}}" id="username" name="name" placeholder="Username">
                        </div>
                        <div class="form-group">
                          <label for="email">Email address</label>
                          <input type="email" class="form-control" id="email" value="{{$data->email}}" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="level">Role</label>
                            <select class="form-control" id="level" name="level" required>
                                <option value="">-- Pilih Role --</option>
                                <option value="0" @if ($data->level == '0')
                                    {{'selected'}}
                                @endif>Administrator</option>
                                <option value="1" @if ($data->level == '1')
                                    {{'selected'}}
                                @endif>Users</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a class="btn btn-light" href="{{route('users.index')}}">Cancel</a>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection