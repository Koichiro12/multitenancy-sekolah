@extends('tenant.layout.index')
<div class="gallery">
    <div class="gallery-hero ">
        <div class="gallery-hero-bc">
            <a href="{{ route('home') }}">
                <ion-icon name="home"></ion-icon> Home
            </a>
            <a>/</a>
            <a href="">gallery</a>
        </div>
        <div class="gallery-hero-title">gallery</div>
    </div>


    <div class="gallery-container">
        <div class="section-title"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 40">
                <path d="M0 40C137.185 40 125.676 0 240 0s103.999 40 240 40H0Z" fill="#fff"></path>
            </svg>
            <p>gallery</p>
        </div>

        @if (session()->has('notfound'))
            <div class="not-found">
                <div class="not-found-wrapper">
                    <div class="not-found-wrapper-title">{{ session('notfound') }}</div>
                    <div class="not-found-wrapper-desc">Gallery Belum Di tambahkan, Sign in ke admin Untuk Menambahkan
                        data</div>
                    <a href="{{ route('dashboard') }}">
                        <div class="not-found-wrapper-btn">Sign in</div>
                    </a>
                    <img src="{{ 'public/tenant/img/notfound.png' }}" class="not-found-wrapper-img">
                </div>
            </div>
        @endif

        @foreach ($gallery as $g)
            <div class="gallery-card">
                <div class="gallery-card-top">
                    <div class="gallery-card-top-img bg-asset" style="background: url('{{ $g->image }}')">
                    </div>
                    <div class="gallery-card-top-info">
                        <div class="gallery-card-top-info-item">1th</div>
                        <div class="gallery-card-top-info-item">pns</div>
                    </div>
                </div>
                <div class="gallery-card-bot">
                    <div class="gallery-card-bot-name">{{ $g->nama }}</div>
                    <div class="gallery-card-bot-desc">{{ $g->deskripsi }}</div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@section('content')
@endsection
