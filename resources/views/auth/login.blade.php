<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/login.css') }}">
</head>
<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-10">
            <div class="card rounded-3 text-black">
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="card-body p-md-5 mx-md-4">
                    <div class="text-center">
                      <img src="{{ asset('style/assets/img/logo/logok.png') }}"
                        style="width: 185px;" alt="logo">
                      <h4 class="mt-1 mb-5 pb-1">Koperasi Simpan Pinjam</h4>
                    </div>
                    @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      </button>
                    </div>
                    @endif
                    @if(session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      </button>
                    </div>
                    @endif
                    <form method="POST" action="/login">
                    @csrf
                      <center><p>Masukkan Email dan Password</p></center>
                      <div class="form-outline mb-4">
                        <label class="form-label" for="Email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" 
                        placeholder="Enter Email" required>
                      </div>
                      <div class="form-outline mb-4">
                        <label class="form-label" for="Password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required>
                      </div>

                      <div class="text-center pt-1 mb-5 pb-1">
                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 mt-3" type="submit">Login</button>
                      </div>
                      <div class="d-flex align-items-center justify-content-center pb-4">
                        <p class="mb-0 me-2">Belum Punya Akun</p>
                        <a class="btn btn-outline-primary m-3" href="{{ route('register') }}"> Buat Akun</a>
                        
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                  <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <h4 class="mb-4">Buka Simpanan Berjangka Semakin Mudah</h4>
                    <p class="small mb-0 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                      exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>

</html>

</html>