@extends('layouts.edit-admin')
 
@section('content')
    <div class="row"> 
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h5 class="text-center">KOPERASI SIMPAN PINJAM</h5>
                <h4 class="text-center">LAPORAN PEMINJAMAN</h4>
                
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
                <th scope="col">ID Peminjaman</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Nama Peminjam</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Tenggat Waktu</th>
            </tr>
            @foreach ($peminjaman as $pinjam)
                <tr>
                    <td>{{ $pinjam->id_peminjaman }}</td>
                    <td>{{ $pinjam->tgl_pinjam }}</td>
                    <td>{{ $pinjam->users->name }}</td>
                    <td>{{ $pinjam->jumlah }}</td>
                    <td>{{ $pinjam->tenggat_waktu }}</td>
                </tr>
            @endforeach
        </table>
@endsection 