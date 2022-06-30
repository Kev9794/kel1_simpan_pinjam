@extends('layouts.edit-admin')
 
@section('content')
    <div class="row"> 
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h5 class="text-center">KOPERASI SIMPAN PINJAM</h5>
                <h4 class="text-center">LAPORAN ANGGOTA KOPERASI</h4>
                
                <div class="text-left">
                    <p><b>ADMIN</b></p>
                    <p><b>Nama : </b>{{ auth()->user()->name }}</p>
                    <p><b>ID   : </b>{{ auth()->user()->id }}</p>
                    
                </div>
            </div>
        </div>
    </div>
   
    <table class="table table-bordered">
            <tr>
            <th scope="col">ID Anggota</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">No Telp</th>
            <th scope="col">Alamat</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->no_telp }}</td>
                    <td>{{ $user->alamat }}</td>
                </tr>
            @endforeach
        </table>
@endsection 