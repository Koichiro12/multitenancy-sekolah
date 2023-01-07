@extends('central.layout.app')
@section('page','Tentang Kami')
@section('content-hero')
    
<div class="container-xxl bg-success hero-header" style="margin-bottom:0%;">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-12 text-center text-lg-start" style="height: 300px;">
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
<!-- Feature Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Kenapa Harus Kami ?</h1>
            <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="feature-item bg-light rounded text-center p-5">
                    <i class="fa fa-4x fa-edit text-success mb-4"></i>
                    <h5 class="mb-3">Installasi Mudah</h5>
                    <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="feature-item bg-light rounded text-center p-5">
                    <i class="fa fa-4x fa-sync text-success mb-4"></i>
                    <h5 class="mb-3">24 / 7 Hours Support</h5>
                    <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="feature-item bg-light rounded text-center p-5">
                    <i class="fa fa-4x fa-draw-polygon text-success mb-4"></i>
                    <h5 class="mb-3">Murah Meriah</h5>
                    <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->
<!-- Feature Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Tentang kami</h1>
            <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="ms-4">
                    <p class="text-muted">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.
                        Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                        Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                        Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                        Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                    </p>
                    <p class="text-muted">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.
                        Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                        Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->

@endsection