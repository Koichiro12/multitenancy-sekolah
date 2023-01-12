@extends('central.admin.layout.app')
@section('page','Keunggulan Paket')
@section('content-app')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            @if(session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif 
        @if(session('error'))
            <div class="alert alert-danger text-center">
                {{ session('error') }}
            </div>
        @endif 
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@yield('page')</h4>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-description"> Create And Modify @yield('page') Here</p>
                        <div class="add-items d-flex mb-0">
                            <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                            <a href="{{route('keunggulan_paket.create')}}" class="add btn btn-icons btn-success  text-white me-0 pl-12p"><i class="mdi mdi-plus"></i></a>
                          </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>@if ($item->status == '0')
                                            <span class="badge badge-success">Aktif</span>
                                        @else
                                            <span class="badge badge-success">Tidak Aktif</span>
                                        @endif</td>
                                        <td>
                                            <form onsubmit="return confirm('Apakah Anda yakin ?')"
                                                action="{{ route('keunggulan_paket.destroy',$item->id) }}" method="POST">
                                                <a href="{{ route('keunggulan_paket.edit',$item->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>    
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection