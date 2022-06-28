@extends('layouts.admin')

@section('container')
        <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <button type="button" class="btn btn-success"><i class="fa fa-print"></i>Cetak Laporan</button>  
                            <h6 class="mt-3 mb-4">Tabel Peminjaman</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Peminjaman</th>
                                        <th scope="col">Tanggal Pinjam</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Tenggat Waktu</th>
                                        <th scope="col">Nama Peminjam</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                @foreach ($peminjaman as $pinjam)
                                <tr>
                                    <td>{{ $pinjam->id_peminjaman }}</td>
                                    <td>{{ $pinjam->tgl_pinjam }}</td>
                                    <td>{{ $pinjam->jumlah }}</td>
                                    <td>{{ $pinjam->tenggat_waktu }}</td>
                                    <td>{{ $pinjam->users->name }}</td>
                                    <td>
                                    <a class="btn btn-info" href="/peminjaman/{{ $pinjam->id_peminjaman }}">Show</a>
                                    <a class="btn btn-primary" href="/peminjaman/{{ $pinjam->id_peminjaman }}/edit" data-toggle="modal" data-target="#exampleModal">Edit</a>
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
                        </div>
                    </div>
                </div>
            </div>
        <!-- Table End -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="tgl_pinjam" class="col-form-label">Tanggal Pinjam:</label>
                        <input type="date" class="form-control" id="tgl_pinjam">
                    </div>
                    <div class="form-group">
                        <label for="jumlah" class="col-form-label">Jumlah:</label>
                        <input type="number" class="form-control" id="jumlah">
                    </div>
                    <div class="form-group">
                        <label for="tenggat_waktu" class="col-form-label">Tenggat Waktu:</label>
                        <input type="date" class="form-control" id="tenggat_waktu">
                    </div>
                    <div class="form-group">
                        <label for="user_id" class="col-form-label">Id Anggota:</label>
                        <input type="number" class="form-control" id="user_id">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
@endsection