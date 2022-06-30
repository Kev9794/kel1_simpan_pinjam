@extends('layouts.admin')

@section('container')
        <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h4 class="mt-4 mb-4"><b>Tabel Peminjaman</b></h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Peminjaman</th>
                                        <th scope="col">Tanggal Pinjam</th>
                                        <th scope="col">Nama Peminjam</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Tenggat Waktu</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                @foreach ($peminjaman as $pinjam)
                                <tr>
                                    <td>{{ $pinjam->id_peminjaman }}</td>
                                    <td>{{ $pinjam->tgl_pinjam }}</td>
                                    <td>{{ $pinjam->users->name }}</td>
                                    <td>{{ $pinjam->jumlah }}</td>
                                    <td>{{ $pinjam->tenggat_waktu }}</td>
                                    <td>
                                    <a class="btn btn-info" href="/peminjaman/{{ $pinjam->id_peminjaman }}">Show</a>
                                    <a class="btn btn-primary" href="/peminjaman/{{ $pinjam->id_peminjaman }}/edit">Edit</a>
                                    <form action="/peminjaman/{{ $pinjam->id_peminjaman }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf 
                                        <button class="btn btn-danger" onclick="return confirm('Anda yakin?')">Delete</button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <a class="btn btn-success" href="{{ route('cetak-peminjaman') }}"><i class="fa fa-print"></i> Cetak Laporan</a>  
                        </div>
                    </div>
                </div>
            </div>
        <!-- Table End -->
@endsection