@extends('central.layout.app')
@section('page','Paket')
@section('content-hero')
    
<div class="container-xxl bg-success hero-header">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-12 text-center text-lg-start" style="height: 250px;">
                <h1 class="text-white text-center mb-4 animated slideInDown">@yield('page')</h1>
                <p class="text-white text-center pb-3 animated slideInDown">Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd dolor sed magna dolor.</p>
                <!--
                <div class="position-relative w-100 mt-3">
                    <button type="button" class="btn btn-light rounded-pill py-2 px-3 shadow-none position-absolute top-0  m-2">Demo</button>
                </div>
            -->
            </div>
            <!--
            <div class="col-lg-6 text-center text-lg-start">
                <img class="img-fluid rounded animated zoomIn" src="{{asset('public/central/img/hero.jpg')}}" alt="">
            </div>
        -->
        </div>
    </div>
</div>
@endsection
@section('content-app')
        <!-- Pricing Start -->
        <div class="container-xxl py-6" id="pricing">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Paket Harga</h1>
                    <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p>
                </div>
                <div class="row g-4">
                    @foreach ($data as $item)
                        @if ($loop->index + 1 != $nilai_tengah)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="price-item rounded overflow-hidden">
                                <div class="bg-dark p-4">
                                    <h4 class="text-white mt-2">{{$item->nama_paket}}</h4>
                                    <div class="text-white">
                                        <span class="align-top fs-4 fw-bold">Rp</span>
                                        <h1 class="d-inline display-6 text-success mb-0">{{number_format($item->harga_paket)}}</h1>
                                        <span class="align-baseline">/ {{$item->per_harga_paket}}</span>
                                    </div>
                                </div>
                                <div class="p-4">
                                    @foreach ($keunggulan as $k)
                                    @php
                                        $cek = false;
                                        foreach($list_keunggulan as $lk){
                                            if($lk->kode_paket == $item->id && $lk->kode_keunggulan == $k->id){
                                                $cek = true;
                                                break;
                                            }
                                        }
                                    @endphp
                                            <div class="d-flex justify-content-between mb-3">
                                                <span>{{$k->name}}</span>
                                                @if ($cek)
                                                    <i class="fa fa-check text-success pt-1"></i>
                                                @else
                                                    <i class="fa fa-times text-danger pt-1"></i>
                                                @endif
                                                
                                            </div>
                                    @endforeach
                                    <a href="<?= url('order') ?>" class="btn btn-dark rounded-pill py-2 px-4 mt-3">Get Started</a>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="price-item rounded overflow-hidden">
                                <div class="bg-success p-4">
                                    <h4 class="text-white mt-2">{{$item->nama_paket}}</h4>
                                    <div class="text-white">
                                        <span class="align-top fs-4 fw-bold">Rp</span>
                                        <h1 class="d-inline display-6 text-dark mb-0">{{number_format($item->harga_paket)}}</h1>
                                        <span class="align-baseline">/ {{$item->per_harga_paket}}</span>
                                    </div>
                                </div>
                                <div class="p-4">
                                    @foreach ($keunggulan as $k)
                                    @php
                                        $cek = false;
                                        foreach($list_keunggulan as $lk){
                                            if($lk->kode_paket == $item->id && $lk->kode_keunggulan == $k->id){
                                                $cek = true;
                                                break;
                                            }
                                        }
                                    @endphp
                                            <div class="d-flex justify-content-between mb-3">
                                                <span>{{$k->name}}</span>
                                                @if ($cek)
                                                    <i class="fa fa-check text-success pt-1"></i>
                                                @else
                                                    <i class="fa fa-times text-danger pt-1"></i>
                                                @endif
                                                
                                            </div>
                                    @endforeach
                                    <a href="<?= url('order') ?>" class="btn btn-success rounded-pill py-2 px-4 mt-3">Get Started</a>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                    
                </div>
            </div>
        </div>
        <!-- Pricing End -->
@endsection