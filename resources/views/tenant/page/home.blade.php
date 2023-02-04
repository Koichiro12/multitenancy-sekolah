@extends('tenant.layout.index')

@section('content')
    <div class="home">
        <div class="home__hero bg-asset"
            style="background: url({{ 'public/tenant/upload_file/sekolah/' . $dataSetting[7]['value'] }})">
            <div class="blur"></div>
            <div class="home__hero-info">
                <div class="home__hero-info-title">
                    <p>{{ $dataSetting[0]['value'] }}<span> </span> </p>
                    <p>{{ $dataSetting[1]['value'] }}</p>
                </div>

            </div>
        </div>
        <div class="home__mitra">
            <div class="section-title"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 40">
                    <path d="M0 40C137.185 40 125.676 0 240 0s103.999 40 240 40H0Z" fill="#fff"></path>
                </svg>
                <p>sponsor ship</p>
            </div>
            <div class="home__mitra--wrapper">
                @foreach ($sponsor as $s)
                    <div class="home__mitra--wrapper__box">
                        <img src="{{ $s->image }}" alt={{ $s->image }} />
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <div class="home__video">
        <div class="home__video-wrapper bg-asset"
            style="background: url({{ 'public/tenant/upload_file/sekolah/' . $dataSetting[8]['value'] }})">
            <div class="home__video-wrapper-info">
                <div class="home__video-wrapper-info-img bg-asset"
                    style="background: url({{ 'public/tenant/upload_file/sekolah/' . $dataSetting[8]['value'] }})">
                </div>
                <div class="home__video-wrapper-info-title">sambutan</div>
                <div class="home__video-wrapper-info-btn btn-show-video-player">
                    <ion-icon name="play-outline"></ion-icon>
                    <p class="home__video-wrapper-info-btn-txt">putar video</p>
                </div>
            </div>
            <div class="blur"></div>

        </div>
    </div>


    <div class="home__fas">
        <div class="home__fas-wrapper">
            <div class="home__fas-wrapper-head">
                <div class="home__fas-wrapper-head-title">fasilitas mts nu </div>
                <div class="home__fas-wrapper-head-paginate">
                    <div class="button-prev btn-circle">
                        <ion-icon name="arrow-back-outline"></ion-icon>
                    </div>
                    <div class="button-next btn-circle">
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </div>
                </div>

            </div>
            <div class="home__fas-wrapper-content">

                <div class="swiper SwiperHome">
                    <div class="swiper-wrapper">

                        @foreach ($fasilitas as $f)
                            <div class="swiper-slide">
                                <div class="berita-box">
                                    <div class="berita-box-img bg-asset" style="background: url({{ $f->image }})">
                                    </div>
                                    <div class="berita-box-info">
                                        <div class="berita-box-info-cat">
                                            <div class="berita-box-info-cat-item btn">ruang</div>
                                            <div class="berita-box-info-cat-item btn">kegiatan</div>
                                        </div>
                                        <div class="berita-box-info-title">
                                            <div class="berita-box-info-title-txt">{{ $f->nama }}</div>
                                            <div class="berita-box-info-title-desc">{{ $f->deskripsi }}
                                            </div>
                                        </div>
                                        <div class="berita-box-info-date">
                                            <div class="berita-box-info-date-1">
                                                <ion-icon name="calendar-outline"></ion-icon>
                                                <p>{{ $f->created_at->format('d F Y') }}</p>
                                            </div>
                                            <div class="berita-box-info-date-2">{{ $f->created_at->format('d F Y') }}
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </div>
    </div>
    <div class="home__berita">
        <div class="section-title"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 40">
                <path d="M0 40C137.185 40 125.676 0 240 0s103.999 40 240 40H0Z" fill="#fff"></path>
            </svg>
            <p>berita</p>
        </div>
        <div class="home__berita-wrapper">
            <div class="home__berita-head">
                <div class="home__berita-head-link btn active">Prestasi</div>
                <div class="home__berita-head-link btn">Juara</div>
                <div class="home__berita-head-link btn">Juara</div>
            </div>

            <div class="home__berita-container">
                @foreach ($berita as $b)
                    <a href="{{ route('detailBerita', [$b->id]) }}" class="berita-box">
                        <div class="berita-box-btn btn-circle">
                            <ion-icon name="log-in-outline"></ion-icon>
                        </div>
                        <div class="berita-box-img" style="background: url({{ $b->image }})"></div>
                        <div class="berita-box-info">
                            <div class="berita-box-info-title">
                                <div class="berita-box-info-title-cat">{{ $b->kategori }}</div>
                                <div class="berita-box-info-title-txt">{{ $b->judul }}</div>
                            </div>
                            <div class="berita-box-info-date">
                                <div class="berita-box-info-date-1">
                                    <ion-icon name="calendar-outline"></ion-icon>
                                    <p>{{ $b->created_at->format('d F Y') }}</p>
                                </div>
                                <div class="berita-box-info-date-2">{{ $b->created_at->format('d F Y') }}</div>

                            </div>

                        </div>
                    </a>
                @endforeach

            </div>
        </div>
    </div>

    <div class="video-player">
        <div class="video-player-wrapper">
            <video autoplay loop muted src="{{ 'public/tenant/upload_file/sekolah/' . $dataSetting[9]['value'] }}"></video>
        </div>
        <div class="video-player-close btn-circle btn-hide-video-player">
            &#10005;
        </div>
    </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        var swiper = new Swiper(".SwiperHome", {
            slidesPerView: 1,
            spaceBetween: 30,
            navigation: {
                nextEl: ".button-next",
                prevEl: ".button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 1,
                    spaceBetween: 30,
                },
                900: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                }
            }
        });
        $('.btn-show-video-player').on("click", function() {
            $('.video-player').addClass('show')

        })

        $('.btn-hide-video-player').on("click", function() {
            $('.video-player').removeClass('show')
        })
    </script>
@endsection
