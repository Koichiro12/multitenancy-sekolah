@extends('central.layout.app')
@section('page','Order Paket')
@section('content-hero')
    
<div class="container-xxl bg-success hero-header">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-12 text-center text-lg-start" style="height: 300px;">
                <h1 class="text-white text-center mb-4 animated slideInDown">@yield('page')</h1>
                <p class="text-white text-center pb-3 animated slideInDown">Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd dolor sed magna dolor.</p>
                <!--
                <div class="position-relative w-100 mt-3">
                    <button type="button" class="btn btn-light rounded-pill py-2 px-3 shadow-none position-absolute top-0  m-2">Demo</button>
                </div>
            -->
            </div>
            <!--
            <div class="col-lg-6 text-center text-lg-start">
                <img class="img-fluid rounded animated zoomIn" src="{{asset('public/img/hero.jpg')}}" alt="">
            </div>
        -->
        </div>
    </div>
</div>
@endsection
@section('content-app')
<!-- Contact Start -->
<div class="container-xxl py-6" id="contact">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-3">Order Paket</h1>
                <p class="mb-4">TErat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
                <div class="d-flex mb-4">
                    <div class="flex-shrink-0 btn-square rounded-circle bg-success text-white">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="mb-0">Isi Data</h5>
                        <p class="mb-2">Isi Data Identitas Dan Paket Yang Akan Dipilih</p>
                    </div>
                </div>
                <div class="d-flex mb-4">
                    <div class="flex-shrink-0 btn-square rounded-circle bg-success text-white">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="mb-0">Lakukan Pembayaran</h5>
                        <p class="mb-2">Lakukan Pembayaran Dengan E-Money </p>
                    </div>
                </div>
                <div class="d-flex mb-0">
                    <div class="flex-shrink-0 btn-square rounded-circle bg-success text-white">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="mb-0">Selesai</h5>
                        <p class="mb-2">Website Akan Aktif Dengan Sendirinya</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <form>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <select name="paket" id="paket" class="form-control">
                                    <option value="" selected> -- Pilih Paket --</option>
                                    <option value=""> Starter - Rp.590.000</option>
                                    <option value=""> Bussines - Rp.999.000</option>
                                    <option value=""> Premium - Rp.1.999.000</option>
                                </select>
                                <label for="paket">Paket</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Nama">
                                <label for="name">Nama</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="phone" class="form-control" id="phone" placeholder="Email">
                                <label for="phone">Phone</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Alamat" id="message" style="height: 150px"></textarea>
                                <label for="message">Alamat</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-success rounded-pill py-3 px-5" type="submit">Order Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection