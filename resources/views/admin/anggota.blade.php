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
                        </div>
                    </div>
                </div>
            </div>
        <!-- Table End -->
@endsection