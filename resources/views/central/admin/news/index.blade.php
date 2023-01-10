@extends('central.admin.layout.app')
@section('page','News')
@section('content-app')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@yield('page')</h4>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-description"> Create And Modify @yield('page') Here</p>
                        <div class="add-items d-flex mb-0">
                            <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                            <a href="{{route('news.create')}}" class="add btn btn-icons btn-success  text-white me-0 pl-12p"><i class="mdi mdi-plus"></i></a>
                          </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th>Tanggal Upload</th>
                                <th>Judul</th>
                                <th>Pengupload</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @forelse ($data as $item)
                                    <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>{{$item->news_name}}</td>
                                        <td>{{$item->news_uploader}}</td>
                                        <td>
                                            <form onsubmit="return confirm('Apakah Anda yakin ?')"
                                                action="{{ route('news.destroy',$item->id) }}" method="POST">
                                                <a href="{{ route('news.edit',$item->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>    
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                <tr>
                                    <td colspan="100%" class="text-muted text-center">Tidak Ada Data</td>
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