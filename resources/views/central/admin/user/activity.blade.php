@extends('central.admin.layout.app')
@section('page','User Activity')
@section('content-app')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="form-group text-center">
                        <label for="foto_profile">Profile</label>
                        <hr>
                        @if ($data_users->foto_profile != '-')
                            <img src="{{asset('public/central/uploads/'.$data_users->foto_profile)}}" class="img-md rounded-circle" width="100%" height="100%" id="view_image">
                        @else
                            <img src="{{asset('public/central/img/blank_foto_profile.png')}}" id="view_image" class="img-md rounded-circle" width="100%" height="100%"  alt="image">
                        @endif
                        <br>
                    </div>
                    <table class="table">
                        <tr>
                            <td><h4>{{$data_users->name}}
                            @switch($data_users->level)
                                @case(0)
                                    <span class="badge badge-primary">Admin</span>
                                    @break
                                @case(1)
                                    <span class="badge badge-success">Users</span>
                                    @break
                            @endswitch
                            </h4>
                            </td>
                        </tr>
                        <tr>
                            <td><p>{{$data_users->bio}}</p></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card card-rounded">
                <div class="card-body card-rounded">
                  <h4 class="card-title  card-title-dash">@yield('page')</h4>
                  <div class="list align-items-center border-bottom py-2">
                    @forelse ($data as $item)
                    
                    <div class="row">
                        <div class="col-md-1 text-center text-muted">
                            <h1>
                                {!!$item->icon!!}
                            </h1>
                        </div>
                        <div class="col-md-11">
                            <div class="wrapper w-100">
                                <p class="mb-2 font-weight-medium">
                                  {{$item->activities}}
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="mdi mdi-calendar text-muted me-1"></i>
                                    <p class="mb-0 text-small text-muted">{{date_format($item->created_at,'D, d M,Y h:i:s')}}</p>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>  
                    @empty
                      <div class="row">
                        <div class="col-md-12 text-center text-muted">Tidak Ada Data</div>
                      </div>
                    @endforelse
                    
                  </div>
                </div>
              </div>
    </div>
</div>
</div>

@endsection