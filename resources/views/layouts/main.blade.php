<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kel 1 Simpan Pinjam </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/style.css') }}">
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('style/assets/img/logo/logok.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset('style/assets/img/logo/logok.png') }}" alt="" style="width: 40%;"></a>
                            </div>
                        </div>
                        @auth
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li class="{{ ($title === "home" )? 'active' : '' }}"><a href="/home">Home</a></li>
                                            <li class="{{ ($title === "about" )? 'active' : '' }}"><a href="/about">About</a></li>
                                            <li class="{{ ($title === "services" )? 'active' : '' }}"><a href="/services">Services</a></li>
                                            <li class="{{ ($title === "apply" )? 'active' : '' }}"><a href="/apply">Apply</a></li>
                                            <li class="{{ ($title === "contact" )? 'active' : '' }}"><a href="/contact">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block" style="margin-right: 5px;">
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="btn header-btn">Logout</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @elseguest
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                
                                <div class="header-right-btn f-right d-none d-lg-block" style="margin-right: 8px;">
                                    <a href="/login" class="btn header-btn">Login</a>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="/register" class="btn header-btn">Register</a>
                                </div>
                            </div>
                        </div>
                        @endauth
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>

        @yield('container')

    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area">
            <div class="container">
                <div class="footer-top footer-padding">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="{{ asset('style/assets/img/logo/logok2.png') }}" alt="" style="width: 50%;"></a>
                                    </div>
                                    <div class="footer-pera">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex sapiente impedit facere!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Koperasi Simpan Pinjam</h4>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque inventore accusantium fugit tenetur aliquid numquam possimus rerum assumenda omnis 
                                        tempora quia suscipit illo provident deserunt ad a aliquam labore pariatur magnam odio alias quibusdam, quis dolores ipsum. Quisquam magnam asperiores 
                                        aliquam praesentium sint eaque eius nemo unde, quo quam maiores pariatur officiis! Aperiam nihil repudiandae similique nobis sunt. 
                                        Possimus doloribus at voluptate commodi consequuntur sed facere dolorum quasi molestias quam minima ea tenetur expedita dicta est cupiditate, 
                                        ratione necessitatibus doloremque amet repellendus iusto eligendi placeat accusantium. Quibusdam, ab ducimus fugiat distinctio voluptatem quam vero earum
                                        , repellendus, natus quod vel delectus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p>
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | </i> by Kelompok 1
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Footer Social -->
                            <div class="footer-social f-right">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>


    <!-- JS here -->
    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{ asset('style/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('style/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('style/assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('style/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('style/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('style/assets/js/jquery.magnific-popup.js') }}"></script>

    <!-- Nice-select, sticky -->
    <script src="{{ asset('style/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/jquery.sticky.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('style/assets/js/contact.js') }}"></script>
    <script src="{{ asset('style/assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('style/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('style/assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('style/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('style/assets/js/main.js') }}"></script>


</body>

</html>