@extends('tenant.layout.index')

@section('content')
    <div class="home">
        <div class="home__hero bg-asset" style="background: url({{ 'public/tenant/img/heroPakis.jpg' }})">
            <div class="blur"></div>
            <div class="home__hero-info">
                <div class="home__hero-info-title">
                    <p>Madrasah <span> Tsanawiyah </span> nu pakis </p>
                    <p>islami cerdas berprestasi</p>
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
                <div class="home__mitra--wrapper__box">
                    <img src="{{ 'public/tenant/img/brand/logoPgri.png' }}" alt="" />
                </div>
                <div class="home__mitra--wrapper__box">
                    <img src="{{ 'public/tenant/img/brand/logoNu.png' }}" alt="" />
                </div>

                <div class="home__mitra--wrapper__box">
                    <img src="{{ 'public/tenant/img/brand/logoPgri.png' }}" alt="" />
                </div>
                <div class="home__mitra--wrapper__box">
                    <img src="{{ 'public/tenant/img/brand/logoNu.png' }}" alt="" />
                </div>

                <div class="home__mitra--wrapper__box">
                    <img src="{{ 'public/tenant/img/brand/logoPgri.png' }}" alt="" />
                </div>
                <div class="home__mitra--wrapper__box">
                    <img src="{{ 'public/tenant/img/brand/logoNu.png' }}" alt="" />
                </div>

            </div>
        </div>
        <div class="home__video">
            <div class="home__video-wrapper bg-asset" style="background: url({{ 'public/tenant/img/pakis2.jpg' }})">
                <div class="home__video-wrapper-info">
                    <div class="home__video-wrapper-info-img bg-asset"
                        style="background: url({{ 'public/tenant/img/pakis2.jpg' }})">
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
                            <div class="swiper-slide">
                                <div class="berita-box">
                                    <div class="berita-box-img bg-asset"
                                        style="background: url({{ 'public/tenant/img/fasilitas/aula.jpg' }})"></div>
                                    <div class="berita-box-info">
                                        <div class="berita-box-info-cat">
                                            <div class="berita-box-info-cat-item btn">ruang</div>
                                            <div class="berita-box-info-cat-item btn">kegiatan</div>
                                        </div>
                                        <div class="berita-box-info-title">
                                            <div class="berita-box-info-title-txt">aula mts nu pakis</div>
                                            <div class="berita-box-info-title-desc">Lorem, ipsum dolor sit amet consectetur
                                                adipisicing elit. Eos distinctio et commodi perferendis officiis quisquam
                                                doloremque provident ex numquam itaque? Porro dolores soluta et possimus?
                                            </div>
                                        </div>
                                        <div class="berita-box-info-date">
                                            <div class="berita-box-info-date-1">
                                                <ion-icon name="calendar-outline"></ion-icon>
                                                <p>1, jannuary 2023</p>
                                            </div>
                                            <div class="berita-box-info-date-2">1, jannuary 2023</div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="berita-box">
                                    <div class="berita-box-img bg-asset"
                                        style="background: url({{ 'public/tenant/img/fasilitas/labcom.jpg' }})"></div>
                                    <div class="berita-box-info">

                                        <div class="berita-box-info-cat">
                                            <div class="berita-box-info-cat-item btn">tecnology</div>
                                            <div class="berita-box-info-cat-item btn">ruang</div>
                                        </div>
                                        <div class="berita-box-info-title">
                                            <div class="berita-box-info-title-txt">lab computer</div>
                                            <div class="berita-box-info-title-desc">Lorem, ipsum dolor sit amet consectetur
                                                adipisicing elit. Eos distinctio et commodi perferendis officiis quisquam
                                                doloremque provident ex numquam itaque? Porro dolores soluta et possimus?
                                            </div>
                                        </div>
                                        <div class="berita-box-info-date">
                                            <div class="berita-box-info-date-1">
                                                <ion-icon name="calendar-outline"></ion-icon>
                                                <p>1, jannuary 2023</p>
                                            </div>
                                            <div class="berita-box-info-date-2">1, jannuary 2023</div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="berita-box">
                                    <div class="berita-box-img bg-asset"
                                        style="background: url({{ 'public/tenant/img/fasilitas/perpus.jpg' }})"></div>
                                    <div class="berita-box-info">

                                        <div class="berita-box-info-cat">
                                            <div class="berita-box-info-cat-item btn">tecnology</div>
                                            <div class="berita-box-info-cat-item btn">food</div>
                                        </div>
                                        <div class="berita-box-info-title">
                                            <div class="berita-box-info-title-txt">perpustakaan</div>
                                            <div class="berita-box-info-title-desc">Lorem, ipsum dolor sit amet consectetur
                                                adipisicing elit. Eos distinctio et commodi perferendis officiis quisquam
                                                doloremque provident ex numquam itaque? Porro dolores soluta et possimus?
                                            </div>
                                        </div>
                                        <div class="berita-box-info-date">
                                            <div class="berita-box-info-date-1">
                                                <ion-icon name="calendar-outline"></ion-icon>
                                                <p>1, jannuary 2023</p>
                                            </div>
                                            <div class="berita-box-info-date-2">1, jannuary 2023</div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="berita-box">
                                    <div class="berita-box-img bg-asset"
                                        style="background: url({{ 'public/tenant/img/fasilitas/ruangkelas.jpg' }})"></div>
                                    <div class="berita-box-info">

                                        <div class="berita-box-info-cat">
                                            <div class="berita-box-info-cat-item btn">tecnology</div>
                                            <div class="berita-box-info-cat-item btn">food</div>
                                        </div>
                                        <div class="berita-box-info-title">
                                            <div class="berita-box-info-title-txt">ruang kelas</div>
                                            <div class="berita-box-info-title-desc">Lorem, ipsum dolor sit amet consectetur
                                                adipisicing elit. Eos distinctio et commodi perferendis officiis quisquam
                                                doloremque provident ex numquam itaque? Porro dolores soluta et possimus?
                                            </div>
                                        </div>
                                        <div class="berita-box-info-date">
                                            <div class="berita-box-info-date-1">
                                                <ion-icon name="calendar-outline"></ion-icon>
                                                <p>1, jannuary 2023</p>
                                            </div>
                                            <div class="berita-box-info-date-2">1, jannuary 2023</div>

                                        </div>

                                    </div>
                                </div>
                            </div>
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
                        <a href="{{ route('detailNews') }}" class="berita-box">
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
                <video autoplay loop muted src="{{ 'public/tenant/video/Inggris.mp4' }}"></video>
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
