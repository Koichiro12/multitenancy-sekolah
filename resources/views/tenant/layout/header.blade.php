<header class="header">
    <div class="header-container">
        <div class="header__name btn-show-header-popup">
            <ion-icon class="header__name-btn " name="menu-outline"></ion-icon>
            <p class="header__name-title">
                mts nu pakis
            </p>
        </div>
        <a href="{{ route('home') }}">
            <img class="header__logo" src={{ 'public/tenant/img/logoPakis.png' }} alt="Logo" />
        </a>
        <div class="header__list">
            <a href="{{ route('news') }}" class="header__list--item news-link">berita</a>
            <a href="{{ route('ppdb') }}" class="header__list--item ppdb-link">PPDB</a>
            <a href="{{ route('alumni') }}" class="header__list--item alumni-link">ALUMNI</a>
            {{-- <a href="{{ route('home') }}" class="header__list--item btn-join">Join Us &rarr;</a> --}}
        </div>
    </div>
</header>
<header class="header-top">
    <div class="header-top-container">
        <div class="header-top__name btn-show-header-popup">
            <ion-icon name="menu-outline" class="header-top__name-btn"></ion-icon>
            <p class="header-top__name-title">
                mts nu pakis
            </p>
        </div>
        <a href="{{ route('home') }}">
            <img class="header-top__logo" src={{ 'public/tenant/img/logoPakis.png' }} alt="Logo" />
        </a>
        <div class="header-top__list">
            <a href="{{ route('news') }}" class="header__list--item news-link">berita</a>
            <a href="{{ route('ppdb') }}" class="header__list--item ppdb-link">PPDB</a>
            <a href="{{ route('alumni') }}" class="header__list--item alumni-link">ALUMNI</a>
            {{-- <a href="{{ route('home') }}" class="header__list--item btn-join">Join Us &rarr;</a> --}}
        </div>
    </div>
</header>

<header class="header-popup">
    <div class="header-popup-container-wrapper">
        <div class="header-popup-head">
            <div class="header-popup-head-btn btn-close-header-popup">
                <ion-icon name="close-outline"></ion-icon> Close
            </div>
            <div class="header-popup-head-link">
                <a href="{{ route('news') }}">berita</a>
                <a href="{{ route('ppdb') }}">ppdb</a>
                <a href="{{ route('alumni') }}">alumni</a>
                {{-- <a href="{{ route('news') }}">join us &rarr;</a> --}}
            </div>
        </div>
        <div class="header-popup-container">
            <div class="header-popup-container-title">Browse Our Content</div>
            <div class="header-popup-container-box">
                <div class="header-popup-container-box-title">Halaman</div>
                <a href="{{ route('home') }}" class="header-popup-container-box-link">Beranda</a>
                <a href="{{ route('about') }}" class="header-popup-container-box-link">Tentang</a>
                <a href="" class="header-popup-container-box-link">Prestasi</a>
                <a href="" class="header-popup-container-box-link">Keunggulan</a>
            </div>
            <div class="header-popup-container-box">
                <div class="header-popup-container-box-title">Halaman</div>
                <a href="{{ route('home') }}" class="header-popup-container-box-link">Beranda</a>
                <a href="{{ route('about') }}" class="header-popup-container-box-link">Tentang</a>
                <a href="" class="header-popup-container-box-link">Prestasi</a>
                <a href="" class="header-popup-container-box-link">Keunggulan</a>
            </div>

            <div class="header-popup-container-action">
                <div class="header-popup-container-action-box"
                    style="background: radial-gradient(74.87% 160.81% at 29.43% 109.75%,#fcacf1 0,#fcacf1 45.38%,#fe9887 74.11%,#ef4225 100%);">
                    <div class="header-popup-container-action-box-title">PPDB Mts Nu Pakis</div>
                    <div class="header-popup-container-action-box-btn">
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </div>
                </div>
                <div class="header-popup-container-action-box"
                    style="background: radial-gradient(74.87% 160.81% at 29.43% 109.75%,#7fdddd 0,#7fdddd 45.38%,#33d2c9 74.11%,#1aa9e8 100%);">
                    <div class="header-popup-container-action-box-title">ALUMNI Mts Nu Pakis</div>
                    <div class="header-popup-container-action-box-btn">
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
