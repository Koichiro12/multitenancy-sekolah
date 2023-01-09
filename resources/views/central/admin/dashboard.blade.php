@extends('central.admin.layout.app')
@section('page','Dashboard')
@section('content-app')

<div class="content-wrapper">
    <div class="row">
        <div class="home-tab">
            <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                  </li>
                </ul>
            </div>
            <div class="tab-content tab-content-basic">
                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                          <div>
                            <p class="statistics-title">Transaksi</p>
                            <h3 class="rate-percentage">0</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                          </div>
                          <div>
                            <p class="statistics-title">Pelanggan</p>
                            <h3 class="rate-percentage">0</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                          </div>
                          <div>
                            <p class="statistics-title">Paket</p>
                            <h3 class="rate-percentage">0</h3>
                          </div>
                          <div>
                            <p class="statistics-title">Berita</p>
                            <h3 class="rate-percentage">0</h3>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Fitur</p>
                            <h3 class="rate-percentage">0</h3>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Users</p>
                            <h3 class="rate-percentage">{{$user->count()}}</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">

                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>

@endsection