@extends('layouts.main')

@section('container')
<!-- Hero Start-->
<div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>About us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->
        <!-- About Law Start-->
        <div class="about-low-area section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <span>Tentang Perusahaan Kami</span>
                                <h2>Siap Membantu Masalah Finansial Anda.</h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, oeiusmod tempor incididunt ut labore et dolore magna aliqua. Ut eniminixm, quis nostrud exercitation ullamco laboris nisi ut aliquip exeaoauat. Duis aute irure dolor in reprehe.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, oeiusmod tempor incididunt ut labore et dolore magna aliq.</p>
                            <a href="apply.html" class="btn">Ajukan Peminjaman</a>
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
        <!-- Testimonial Start -->
        <div class="testimonial-area t-bg testimonial-padding">
            <div class="container ">
               <div class="row d-flex justify-content-center">
                    <div class="col-xl-11 col-lg-11 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <img src="{{ asset('style/assets/img/gallery/testimonial.png') }}" alt="">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, quo. Atque dolorem ab distinctio fugiat autem accusantium neque repellat nostrum.</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                        <div class="founder-img">
                                            <img src="{{ asset('assets/img/testmonial/Homepage_testi.png') }}" alt="">
                                        </div>
                                       <div class="founder-text">
                                            <span>Pudidi</span>
                                            <p>Customer</p>
                                       </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <img src="{{ asset('style/assets/img/gallery/testimonial.png') }}" alt="">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore facilis, aliquam ea similique nam odio id, amet deserunt a ducimus, repellendus nesciunt reiciendis ut esse nobis. Aliquid perferendis dolores corporis.</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                        <div class="founder-img">
                                            <img src="{{ asset('assets/img/testmonial/Homepage_testi.png') }}" alt="">
                                        </div>
                                       <div class="founder-text">
                                            <span>Paidi</span>
                                            <p>Customer</p>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->
        <!--Team Ara Start -->
        <div class="team-area section-padding30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <span>Anngota Kami</span>
                            <h2>Ini Merupakan Beberapa Anggota Kami.</h2>
                        </div> 
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-1 col-md-4 col-sm-6"></div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{ asset('style/assets/img/gallery/home_blog2.png') }}" alt="">
                                <!-- Blog Social -->
                                <div class="team-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                </div>
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">Kevin Natanael</a></h3>
                                <p>Founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{ asset('style/assets/img/gallery/home_blog2.png') }}" alt="">
                                <!-- Blog Social -->
                                <div class="team-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                </div>
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">Maulana Rosandy</a></h3>
                                <p>Founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{ asset('style/assets/img/gallery/home_blog2.png') }}" alt="">
                                <!-- Blog Social -->
                                <div class="team-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                </div>
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">Raditya Catur Narendra</a></h3>
                                <p>Founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{ asset('style/assets/img/gallery/home_blog2.png') }}" alt="">
                                <!-- Blog Social -->
                                <div class="team-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                </div>
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">Rofika Nur Aini</a></h3>
                                <p>Founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{ asset('style/assets/img/gallery/home_blog2.png') }}" alt="">
                                <!-- Blog Social -->
                                <div class="team-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                </div>
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">Rofiqoh Wahyuningtyas</a></h3>
                                <p>Founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-4 col-sm-6"></div>
                </div>
            </div>
        </div>
        <!-- Team Ara End -->
@endsection