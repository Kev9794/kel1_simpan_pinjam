@extends('layouts.edit-admin')
 
@section('content')
    <div class="row"> 
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h5 class="text-center">KOPERASI SIMPAN PINJAM</h5>
                <h4 class="text-center">LAPORAN ANGSURAN</h4>
                
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
            <th scope="col">ID Angsuran</th>
            <th scope="col">Tanggal Angsur</th>
            <th scope="col">Nama Pengangsur</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Sisa Peminjaman</th>
            <th scope="col">Sisa Tenggat Waktu</th>
            </tr>
            @foreach ($angsuran as $angsur)
                <tr>
                    <td>{{ $angsur->id_angsuran }}</td>
                    <td>{{ $angsur->tgl_angsur }}</td>
                    <td>{{ $angsur->users->name }}</td>
                    <td>{{ $angsur->jumlah }}</td>
                    <td>{{ $angsur->jumlah_sisa }}</td>
                    <td>{{ $angsur->sisa_tenggat_waktu }}</td>
                </tr>
            @endforeach
        </table>
@endsection 