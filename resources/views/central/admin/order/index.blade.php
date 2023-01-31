@extends('central.admin.layout.app')
@section('page','Order')
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
                        <p class="card-description"> @yield('page') Here</p>
                        <div class="add-items d-flex mb-0">
                            <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Paket</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @forelse ($data as $item)
                                    <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->nama_paket}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>@switch($item->status_order)
                                            @case(0)
                                                <span class="badge badge-primary">New Order</span>
                                                @break
                                            @case(1)
                                                <span class="badge badge-success">Active</span>
                                                @break
                                            @case(2)
                                                <span class="badge badge-danger">NonActive</span>
                                                @break
                                        @endswitch</td>
                                        <td><form onsubmit="return confirm('Apakah Anda yakin ?')"
                                            action="{{ route('orders.destroy',$item->id_order) }}" method="POST">
                                            <a href="{{ route('orders.edit',$item->id_order) }}" class="btn btn-warning">View</a>
                                          <!--  @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>    -->
                                        </form></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="100%" class="text-center text-mute">Tidak Ada Data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection