@extends('tenant.layout.index')

@section('content')
    <div class="ppdb">
        <div class="ppdb-hero" style="background: linear-gradient(-120deg ,#ef4225 0, 45.38%,#fe9887 74.11%,#fcacf1 );">
            <div class="ppdb-hero-bc">
                <a href="">
                    <ion-icon name="home"></ion-icon> Home
                </a>
                <a>/</a>
                <a href="">Ppdb</a>
            </div>
            <div class="ppdb-hero-title">ppdb blog</div>
        </div>
        <div class="ppdb-title">
            <div class="section-title"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 40">
                    <path d="M0 40C137.185 40 125.676 0 240 0s103.999 40 240 40H0Z" fill="#eff3f3"></path>
                </svg>
                <p>step ppdb</p>
            </div>
            <div class="ppdb-title-text">
                <p>
                    How can you use Ocean School in your classroom? Free, engaging, informative
                </p>
                <div class="ppdb-title-text-btn btn">Explore our resources</div>

            </div>
            <div class="ppdb-title-ilus">
                <div class="ilus-box">
                    <div class="ilus-box-img" style="">
                        <img src="{{ 'public/tenant/img/ilustration/ilus4.svg' }}" alt="">
                    </div>
                    <div class="ilus-box-info">
                        <div class="ilus-box-info-1 btn-circle">1</div>
                        <div class="ilus-box-info-2">
                            <p>sellect collection</p>
                            <p>and customize it</p>
                        </div>
                    </div>
                </div>
                <div class="ilus-box">
                    <div class="ilus-box-img" style="">
                        <img src="{{ 'public/tenant/img/ilustration/ilus5.svg' }}" alt="">
                    </div>
                    <div class="ilus-box-info">
                        <div class="ilus-box-info-1 btn-circle">2</div>
                        <div class="ilus-box-info-2">
                            <p>Explore our resources</p>
                            <p>available in multiple formats</p>
                        </div>
                    </div>
                </div>
                <div class="ilus-box">
                    <div class="ilus-box-img" style="">
                        <img src="{{ 'public/tenant/img/ilustration/ilus6.svg' }}" alt="">
                    </div>
                    <div class="ilus-box-info">
                        <div class="ilus-box-info-1 btn-circle">3</div>
                        <div class="ilus-box-info-2">
                            <p>Share it with your students</p>
                            <p> using a link, Microsoft Teams, <br> or Google Classroom</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="ppdb-step">
            <div class="ppdb-step-wrapper">
                <div class="ppdb-step-wrapper-item">
                    <div class="ppdb-step-wrapper-item-icon">
                        <ion-icon name="construct-outline"></ion-icon>
                    </div>
                    <div class="ppdb-step-wrapper-item-title">
                        Troubleshooting
                    </div>
                    <div class="ppdb-step-wrapper-item-desc">Find solutions for common problems.</div>
                </div>
                <div class="ppdb-step-wrapper-item">
                    <div class="ppdb-step-wrapper-item-icon">
                        <ion-icon name="construct-outline"></ion-icon>
                    </div>
                    <div class="ppdb-step-wrapper-item-title">
                        Troubleshooting
                    </div>
                    <div class="ppdb-step-wrapper-item-desc">Find solutions for common problems.</div>
                </div>
                <div class="ppdb-step-wrapper-item">
                    <div class="ppdb-step-wrapper-item-icon">
                        <ion-icon name="construct-outline"></ion-icon>
                    </div>
                    <div class="ppdb-step-wrapper-item-title">
                        Troubleshooting
                    </div>
                    <div class="ppdb-step-wrapper-item-desc">Find solutions for common problems.</div>
                </div>
            </div>

        </div> --}}
        <div class="ppdb-form">
            <div class="ppdb-form-wrapper">
                <div class="ppdb-form-wrapper-head">
                    <div class="ppdb-form-wrapper-head-title">
                        <ion-icon name="people-circle-outline"></ion-icon>
                        Daftar menjadi Siswa baru SMKN 1 Purwosari
                    </div>
                    <div class="ppdb-form-wrapper-head-link">Privacy Police</div>
                    <div class="ppdb-form-wrapper-head-prog progress-bar">
                        <div class="bar">
                            <div class="progress"></div>
                        </div>
                    </div>
                </div>
                <div class="ppdb-form-wrapper-content">
                    <div class="ppdb-form-wrapper-content-right">
                        <div class="ppdb-info">
                            <div class="ppdb-info-wrapper">
                                {{-- <div class="ppdb-info-wrapper-head">Persyaratan</div> --}}
                                <div class="ppdb-info-wrapper-content">
                                    <div class="ppdb-info-wrapper-content-item">
                                        <ion-icon name="document-text-outline"></ion-icon>
                                        <p>Foto copy IJAZAH /UAS bagi lulusan SDN/SDI, Madrasah Ibtidaiyah/Madrasah Diniyah
                                            2 (dua) lembar
                                            yang telah disahkan oleh Kepala Sekolah dan mencantumkan Nomor Induk Siswa
                                            Nasional.</p>
                                    </div>
                                    <div class="ppdb-info-wrapper-content-item">
                                        <ion-icon name="document-text-outline"></ion-icon>
                                        <p>Pas Fhoto Ukuran 3 x 4 sebanyak 3 Lembar.</p>
                                    </div>
                                    <div class="ppdb-info-wrapper-content-item">
                                        <ion-icon name="document-text-outline"></ion-icon>
                                        <p>Foto Copy Ijazah / Sertifikat TPA (2) lembar yang telah disahkan atau Surat
                                            Keterangan mampu baca
                                            tulis Al Quran dari Guru mengaji (Persyaratan Huruf b pilih salah satu).</p>
                                    </div>
                                    <div class="ppdb-info-wrapper-content-item">
                                        <ion-icon name="document-text-outline"></ion-icon>
                                        <p>Foto copy Akte Kelahiran 1 (satu) lembar.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="ppdb-form-wrapper-content-left">
                        <div class="form">
                            <div class="form-wrapper">
                                <div class="form-wrapper-head">
                                    <p>
                                        <ion-icon name="people-circle-outline"></ion-icon>
                                        Accounts
                                    </p>
                                    <p>if you have more more than one account, you can add them and easily switch between
                                    </p>

                                </div>
                                <hr>
                                <form class="form-wrapper-content">
                                    @csrf
                                    <div class="form-input input-nama">
                                        <label for="">nama lengkap <span>*</span></label>
                                        <input type="text" placeholder="muhammad rifaldi">
                                    </div>
                                    <div class="form-input input-email">
                                        <label for="">email<span>*</span></label>
                                        <input type="email" placeholder="rifald84@gmail.com">
                                    </div>
                                    <div class="form-input input-tanggal">
                                        <label for="">tanggal lahir <span>*</span></label>
                                        <input type="date" placeholder="">
                                    </div>
                                    <div class="form-select">
                                        <label for="selectAgama">agama <span>*</span></label>
                                        <select name="selectAgama" id="selectAgama">
                                            <option value="">Tidak Ada</option>
                                            <option value="islam">islam</option>
                                            <option value="kristen">kristen</option>
                                            <option value="hindu">hindu</option>
                                            <option value="budha">budha</option>
                                        </select>
                                    </div>
                                    <a href="" class="form-wrapper-content-btn btn">kirim</a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('js')
    <script>
        var progressVal = 0;
        let fillValName = false;
        let fillValEmail = false;
        let fillValTgl = false;
        let fillValAgm = false;



        function addVal() {
            return progressVal += 25
        }

        function lessVal() {
            return progressVal -= 25
        }

        function toggleValName() {
            if (fillValName) {
                addVal()
            } else {
                lessVal()
            }
        }

        function toggleValEmail() {
            if (fillValEmail) {
                addVal()
            } else {
                lessVal()
            }
        }

        function toggleValTgl() {
            if (fillValTgl) {
                addVal()
            } else {
                lessVal()
            }
        }

        function toggleValAgm() {
            if (fillValAgm) {
                addVal()
            } else {
                lessVal()
            }
        }
        let setVal = async () => {
            await $('.progress-bar .bar .progress').css('max-width', `${progressVal}%`)
            if (progressVal == 100) {
                $('.progress-bar .bar .progress').css('background ', 'green')
            }
        }
        $('.input-nama input').focus(function() {

            $('.input-nama input').on('keyup', function() {
                if ($('.input-nama input').val() != 0 && fillValName == false) {
                    fillValName = true
                    toggleValName()
                    setVal()
                    console.log(progressVal)
                } else if ($('.input-nama input').val() == 0 && fillValName == true) {
                    fillValName = false
                    toggleValName()
                    setVal()
                    console.log(progressVal)
                }
            })

        })

        // input email
        $('.input-email input').focus(function() {
            $('.input-email input').on('keyup', function() {
                if ($('.input-email input').val() != 0 && fillValEmail == false) {
                    fillValEmail = true
                    toggleValEmail()
                    setVal()
                    console.log(progressVal)
                } else if ($('.input-email input').val() == 0 && fillValEmail == true) {
                    fillValEmail = false
                    toggleValEmail()
                    setVal()
                    console.log(progressVal)
                }
            })
        })
        // input tanggal

        $('.input-tanggal input').on('change', function() {
            if ($('.input-tanggal input').val() != 0 && fillValTgl == false) {
                fillValTgl = true
                toggleValTgl()
                setVal()
                console.log(progressVal)
            } else if ($('.input-tanggal input').val() == 0 && fillValTgl == true) {
                fillValTgl = false
                toggleValTgl()
                setVal()
                console.log(progressVal)
            }
        })

        // input agama
        $('#selectAgama').on('change', function() {
            if ($('#selectAgama').val() != 0 && fillValAgm == false) {
                fillValAgm = true
                toggleValAgm()
                setVal()
                console.log(progressVal)
            } else if ($('#selectAgama').val() == 0 && fillValAgm == true) {
                fillValAgm = false
                toggleValAgm()
                setVal()
                console.log(progressVal)
            }
        })
    </script>
@endsection
