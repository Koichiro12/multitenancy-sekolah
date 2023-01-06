@extends('central.layout.app')
@section('page','Berita')
@section('content-hero')
    
<div class="container-xxl bg-success hero-header" style="margin-bottom: 0%;">
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
                <img class="img-fluid rounded animated zoomIn" src="{{asset('public/img/hero.jpg')}}" alt="">
            </div>
        -->
        </div>
    </div>
</div>
@endsection
@section('content-app')
 <!-- About Start -->
 <div class="container-xxl py-6" id="about">
    <div class="container">
        <div class="row g-5 flex-column-reverse flex-lg-row">
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-2">Berita Terkini</h1>
                <a href="#" class="d-flex mb-0">
                    <div class="flex-shrink-0 btn-square rounded-circle bg-success text-white">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="ms-4">
                        <h6>Awesome Web Application ?</h6>
                        <p class="text-muted">1 Jan 2023</p>
                    </div>
                </a>
                <a href="#" class="d-flex mb-0">
                    <div class="flex-shrink-0 btn-square rounded-circle bg-success text-white">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="ms-4">
                        <h6>What Brand for Develop Web Applications ?</h6>
                        <p class="text-muted">1 Des 2023</p>
                    </div>
                </a>
                <a href="#" class="d-flex mb-0">
                    <div class="flex-shrink-0 btn-square rounded-circle bg-success text-white">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="ms-4">
                        <h6>Web Application ?</h6>
                        <p class="text-muted">3 March 2021</p>
                    </div>
                </a>
                <a href="#" class="d-flex mb-0">
                    <div class="flex-shrink-0 btn-square rounded-circle bg-success text-white">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="ms-4">
                        <h6>Why Use Web App ?</h6>
                        <p class="text-muted">23 Feb 2023</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 wow animated zoomIn">
               <div class="d-flex mb-2">
                <div class="ms-4">
                    <h1>Why Use Web App ?</h1>
                    <p class="text-muted">Jhon Doe / 23 Feb 2023</p>
                    <p class="text-muted">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                        Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                        Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                        Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                        Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                    </p>
                    <p class="text-muted">
                        Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                        Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                        Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                        Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                    </p>
                </div>
               </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
@endsection