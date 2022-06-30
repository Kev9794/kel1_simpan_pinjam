@extends('layouts.admin')

@section('container')
        <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h4 class="mt-4 mb-4"><b>Tabel Penarikan</b></h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Penarikan</th>
                                        <th scope="col">Tanggal Penarikan</th>
                                        <th scope="col">Nama Penarik</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Saldo</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                @foreach ($pengambilan as $ambil)
                                <tr>
                                    <td>{{ $ambil->id_pengambilan }}</td>
                                    <td>{{ $ambil->tgl_ambil }}</td>
                                    <td>{{ $ambil->users->name }}</td>
                                    <td>{{ $ambil->jumlah }}</td>
                                    <td>{{ $ambil->saldo }}</td>
                                    <td>
                                    <a class="btn btn-info" href="/pengambilan/{{ $ambil->id_pengambilan }}">Show</a>
                                    <a class="btn btn-primary" href="/pengambilan/{{ $ambil->id_pengambilan }}/edit">Edit</a>
                                    <form action="/pengambilan/{{ $ambil->id_pengambilan }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf 
                                        <button class="btn btn-danger" onclick="return confirm('Anda yakin?')">Delete</button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <a class="btn btn-success" href="{{ route('cetak-pengambilan') }}"><i class="fa fa-print"></i> Cetak Laporan</a> 
                        </div>
                    </div>
                </div>
            </div>
        <!-- Table End -->
@endsection