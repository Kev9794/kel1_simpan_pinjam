@extends('layouts.admin')

@section('container')
        <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Tabel Anggota</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ID Anggota</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Password</th>
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
                                    <td>{{ $user->password }}</td>
                                    <td>{{ $user->no_telp }}</td>
                                    <td>{{ $user->alamat }}</td>

                                    <td>
                                    <form action="{{ route('anggota.destroy',['users'=>$user->id]) }}" method="POST">
                        
                                            <a class="btn btn-info" href="{{ route('anggota.show',$user->id) }}">Show</a>

                                            <a class="btn btn-primary" href="{{ route('anggota.edit',$user->id) }}">Edit</a>

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger">Delete</button>
                                            
                
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>1</td>
                                        <td>John</td>
                                        <td>jhon@email.com</td>
                                        <td>xxxxxxxx</td>
                                        <td>09214891222</td>
                                        <td>Malang</td>
                                        <td>
                                        <button type="button" class="btn btn-primary">Edit</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Table End -->
@endsection