@extends('tenant.admin.layout.index')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Article</h4>

        <div class="card mb-4">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h5 class="card-title">Data Article</h5>
                    </div>
                    <div class="col-md-2">
                    <a href="#" class="btn btn-primary">Tambah</a>
                    </div>
                </div>
 
            </div>
            <div class="w-100 ">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection
