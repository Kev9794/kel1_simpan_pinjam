@extends('layouts.edit-admin')
 
@section('content')
    <div class="row"> 
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h5 class="text-center">KOPERASI SIMPAN PINJAM</h5>
                <h4 class="text-center">LAPORAN SIMPANAN</h4>
                
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
            <th scope="col">ID Simpanan</th>
            <th scope="col">Tanggal Simpan</th>
            <th scope="col">Nama Penyimpan</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Saldo</th>
            </tr>
            @foreach ($simpanan as $simpan)
                <tr>
                    <td>{{ $simpan->id_simpanan }}</td>
                    <td>{{ $simpan->tgl_simpan }}</td>
                    <td>{{ $simpan->users->name }}</td>
                    <td>{{ $simpan->jumlah }}</td>
                    <td>{{ $simpan->saldo }}</td>
                </tr>
            @endforeach
        </table>
@endsection 