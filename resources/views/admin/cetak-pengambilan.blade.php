@extends('layouts.edit-admin')
 
@section('content')
    <div class="row"> 
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h5 class="text-center">KOPERASI SIMPAN PINJAM</h5>
                <h4 class="text-center">LAPORAN PENARIKAN</h4>
                
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
            <th scope="col">ID Penarikan</th>
            <th scope="col">Tanggal Penarikan</th>
            <th scope="col">Nama Penarik</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Saldo</th>
            </tr>
            @foreach ($pengambilan as $ambil)
                <tr>
                    <td>{{ $ambil->id_pengambilan }}</td>
                    <td>{{ $ambil->tgl_ambil }}</td>
                    <td>{{ $ambil->users->name }}</td>
                    <td>{{ $ambil->jumlah }}</td>
                    <td>{{ $ambil->saldo }}</td>
                </tr>
            @endforeach
        </table>
@endsection 