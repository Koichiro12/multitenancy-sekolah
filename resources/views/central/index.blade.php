@extends('central.layout.app')
@section('page','Dashboard')
@section('content-hero')
    
<div class="container-xxl bg-success hero-header">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white mb-4 animated slideInDown">WebApp Praktis dan Mudah Untuk Sekolah Jaman Now </h1>
                <p class="text-white pb-3 animated slideInDown">Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd dolor sed magna dolor.Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                <div class="position-relative w-100 mt-3">
                    <button type="button" class="btn btn-light rounded-pill py-2 px-3 shadow-none position-absolute top-0  m-2">Demo</button>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <img class="img-fluid rounded animated zoomIn" src="{{asset('public/central/img/pct.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
@section('content-app')
        <!-- Feature Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Kenapa Harus Kami ?</h1>
                    <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded text-center p-5">
                            <i class="fa fa-4x fa-edit text-success mb-4"></i>
                            <h5 class="mb-3">Installasi Mudah</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded text-center p-5">
                            <i class="fa fa-4x fa-sync text-success mb-4"></i>
                            <h5 class="mb-3">24 / 7 Hours Support</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded text-center p-5">
                            <i class="fa fa-4x fa-draw-polygon text-success mb-4"></i>
                            <h5 class="mb-3">Murah Meriah</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->


        <!-- About Start -->
        <div class="container-xxl py-6" id="about">
            <div class="container">
                <div class="row g-5 flex-column-reverse flex-lg-row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4">Kelola Semua Proses Yang ada di sekolah Dengan 1 Aplikasi</h1>
                        <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-success text-white">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ms-4">
                                <h5>First Working Process</h5>
                                <p class="mb-0">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo magna</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-success text-white">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ms-4">
                                <h5>24/7 Hours Support</h5>
                                <p class="mb-0">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo magna</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-success text-white">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ms-4">
                                <h5>Murah Meriah</h5>
                                <p class="mb-0">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo magna</p>
                            </div>
                        </div>
                        <a href="" class="btn btn-success py-sm-3 px-sm-5 rounded-pill mt-3">Read More</a>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.5s" src="{{asset('public/central/img/pct1.png')}}">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        
        <!-- Advanced Feature Start -->
        <div class="container-xxl py-6" id="features">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Fitur Unggulan</h1>
                    <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="advanced-feature-item text-center rounded py-5 px-4">
                            <i class="fa fa-edit fa-3x text-success mb-4"></i>
                            <h5 class="mb-3">Fully Customizable</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="advanced-feature-item text-center rounded py-5 px-4">
                            <i class="fa fa-sync fa-3x text-success mb-4"></i>
                            <h5 class="mb-3">App Integration</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="advanced-feature-item text-center rounded py-5 px-4">
                            <i class="fa fa-laptop fa-3x text-success mb-4"></i>
                            <h5 class="mb-3">High Resolution</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="advanced-feature-item text-center rounded py-5 px-4">
                            <i class="fa fa-draw-polygon fa-3x text-success mb-4"></i>
                            <h5 class="mb-3">Drag And Drop</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Advanced Feature End -->

        <!-- Process Start -->
        <!--
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="{{asset('public/central/img/process.jpg')}}">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <h1 class="mb-4">Three Simple Steps To Start Working With</h1>
                        <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>
                        <ul class="process mb-0">
                            <li>
                                <span><i class="fa fa-cog"></i></span>
                                <div>
                                    <h5>Install the Software</h5>
                                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit</p>
                                </div>
                            </li>
                            <li>
                                <span><i class="fa fa-address-card"></i></span>
                                <div>
                                    <h5>Setup Your Profile</h5>
                                    <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo</p>
                                </div>
                            </li>
                            <li>
                                <span><i class="fa fa-check"></i></span>
                                <div>
                                    <h5>Enjoy The Features</h5>
                                    <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    -->
        <!-- Process End -->


        <!-- Pricing Start -->
        <div class="container-xxl py-6" id="pricing">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Paket Harga</h1>
                    <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p>
                </div>
                <div class="row g-4">
                    @foreach ($data as $item)
                        @if ($loop->index + 1 != $nilai_tengah)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="price-item rounded overflow-hidden">
                                <div class="bg-dark p-4">
                                    <h4 class="text-white mt-2">{{$item->nama_paket}}</h4>
                                    <div class="text-white">
                                        <span class="align-top fs-4 fw-bold">Rp</span>
                                        <h1 class="d-inline display-6 text-success mb-0">{{number_format($item->harga_paket)}}</h1>
                                        <span class="align-baseline">/ {{$item->per_harga_paket}}</span>
                                    </div>
                                </div>
                                <div class="p-4">
                                    @foreach ($keunggulan as $k)
                                    @php
                                        $cek = false;
                                        foreach($list_keunggulan as $lk){
                                            if($lk->kode_paket == $item->id && $lk->kode_keunggulan == $k->id){
                                                $cek = true;
                                                break;
                                            }
                                        }
                                    @endphp
                                            <div class="d-flex justify-content-between mb-3">
                                                <span>{{$k->name}}</span>
                                                @if ($cek)
                                                    <i class="fa fa-check text-success pt-1"></i>
                                                @else
                                                    <i class="fa fa-times text-danger pt-1"></i>
                                                @endif
                                                
                                            </div>
                                    @endforeach
                                    <a href="<?= url('order') ?>" class="btn btn-dark rounded-pill py-2 px-4 mt-3">Get Started</a>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="price-item rounded overflow-hidden">
                                <div class="bg-success p-4">
                                    <h4 class="text-white mt-2">{{$item->nama_paket}}</h4>
                                    <div class="text-white">
                                        <span class="align-top fs-4 fw-bold">Rp</span>
                                        <h1 class="d-inline display-6 text-dark mb-0">{{number_format($item->harga_paket)}}</h1>
                                        <span class="align-baseline">/ {{$item->per_harga_paket}}</span>
                                    </div>
                                </div>
                                <div class="p-4">
                                    @foreach ($keunggulan as $k)
                                    @php
                                        $cek = false;
                                        foreach($list_keunggulan as $lk){
                                            if($lk->kode_paket == $item->id && $lk->kode_keunggulan == $k->id){
                                                $cek = true;
                                                break;
                                            }
                                        }
                                    @endphp
                                            <div class="d-flex justify-content-between mb-3">
                                                <span>{{$k->name}}</span>
                                                @if ($cek)
                                                    <i class="fa fa-check text-success pt-1"></i>
                                                @else
                                                    <i class="fa fa-times text-danger pt-1"></i>
                                                @endif
                                                
                                            </div>
                                    @endforeach
                                    <a href="<?= url('order') ?>" class="btn btn-success rounded-pill py-2 px-4 mt-3">Get Started</a>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                    
                </div>
            </div>
        </div>
        <!-- Pricing End -->


        <!-- Overview Start -->
        <!--
        <div class="container-xxl bg-light my-6 py-5" id="overview">
            <div class="container">
                <div class="row g-5 py-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="{{asset('public/central/img/overview-1.jpg')}}">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">01</h1>
                            <span class="bg-success mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">App Integration</h5>
                        </div>
                        <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>
                        <p><i class="fa fa-check-circle text-success me-3"></i>Fully customizable</p>
                        <p><i class="fa fa-check-circle text-success me-3"></i>User friendly interface</p>
                        <p class="mb-0"><i class="fa fa-check-circle text-success me-3"></i>More effective & poerwfull</p>
                    </div>
                </div>
                <div class="row g-5 py-5 align-items-center flex-column-reverse flex-lg-row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">02</h1>
                            <span class="bg-success mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">App Customization</h5>
                        </div>
                        <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>
                        <p><i class="fa fa-check-circle text-success me-3"></i>Fully customizable</p>
                        <p><i class="fa fa-check-circle text-success me-3"></i>User friendly interface</p>
                        <p class="mb-0"><i class="fa fa-check-circle text-success me-3"></i>More effective & poerwfull</p>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="{{asset('public/central/img/overview-2.jpg')}}">
                    </div>
                </div>
                <div class="row g-5 py-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="{{asset('public/central/img/overview-3.jpg')}}">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">03</h1>
                            <span class="bg-success mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">App Modification</h5>
                        </div>
                        <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>
                        <p><i class="fa fa-check-circle text-success me-3"></i>Fully customizable</p>
                        <p><i class="fa fa-check-circle text-success me-3"></i>User friendly interface</p>
                        <p class="mb-0"><i class="fa fa-check-circle text-success me-3"></i>More effective & poerwfull</p>
                    </div>
                </div>
            </div>
        </div>
        -->
        <!-- Overview End -->
        
        <!-- Facts Start -->
        <div class="container-xxl bg-success my-6 py-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                        <h1 class="mb-2" data-toggle="counter-up">0</h1>
                        <p class="text-white mb-0">Order</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                        <h1 class="mb-2" data-toggle="counter-up">{{$data->count()}}</h1>
                        <p class="text-white mb-0">Paket</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                        <h1 class="mb-2" data-toggle="counter-up">{{$feature->count()}}</h1>
                        <p class="text-white mb-0">Feature</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                        <h1 class="mb-2" data-toggle="counter-up">{{$testimoni->count()}}</h1>
                        <p class="text-white mb-0">Testimoni</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->



        <!-- Testimonial Start -->
        <div class="container-xxl py-6" id="testimonial">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Testimoni</h1>
                    <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @foreach ($testimoni as $item)
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-success mt-n4 me-3"></i>{{$item->testi_desc}}</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('public/central/uploads/'.$item->testi_image)}}" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">{{$item->testi_name}}</h5>
                                <span>{{$item->testi_profesion}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Contact Start -->
        <div class="container-xxl py-6" id="contact">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-3">Hubungi Kami</h1>
                        <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-success text-white">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Call Us</p>
                                <h5 class="mb-0">+012 345 6789</h5>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-success text-white">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Mail Us</p>
                                <h5 class="mb-0">info@example.com</h5>
                            </div>
                        </div>
                        <div class="d-flex mb-0">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-success text-white">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Our Office</p>
                                <h5 class="mb-0">123 Street, New York, USA</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        @if(session('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                        @endif 
                        @if(session('error'))
                            <div class="alert alert-danger text-center">
                                {{ session('error') }}
                            </div>
                        @endif 
                        <form action="{{route('contact.store')}}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 150px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-success rounded-pill py-3 px-5" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
@endsection