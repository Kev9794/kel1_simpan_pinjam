@extends('layouts.admin')

@section('container')
        <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                        <h4 class="mt-4 mb-4"><b>Tabel Anggota</b></h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Anggota</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">No Telp</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->no_telp }}</td>
                                    <td>{{ $user->alamat }}</td>

                                    <td>
                                    <a class="btn btn-info" href="/anggota/{{ $user->id }}">Show</a>
                                    <a class="btn btn-primary" href="/anggota/{{ $user->id }}/edit">Edit</a>
                                    <form action="/anggota/{{ $user->id }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf 
                                        <button class="btn btn-danger" onclick="return confirm('Anda yakin?')">Delete</button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <a class="btn btn-success" href="{{ route('cetak-anggota') }}"><i class="fa fa-print"></i> Cetak Laporan</a>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Table End -->
        <!-- Edit Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-center">
                        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Data</b></h5>
                    </div>
                    <div class="modal-body">
                        <form action="/anggota" method="POST">
                            
                            @csrf
                            <div class="form-group">
                                <label for="name" class="col-form-label">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="username" class="col-form-label">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-form-label">Email:</label>
                                <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-form-label">Password:</label>
                                <input type="text" class="form-control" id="password" name="password" required>
                            </div>
                        
                            <div class="form-outline mb-4">
                                <label for="no_telp" class="col-form-label">No Telp:</label>
                            <input type="number" id="no_telp" name="no_telp" class="form-control" value="{{ $user->no_telp }}" required>
                            </div>

                            <div class="form-outline mb-4">
                                <label for="alamat" class="col-form-label">Alamat:</label>  
                            <input type="text" id="alamat" name="alamat" class="form-control" value="{{ $user->alamat }}" required>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
@endsection