<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Pages</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('dashmin/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('dashmin/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashmin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('dashmin/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('dashmin/css/style.css') }}" rel="stylesheet">
<<<<<<< HEAD

=======
>>>>>>> 78b6189a02d5818491775bd17722d36289422f80
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="/dashboard" class="navbar-brand mx-4 mb-3">
                    <img src="{{ asset('style/assets/img/logo/logok.png') }}" alt="" style="width: 60%;">
                </a>
                <br>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="ms-3">
                        <h5 class="mb-0 fw-bolder">Admin Kevin</h5>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="/dashboard" class="nav-item nav-link {{ Request::is('dashboard') ? 'active' : '' }}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="/anggota" class="nav-item nav-link {{ Request::is('anggota') ? 'active' : '' }}"><i class="fa fa-table me-2"></i>Tabel Anggota</a>
                    <a href="/peminjaman" class="nav-item nav-link {{ Request::is('peminjaman') ? 'active' : '' }}"><i class="fa fa-table me-2"></i>Tabel Peminjaman</a>
                    <a href="/simpanan" class="nav-item nav-link {{ Request::is('simpanan') ? 'active' : '' }}"><i class="fa fa-table me-2"></i>Tabel Simpanan</a>
                    <a href="/pengambilan" class="nav-item nav-link {{ Request::is('pengambilan') ? 'active' : '' }}"><i class="fa fa-table me-2"></i>Tabel Penarikan</a>
                    <a href="/angsuran" class="nav-item nav-link {{ Request::is('angsuran') ? 'active' : '' }}"><i class="fa fa-table me-2"></i>Tabel Angsuran</a>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn nav-item nav-link"><i class="fa fa-sign-out-alt me-2"></i>Logout</a>
                    </form>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            @if(session()->has('success'))
            <div class="container-fluid pt-4 px-4">
                <div class="alert alert-success alert-dismissible col-12">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('success') }}
                </div>
            </div>
            @endif
            
            @yield('container')
            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Kel 1</a>, All Right Reserved.
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('dashmin/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('dashmin/js/main.js') }}"></script>
</body>

</html>