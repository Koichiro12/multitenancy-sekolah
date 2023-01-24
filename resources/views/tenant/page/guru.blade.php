@extends('tenant.layout.index')
@section('content')
    <div class="guru">
        @foreach ($kepalaSekolah as $item)
            <div class="guru-hero ">
                <div class="guru-hero-info">
                    <div class="guru-hero-info-img bg-asset" style="background: url('{{ $item->image }}')"></div>
                    <div class="guru-hero-info-name">
                        <p>{{ $item->nama }}</p>
                        <p>{{ $item->kategori }}</p>
                    </div>
                </div>
                <div class="guru-hero-text">
                    <svg data-v-2177071c="" width="36" height="30" viewBox="0 0 36 30" fill="none"
                        xmlns="http://www.w3.org/2000/svg" role="img" class="quote-mark">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2.00146 1.86938H9.51221C9.94629 1.86938 10.3308 2.14942 10.464 2.56256L18.285 26.8236C18.4931 27.4693 18.0116 28.1304 17.3332 28.1304H9.82245C9.38838 28.1304 9.00387 27.8504 8.87069 27.4372L1.04969 3.1762C0.841547 2.53053 1.32306 1.86938 2.00146 1.86938ZM0.0979249 3.48302C-0.318367 2.19167 0.644665 0.869385 2.00146 0.869385H9.51221C10.3804 0.869385 11.1494 1.42946 11.4157 2.25575L19.2367 26.5168C19.653 27.8081 18.69 29.1304 17.3332 29.1304H9.82245C8.9543 29.1304 8.18529 28.5703 7.91892 27.7441L0.0979249 3.48302ZM18.3632 1.86938H25.8739C26.308 1.86938 26.6925 2.14942 26.8257 2.56256L34.6467 26.8236C34.8549 27.4693 34.3733 28.1304 33.6949 28.1304H26.1842C25.7501 28.1304 25.3656 27.8504 25.2324 27.4372L17.4114 3.1762C17.2033 2.53053 17.6848 1.86938 18.3632 1.86938ZM16.4597 3.48302C16.0434 2.19167 17.0064 0.869385 18.3632 0.869385H25.8739C26.7421 0.869385 27.5111 1.42946 27.7775 2.25575L35.5985 26.5168C36.0148 27.8081 35.0517 29.1304 33.6949 29.1304H26.1842C25.316 29.1304 24.547 28.5703 24.2807 27.7441L16.4597 3.48302Z"
                            fill="#0C1637"></path>
                    </svg>
                    <p>{{ $item->deskripsi }}</p>
                    <svg data-v-2177071c="" width="36" height="30" viewBox="0 0 36 30" fill="none"
                        xmlns="http://www.w3.org/2000/svg" role="img" class="quote-mark">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2.00146 1.86938H9.51221C9.94629 1.86938 10.3308 2.14942 10.464 2.56256L18.285 26.8236C18.4931 27.4693 18.0116 28.1304 17.3332 28.1304H9.82245C9.38838 28.1304 9.00387 27.8504 8.87069 27.4372L1.04969 3.1762C0.841547 2.53053 1.32306 1.86938 2.00146 1.86938ZM0.0979249 3.48302C-0.318367 2.19167 0.644665 0.869385 2.00146 0.869385H9.51221C10.3804 0.869385 11.1494 1.42946 11.4157 2.25575L19.2367 26.5168C19.653 27.8081 18.69 29.1304 17.3332 29.1304H9.82245C8.9543 29.1304 8.18529 28.5703 7.91892 27.7441L0.0979249 3.48302ZM18.3632 1.86938H25.8739C26.308 1.86938 26.6925 2.14942 26.8257 2.56256L34.6467 26.8236C34.8549 27.4693 34.3733 28.1304 33.6949 28.1304H26.1842C25.7501 28.1304 25.3656 27.8504 25.2324 27.4372L17.4114 3.1762C17.2033 2.53053 17.6848 1.86938 18.3632 1.86938ZM16.4597 3.48302C16.0434 2.19167 17.0064 0.869385 18.3632 0.869385H25.8739C26.7421 0.869385 27.5111 1.42946 27.7775 2.25575L35.5985 26.5168C36.0148 27.8081 35.0517 29.1304 33.6949 29.1304H26.1842C25.316 29.1304 24.547 28.5703 24.2807 27.7441L16.4597 3.48302Z"
                            fill="#0C1637"></path>
                    </svg>
                </div>
            </div>
        @endforeach

        <div class="guru-container">
            <div class="section-title"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 40">
                    <path d="M0 40C137.185 40 125.676 0 240 0s103.999 40 240 40H0Z" fill="#fff"></path>
                </svg>
                <p>guru-guru</p>
            </div>

            @foreach ($guru as $guru)
                <div class="guru-card">
                    <div class="guru-card-top">
                        <div class="guru-card-top-img bg-asset" style="background: url('{{ $guru->image }}')">
                        </div>
                        <div class="guru-card-top-info">
                            <div class="guru-card-top-info-item">{{ $guru->kategori }}</div>
                            <div class="guru-card-top-info-item">pns</div>
                        </div>
                    </div>
                    <div class="guru-card-bot">
                        <div class="guru-card-bot-name">{{ $guru->nama }}</div>
                        <div class="guru-card-bot-desc">{{ $guru->deskripsi }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
