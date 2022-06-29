@extends('layouts.admin')

@section('container')
        <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                        <div class="navbar-nav w-100">
                        <a href="/anggota" class="nav-item nav-link"><i class="fa fa-arrow-left me-2"></i></a>
                        </div>

                        <div class="row justify-content-center align-items-center">
                        <div class="card pt-4 pb-3 mb-3" style="width: 60%;">
                            <div class="card-header">
                            <h5 class="text-center mb-3"><b>Edit Anggota</b></h5>
                            </div>
                            
                            <div class="card-body">
                            <form method="post" action="{{ route('anggota.update', $users->id) }}" id="myForm" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name" class="col-form-label">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $users->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="username" class="col-form-label">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" value="{{ $users->username }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-form-label">Email:</label>
                                <input type="text" class="form-control" id="email" name="email" value="{{ $users->email }}" required>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-form-label">Password:</label>
                                <input type="text" class="form-control" id="password" name="password" required>
                            </div>
                        
                            <div class="form-outline mb-4">
                                <label for="no_telp" class="col-form-label">No Telp:</label>
                            <input type="number" id="no_telp" name="no_telp" class="form-control" value="{{ $users->no_telp }}" required>
                            </div>

                            <div class="form-outline mb-4">
                                <label for="alamat" class="col-form-label">Alamat:</label>  
                            <input type="text" id="alamat" name="alamat" class="form-control" value="{{ $users->alamat }}" required>
                            </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            </div>
                            
                        </div> 
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        <!-- Table End -->
@endsection