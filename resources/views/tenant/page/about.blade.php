@extends('tenant.layout.index')
@section('content')
    <div class="about">
        <div class="about__hero" style="background: url({{ 'public/tenant/img/heroPakis.jpg' }})">
            <div class="blur"></div>
            <div class="about__hero-info">
                <div class="about__hero-info-title">
                    <p>tentang </p>
                    <p>Madrasah Tsanawiyah nahdlatul ulama pakis</p>
                </div>
                <div class="about__hero-info-img" style="background: url({{ 'public/tenant/img/heroPakis.jpg' }})">
                </div>
            </div>
        </div>
        <div class="about__info">
            <div class="section-title">
                <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 40">
                    <path d="M0 40C137.185 40 125.676 0 240 0s103.999 40 240 40H0Z" fill="#fff"></path>
                </svg>
                <p>tentang kita</p>
            </div>
            <div class="about__info-container">
                <div class="about__info-container-right">
                    <div class="about__info-container-right-title">tentang mts nu pakis?</div>
                    <div class="about__info-container-right-txt"> Ocean School is a free environmental education resource
                        for students in grades 5-12. Our inspiring and immersive multimedia resources featuring linear and
                        360˚ videos, VR/AR, interactive media and hands-on projects and activities are offered in English
                        and French. Our cross-curricular content spans science, social studies, language arts and more!
                    </div>
                    <div class="about__info-container-right-btn btn">Explore Your Skill</div>
                </div>
                <div class="about__info-container-left">
                    <div class="about__info-container-left-txt">Explore the ocean through immersive multimedia lessons
                        created by scientists, educators, and storytellers</div>
                    <div class="about__info-container-left-img">
                        <div class="about__info-container-left-img-src bg-asset"
                            style="background: url({{ 'public/tenant/img/siswa.jpg' }})">

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="about__map">
            <div class="about__map-title">
                <div class="about__map-title-1">lokasi mts nu pakis</div>
                <div class="about__map-title-2">
                    <p>Lokasi mts nu pakis berada di Jalan Raya Bunut Wetan Nomor 986, Kecamatan Pakis, Kabupaten Malang
                    </p>
                </div>
                <a href="" class="about__map-title-btn btn">Open In Google Maps</a>
            </div>
            <div class="about__map-content">
                <div id="map"></div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(window).scroll(function() {
            navScroll(100);
        })
        var map = L.map('map', {
            zoomControl: false
        }).setView([-7.752371, 112.696571], 13);

        var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            minZoom: 10,
            maxZoom: 17,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        var marker = L.marker([-7.752371, 112.696571]).addTo(map)
            .bindPopup('<b>Hello Guys!</b><br />Ini Adalah Rumah Saya.').openPopup();

        var circle = L.circle([-7.752404, 112.696550], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 500
        }).addTo(map).bindPopup('Area Rumah Saya.');

        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent('You clicked the map at ' + e.latlng.toString())
                .openOn(map);
        }

        map.on('click', onMapClick);
    </script>
@endsection
