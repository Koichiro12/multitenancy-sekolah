@extends('tenant.layout.index')
@section('content')
    <div class="detail-news">
        <div class="detail-news-hero">
            <div class="detail-news-hero-bc">
                <a href="{{ route('home') }}">Home</a>
                <p>-</p>
                <a href="{{ route('news') }}">berita</a>
                <p>-</p>
                <a href="">detail berita</a>
            </div>
            <div class="detail-news-hero-info">
                <div class="detail-news-hero-info-cat ">{{ $detailBerita->kategori }}</div>
                <div class="detail-news-hero-info-title">{{ $detailBerita->judul }}</div>
                <div class="detail-news-hero-info-desc">by muhammad rifaldi</div>
                <div class="detail-news-hero-info-date">
                    <p>published</p>
                    <p>{{ $detailBerita->created_at->format('d F Y') }}</p>
                </div>

            </div>

        </div>
        <div class="detail-news-content">
            <div class="detail-news-content-img bg-asset " style="background: url({{ $detailBerita->image }})">
                <div class="detail-news-content-img-src"></div>

            </div>
            <div class="detail-news-content-text">
                <p>{{ $detailBerita->deskripsi }} </p>
                <p>{{ $detailBerita->deskripsi }} </p>
            </div>

        </div>
    </div>
@endsection
