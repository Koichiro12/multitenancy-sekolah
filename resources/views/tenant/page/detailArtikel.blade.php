@extends('tenant.layout.index')
@section('content')
    <div class="detail-news">
        <div class="detail-news-hero">
            <div class="detail-news-hero-bc">
                <a href="{{ route('home') }}">Home</a>
                <p>-</p>
                <a href="{{ route('artikel') }}">artikel</a>
                <p>-</p>
                <a href="">detail artikel</a>
            </div>
            <div class="detail-news-hero-info">
                <div class="detail-news-hero-info-cat ">{{ $detailArtikel->kategori }}</div>
                <div class="detail-news-hero-info-title">{{ $detailArtikel->judul }}</div>
                <div class="detail-news-hero-info-desc">by muhammad rifaldi</div>
                <div class="detail-news-hero-info-date">
                    <p>published</p>
                    <p>{{ $detailArtikel->created_at->format('d F Y') }}</p>
                </div>

            </div>

        </div>
        <div class="detail-news-content">
            <div class="detail-news-content-img bg-asset " style="background: url({{ $detailArtikel->image }})">
                <div class="detail-news-content-img-src"></div>

            </div>
            <div class="detail-news-content-text">
                <p>{{ $detailArtikel->deskripsi }} </p>
                <p>{{ $detailArtikel->deskripsi }} </p>
            </div>

        </div>
    </div>
@endsection
