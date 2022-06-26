@extends('layouts.main')

@section('container')
<!-- slider Area Start-->
<div class="slider-area slider-height" data-background="assets/img/hero/h1_hero.jpg">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider">
                    <div class="slider-cap-wrapper">
                        <div class="hero__caption">
                            <p data-animation="fadeInLeft" data-delay=".2s">Peminjaman dengan cepat dan aman</p>
                            <h1 data-animation="fadeInLeft" data-delay=".5s">Koperasi Simpan Pinjam<br> Kelompok I.</h1>
                            <!-- Hero Btn -->
                            @auth 
                            <a href="/apply" class="btn hero-btn" data-animation="fadeInLeft" data-delay=".8s">Ajukan Peminjaman</a>
                            @elseguest
                            <a href="#" class="btn hero-btn" data-animation="fadeInLeft" data-delay=".8s">Ajukan Peminjaman</a>
                            @endauth
                            
                        </div>
                        <div class="hero__img">
                            <img src="{{ asset('style/assets/img/hero/hero_img.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider">
                    <div class="slider-cap-wrapper">
                        <div class="hero__caption">
                            <p data-animation="fadeInLeft" data-delay=".2s">Peminjaman dengan cepat dan aman</p>
                            <h1 data-animation="fadeInLeft" data-delay=".5s">Untuk Membangun Bisnis Anda.</h1>
                            <!-- Hero Btn -->
                            @auth 
                            <a href="/apply" class="btn hero-btn" data-animation="fadeInLeft" data-delay=".8s">Ajukan Peminjaman</a>
                            @elseguest
                            <a href="#" class="btn hero-btn" data-animation="fadeInLeft" data-delay=".8s">Ajukan Peminjaman</a>
                            @endauth
                        </div>
                        <div class="hero__img">
                            <img src="{{ asset('style/assets/img/hero/hero_img2.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider-footer Start -->
            <div class="slider-footer section-bg d-none d-sm-block">
                <div class="footer-wrapper">
                    <!-- single -->
                    <div class="single-caption">
                        <div class="single-img">
                            <img src="assets/img/hero/hero_footer.png" alt="">
                        </div>
                    </div>
                    <!-- single -->
                    <div class="single-caption">
                        <div class="caption-icon">
                            <span class="flaticon-clock"></span>
                        </div>
                        <div class="caption">
                            <p>Persetujuan</p>
                            <p>Cepat dan Mudah</p>
                        </div>
                    </div>
                    <!-- single -->
                    <div class="single-caption">
                        <div class="caption-icon">
                            <span class="flaticon-money"></span>
                        </div>
                        <div class="caption">
                            <p>Peminjaman</p>
                            <p>Ringan</p>
                        </div>
                    </div>
                    <!-- single -->
                    <div class="single-caption">
                        <div class="caption-icon">
                            <span class="flaticon-like"></span>
                        </div>
                        <div class="caption">
                            <p>Jaminan</p>
                            <p>Terpercaya</p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- slider-footer End -->

        </div>
        <!-- slider Area End-->
        <!-- About Law Start-->
        <div class="about-low-area section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <span>About Our Company</span>
                                <h2>Bersama Kami, Sejahtera Selalu.</h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, oeiusmod tempor incididunt ut labore et dolore magna aliqua. Ut eniminixm, quis nostrud exercitation ullamco laboris nisi ut aliquip exeaoauat. Duis aute irure dolor
                                in reprehe.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, oeiusmod tempor incididunt ut labore et dolore magna aliq.</p>
                            @auth 
                            <a href="/apply" class="btn hero-btn" data-animation="fadeInLeft" data-delay=".8s">Ajukan Peminjaman</a>
                            @elseguest
                            <a href="#" class="btn hero-btn" data-animation="fadeInLeft" data-delay=".8s">Ajukan Peminjaman</a>
                            @endauth
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <div class="about-font-img d-none d-lg-block">
                                <img src="{{ asset('style/assets/img/gallery/about2.png') }}" alt="">
                            </div>
                            <div class="about-back-img ">
                                <img src="{{ asset('style/assets/img/gallery/about1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Law End-->
        <!-- Support Company Start-->
        <div class="support-company-area section-padding3 fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="support-location-img mb-50">
                            <img src="{{ asset('style/assets/img/gallery/single2.jpg') }}" alt="">
                            <div class="support-img-cap">
                                <span>Sejak 1992</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="right-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle">
                                <span>Koperasi Simpan Pinjam Terpercaya</span>
                                <h2>Jaminan Masa Depan Lebih Sejahtera.</h2>
                            </div>
                            <div class="support-caption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                <div class="select-suport-items">
                                    <label class="single-items">Aorem ipsum dgolor sitnfd amet dfgbn fbsdg
                                <input type="checkbox" checked="checked active">
                                <span class="checkmark"></span>
                            </label>
                                    <label class="single-items">Consectetur adipisicing bfnelit, sedb dvbnfo
                                <input type="checkbox" checked="checked active">
                                <span class="checkmark"></span>
                            </label>
                                    <label class="single-items">Eiusmod tempor incididunt vmgldupout labore
                                <input type="checkbox" checked="checked active">
                                <span class="checkmark"></span>
                            </label>
                                    <label class="single-items">Admkde mibvnim veniam, quivds cnostrud.
                                <input type="checkbox" checked="checked active">
                                <span class="checkmark"></span>
                            </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Support Company End-->
        
@endsection