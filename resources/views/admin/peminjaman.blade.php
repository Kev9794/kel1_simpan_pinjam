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
                                    <a class="btn btn-info" href="/peminjaman/{{ $pinjam->id_peminjaman }}" data-toggle="modal" 
                                    data-target="#showModal">Show</a>
                                    <a class="btn btn-primary" href="/peminjaman/{{ $pinjam->id_peminjaman }}/edit" data-toggle="modal" 
                                    data-target="#exampleModal">Edit</a>
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
                            <button type="button" class="btn btn-success"><i class="fa fa-print"></i> Cetak Laporan</button>  
                        </div>
                    </div>
                </div>
            </div>
        <!-- Table End -->
        <!-- Show Modal -->
        <div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="showModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-center">
                        <h5 class="modal-title" id="showModalLabel"><b>Detail Peminjaman</b></h5>
                    </div>
                    <div class="modal-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>ID Peminjaman: </b>{{ $pinjam->id_peminjaman }}</li>
                        <li class="list-group-item"><b>Tanggal Pinjam: </b>{{ $pinjam->tgl_pinjam }}</li>
                        <li class="list-group-item"><b>Nama Peminjam: </b>{{ $pinjam->users->name }}</li>
                        <li class="list-group-item"><b>Jumlah: </b>{{ $pinjam->jumlah }}</li>
                        <li class="list-group-item"><b>Tenggat Waktu: </b>{{ $pinjam->tenggat_waktu }}</li> 
                    </ul> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Edit Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-center">
                        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Data</b></h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('peminjaman.update', $pinjam->id_peminjaman) }}" method="POST">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="tgl_pinjam" class="col-form-label">Tanggal Pinjam:</label>
                                <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="{{ $pinjam->tgl_pinjam }}" required>
                            </div>
                            <div class="form-group">
                                <label for="user_id" class="col-form-label">ID Peminjam:</label>
                                <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $pinjam->users->id }}" required>
                            </div>
                            <div class="form-group">
                                <label for="jumlah" class="col-form-label">Jumlah:</label>
                                <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $pinjam->jumlah }}" required>
                            </div>

                            <div class="form-group">
                                <label for="tenggat_waktu" class="col-form-label">Tenggat Waktu:</label>
                                <input type="date" class="form-control" id="tenggat_waktu" name="tenggat_waktu" value="{{ $pinjam->tenggat_waktu }}" required>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
@endsection