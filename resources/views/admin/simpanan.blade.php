@extends('layouts.admin')

@section('container')
        <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h4 class="mt-4 mb-4"><b>Tabel Simpanan</b></h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Simpanan</th>
                                        <th scope="col">Tanggal Simpan</th>
                                        <th scope="col">Nama Penyimpan</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Saldo</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                @foreach ($simpanan as $simpan)
                                <tr>
                                    <td>{{ $simpan->id_simpanan }}</td>
                                    <td>{{ $simpan->tgl_simpan }}</td>
                                    <td>{{ $simpan->users->name }}</td>
                                    <td>{{ $simpan->jumlah }}</td>
                                    <td>{{ $simpan->saldo }}</td>
                                    <td>
                                    <a class="btn btn-info" href="/deposit/{{ $simpan->id_simpanan }}">Show</a>
                                    <a class="btn btn-primary" href="/deposit/{{ $simpan->id_simpanan }}/edit">Edit</a>
                                    <form action="/deposit/{{ $simpan->id_simpanan }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf 
                                        <button class="btn btn-danger" onclick="return confirm('Anda yakin?')">Delete</button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <a class="btn btn-success" href="{{ route('cetak-simpanan') }}"><i class="fa fa-print"></i> Cetak Laporan</a>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Table End -->
@endsection