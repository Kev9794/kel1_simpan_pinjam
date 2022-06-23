<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/style.css') }}">
</head>
<body>
    <section class="">
      <!-- Jumbotron -->
      <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
        <div class="container">
          <div class="row gx-lg-5 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
              <h1 class="my-5 display-3 fw-bold ls-tight">
                Masukkan Data Diri Anda <br />
              </h1>
            </div>
    
            <div class="col-lg-6 mb-5 mb-lg-0">
              <div class="card">
                <div class="card-body py-5 px-md-5">
                  <form>
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" id="form3Example1" class="form-control" placeholder="Name"/>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" id="form3Example1" class="form-control" placeholder="Username"/>
                        </div>
                      </div>
                    </div>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="email" id="form3Example3" class="form-control" placeholder="Email"/>
                    </div>
    
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input type="password" id="form3Example4" class="form-control" placeholder="Password"/>
                    </div>

                    <!-- Telp input -->
                    <div class="form-outline mb-4">
                      <input type="number" id="form3Example4" class="form-control" placeholder="No Telp"/>
                    </div>

                    <!-- Alamat input -->
                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example4" class="form-control" placeholder="Alamat"/>
                    </div>

    
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">
                      Sign up
                    </button>

                    <div class="d-flex align-items-center justify-content-center pb-4">
                        <p class="mb-0 me-2">Sudah Punya Akun</p>
                        <button type="button" class="btn btn-outline-primary m-3">Login</button>
                    </div>
    
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
</body>
</html>