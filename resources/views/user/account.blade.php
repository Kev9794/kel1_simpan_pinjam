<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Account</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/acount.css') }}">
</head>
    <body>
    <div class="hero-area2">
    
    <div class="container light-style flex-grow-1 container-p-y pt-4 pb-3">
        <div class="card overflow-hidden">
        <div class="row no-gutters row-bordered row-border-light">
            <div class="col-md-9">
                <div class="tab-content">
                    <div class="card-body">
                        <h5 class="font-weight-bold py-3 mb-0">Saldo Transaksi</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Simpanan</th>
                                        <th scope="col">Penarikan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Rp.</td>
                                        <td>Rp.</td>
                                    </tr>
                            </tbody>
                        </table>
                        <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Pinjaman</th>
                                        <th scope="col">Angsuran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Rp.</td>
                                        <td>Rp.</td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('success') }}
            </div>
        @endif
        <div class="container light-style flex-grow-1 container-p-y">
        <div class="card overflow-hidden">
        <div class="row no-gutters row-bordered row-border-light">
            <div class="col-md-9">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="account-general">
                        <h4 class="font-weight-bold py-3 mb-0 ml-3">Kelola Akun</h4>
                        <form method="post" action="{{ route('account.update', $users->id) }}" enctype="multipart/form-data">
                        @method('put')    
                        @csrf
                            <div class="card-body media align-items-center">
                                <input type="hidden" name="oldImage" value="{{ $users->image }}">
                                @if($users->image)
                                    <img src="{{ asset('storage/'.$users->image)}}" alt="" class="d-block ui-w-80">
                                @else
                                    <img alt="" class="d-block ui-w-80">
                                @endif
                                <div class="media-body ml-4">
                                <label class="btn btn-outline-primary">
                                    Upload Photo
                                    <input class="account-settings-fileinput" type="file" id="image" name="image">
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
                                            <input type="text" class="form-control mb-1" id="username" name="username" value="{{auth()->user()->username}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control mb-1" id="email" name="email" value="{{auth()->user()->email}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{auth()->user()->alamat}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{auth()->user()->name}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">No Telp</label>
                                            <input type="number" class="form-control" id="no_telp" name="no_telp" value="{{auth()->user()->no_telp}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div> 
                </div>
            </div>
        </div>
        </div>
            <div class="text-right mt-3">
                <button type="submit" class="btn btn-primary">Save Changes</button>&nbsp;
                </form>
                <a class="btn btn-outline-secondary" href="/account">Cancel</a>
            </div>
        </div>
        

        <div class="container light-style flex-grow-1 container-p-y pt-3">
            @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session('message') }}
            </div>
            @endif
        <div class="card overflow-hidden">
        <div class="row no-gutters row-bordered row-border-light">
            <div class="col-md-9">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="account-change-password">
                        <form method="post" action="{{ route('change') }}">
                        @csrf
                        <div class="card-body pt-0 pb-2">
                            <h4 class="font-weight-bold py-3 mb-0">Ubah Password</h4>
                            <div class="form-group">
                                <label class="form-label">Password Lama</label>
                                <input type="password" class="form-control" id="password_lama" name="password_lama">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Password Baru</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
            <div class="text-right mt-3">
                <button type="submit" class="btn btn-primary">Save Changes</button>&nbsp;
                <a class="btn btn-outline-secondary" href="/account">Cancel</a>
            </div>
            <div class="text-left mt-3 pb-4">
                <a class="btn btn-warning" href="/home">Back to Home</a>
            </div>
        </div>
    </form>
    </div>
    </body>
</html>