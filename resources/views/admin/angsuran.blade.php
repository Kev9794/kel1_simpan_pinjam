@extends('layouts.admin')

@section('container')
        <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h4 class="mt-4 mb-4"><b>Tabel Angsuran</b></h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Angsuran</th>
                                        <th scope="col">Tanggal Angsur</th>
                                        <th scope="col">Nama Pengangsur</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Sisa Peminjaman</th>
                                        <th scope="col">Sisa Tenggat Waktu</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                @foreach ($angsuran as $angsur)
                                <tr>
                                    <td>{{ $angsur->id_angsuran }}</td>
                                    <td>{{ $angsur->tgl_angsur }}</td>
                                    <td>{{ $angsur->users->name }}</td>
                                    <td>{{ $angsur->jumlah }}</td>
                                    <td>{{ $angsur->jumlah_sisa }}</td>
                                    <td>{{ $angsur->sisa_tenggat_waktu }}</td>
                                    <td>
                                    <a class="btn btn-info" href="/angsuran/{{ $angsur->id_angsuran }}">Show</a>
                                    <a class="btn btn-primary" href="/angsuran/{{ $angsur->id_angsuran }}/edit">Edit</a>
                                    <form action="/angsuran/{{ $angsur->id_angsuran }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf 
                                        <button class="btn btn-danger" onclick="return confirm('Anda yakin?')">Delete</button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <a class="btn btn-success" href="{{ route('cetak-angsuran') }}"><i class="fa fa-print"></i> Cetak Laporan</a>  
                        </div>
                    </div>
                </div>
            </div>
        <!-- Table End -->
@endsection