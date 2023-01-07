@extends('tenant.layout.index')

@section('content')
    <div class="alumni">
        <div class="alumni-hero bg-asset" style="background: url({{ 'public/tenant/img/heroAlumni.jpg' }})">
            <div class="alumni-hero-bc">
                <a href="">
                    <ion-icon name="home"></ion-icon> Home
                </a>
                <a>/</a>
                <a href="">Alumni</a>
            </div>
            <div class="alumni-hero-title">alumni blog</div>
        </div>

        <div class="alumni-info">
            <div class="section-title"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 40">
                    <path d="M0 40C137.185 40 125.676 0 240 0s103.999 40 240 40H0Z" fill="#fff"></path>
                </svg>
                <p>alumni 2019</p>
            </div>
            <div class="alumni-info-container">
                <div class="alumni-info-container-left">
                    <div class="alumni-info-container-left-img"
                        style="background: url({{ 'public/tenant/img/siswa.jpg' }})">
                    </div>
                </div>
                <div class="alumni-info-container-right">
                    <div class="alumni-info-container-right-txt1">
                        <p>
                            <ion-icon name="trophy"></ion-icon> illiyin studio graduate
                        </p>
                        <p>Announcements</p>
                        <p>
                            We are finalists for a Nature <br> Inspiration Award!
                        </p>
                    </div>
                    <div class="alumni-info-container-right-txt2">
                        <p>We are very proud to share that Ocean School is nominated as a finalist for a Nature Inspiration
                            Award for the collection “The Harvest” (Bák̓vṇx̌).</p>
                    </div>
                    <div class="alumni-info-container-right-btn btn">Explore More</div>
                </div>
            </div>
        </div>

        <div class="alumni-info">
            {{-- <div class="section-title-git">
                <span></span>
                <ion-icon name="code"></ion-icon>
            </div> --}}
            <div class="section-title"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 40">
                    <path d="M0 40C137.185 40 125.676 0 240 0s103.999 40 240 40H0Z" fill="#fff"></path>
                </svg>
                <p>alumni 2019</p>
            </div>

            <div class="alumni-info-container">
                <div class="alumni-info-container-left">
                    <div class="alumni-info-container-left-img"
                        style="background: url({{ 'public/tenant/img/siswa.jpg' }});">
                    </div>
                </div>
                <div class="alumni-info-container-right">
                    <div class="alumni-info-container-right-txt1">
                        <p>
                            <ion-icon name="trophy"></ion-icon> illiyin studio graduate
                        </p>
                        <p>Announcements</p>
                        <p>
                            We are finalists for a Nature <br> Inspiration Award!
                        </p>
                    </div>
                    <div class="alumni-info-container-right-txt2">
                        <p>We are very proud to share that Ocean School is nominated as a finalist for a Nature Inspiration
                            Award for the collection “The Harvest” (Bák̓vṇx̌).</p>
                    </div>
                    <div class="alumni-info-container-right-btn btn">Explore More</div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
