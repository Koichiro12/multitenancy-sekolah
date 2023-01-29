@extends('tenant.layout.index')

@section('content')
    <div class="news">
        <div class="news-hero bg-asset" style="background: url({{ 'public/tenant/img/hero_news.jpg' }})">
            <div class="news-hero-bc">
                <a href="{{ route('home') }}">
                    <ion-icon name="home"></ion-icon> Home
                </a>
                <a>/</a>
                <a href="">Artikel</a>
            </div>
            <div class="news-hero-title">Artikel</div>
        </div>

        <div class="news-box">
            <div class="section-title"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 40">
                    <path d="M0 40C137.185 40 125.676 0 240 0s103.999 40 240 40H0Z" fill="#fff"></path>
                </svg>
                <p>berita</p>
            </div>
            @if (session()->has('notfound'))
                <div class="not-found">
                    <div class="not-found-wrapper">
                        <div class="not-found-wrapper-title">{{ session('notfound') }}</div>
                        <div class="not-found-wrapper-desc">Artikel Belum Di tambahkan, Sign in ke admin Untuk
                            Menambahkan
                            data</div>
                        <a href="{{ route('dashboard') }}">
                            <div class="not-found-wrapper-btn">Sign in</div>
                        </a>
                        <img src="{{ 'public/tenant/img/notfound.png' }}" class="not-found-wrapper-img">
                    </div>
                </div>
            @endif
            <div class="news-box-wrapper">
                <div class="news-box-head">
                    <div class="news-box-head-link btn active">Prestasi</div>
                    <div class="news-box-head-link btn">Juara</div>
                    <div class="news-box-head-link btn">Juara</div>
                </div>

                <div class="news-box-container">

                    @foreach ($artikel as $a)
                        <a href="{{ route('detailArtikel', [$a->id]) }}" class="berita-box">
                            <div class="berita-box-btn btn-circle">
                                <ion-icon name="log-in-outline"></ion-icon>
                            </div>
                            <div class="berita-box-img" style="background: url({{ $a->image }})">
                            </div>
                            <div class="berita-box-info">
                                <div class="berita-box-info-title">
                                    <div class="berita-box-info-title-cat">{{ $a->kategori }}</div>
                                    <div class="berita-box-info-title-txt">{{ $a->judul }}</div>
                                </div>
                                <div class="berita-box-info-date">
                                    <div class="berita-box-info-date-1">
                                        <ion-icon name="calendar-outline"></ion-icon>
                                        <p>{{ $a->created_at->format('d F Y') }}</p>
                                    </div>
                                    <div class="berita-box-info-date-2">{{ $a->created_at->format('d F Y') }}</div>

                                </div>

                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- pagination --}}
            <div class="pagination">
                <div class="pagination-wrapper">
                    <div class="pagination-wrapper-btn-prev btn-circle">
                        <ion-icon name="arrow-back"></ion-icon>
                    </div>
                    <div class="pagination-wrapper-btn-info">
                        <div class="pagination-wrapper-btn-info-item btn-circle active">1</div>
                        <div class="pagination-wrapper-btn-info-item btn-circle">2</div>
                        <div class="pagination-wrapper-btn-info-item btn-circle">3</div>
                    </div>
                    <div class="pagination-wrapper-btn-next btn-circle">
                        <ion-icon name="arrow-forward"></ion-icon>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
