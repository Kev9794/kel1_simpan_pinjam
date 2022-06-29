<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/acount.css') }}">
</head>
    <body>
        <div class="container light-style flex-grow-1 container-p-y">

        <h4 class="font-weight-bold py-3 mb-4">
        Account settings
        </h4>

        <div class="card overflow-hidden">
        <div class="row no-gutters row-bordered row-border-light">
            <div class="col-md-9">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="account-general">
                        <form action="" method="" enctype="multipart/form-data">
                            <div class="card-body media align-items-center">
                                <img src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" alt="" class="d-block ui-w-80">
                                <div class="media-body ml-4">
                                <label class="btn btn-outline-primary">
                                    Upload Photo
                                    <input type="file" class="account-settings-fileinput">
                                </label> &nbsp;
                                <div class="text-light small mt-1">JPG or PNG</div>
                                </div>
                            </div>

                            <hr class="border-light m-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Username</label>
                                            <input type="text" class="form-control mb-1" value="" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">E-mail</label>
                                            <input type="text" class="form-control mb-1" value="" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Alamat</label>
                                            <input type="text" class="form-control" value="" placeholder="Alamat">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Nama</label>
                                            <input type="text" class="form-control" value="" placeholder="Nama">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">No Telp</label>
                                            <input type="number" class="form-control" value="" placeholder="No-Telp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="tab-pane fade active show" id="account-change-password">
                        <div class="card-body pb-2">
                            <h4>Ubah Password</h4>
                            <div class="form-group">
                                <label class="form-label">Password Lama</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Password Baru</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                    </div>  
                    
                 
                    <div class="card-body">
                        <h4>Saldo Penyimpanan</h4>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Peminjaman</th>
                                            <th scope="col">Simpanan</th>
                                            <th scope="col">Penarikan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Rp.</td>
                                            <td>Rp.</td>
                                            <td>Rp.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
            <div class="text-right mt-3">
            <button type="button" class="btn btn-primary">Save changes</button>&nbsp;
            <button type="button" class="btn btn-default">Cancel</button>
            </div>
        </div>
    </body>
</html>