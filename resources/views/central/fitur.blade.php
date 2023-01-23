@extends('central.layout.app')
@section('page','Fitur')
@section('content-hero')
    
<div class="container-xxl bg-success hero-header">
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
 <!-- Advanced Feature Start -->
 <div class="container-xxl py-6" id="features">
    <div class="container">
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Semua Fitur Unggulan</h1>
            <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p>
        </div>
        <div class="row g-4">
            @foreach ($data as $item)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="advanced-feature-item text-center rounded py-5 px-4">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('public/central/uploads/'.$item['icon'])}}" style="width: 65px; height: 65px;">
                    <h5 class="mb-3">{{$item['feature_name']}}</h5>
                    <p class="m-0">{{$item['feature_desc']}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Advanced Feature End -->

@endsection