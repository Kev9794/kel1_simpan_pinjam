@extends('layouts.admin')

@section('container')
        <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                        
                        <div class="navbar-nav w-100">
                            <a href="/peminjaman" class="nav-item nav-link"><i class="fa fa-arrow-left me-2"></i></a>
                        </div>

                        <div class="row justify-content-center align-items-center">
                            <div class="card pt-4 pb-3 mb-3" style="width: 60%;">
                            
                                <div class="card-header">
                                    <h5 class="text-center mb-3"><b>Edit Peminjaman</b></h5>
                                </div>
                            
                            <div class="card-body">
                                <form action="{{ route('peminjaman.update', $peminjaman->id_peminjaman) }}" method="POST">
                                @method('put')
                                @csrf
                                <div class="form-group">
                                    <label for="tgl_pinjam" class="col-form-label">Tanggal Pinjam:</label>
                                    <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="{{ $peminjaman->tgl_pinjam }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="user_id" class="col-form-label">ID Peminjam:</label>
                                    <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $peminjaman->users->id }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah" class="col-form-label">Jumlah:</label>
                                    <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $peminjaman->jumlah }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="tenggat_waktu" class="col-form-label">Tenggat Waktu:</label>
                                    <input type="date" class="form-control" id="tenggat_waktu" name="tenggat_waktu" value="{{ $peminjaman->tenggat_waktu }}" required>
                                </div>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                            
                            </div> 
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        <!-- Table End -->
=======
@extends('layouts.edit-admin')

@section('container')
<form>
    <h4 class="fw-bolder text-center">Edit Peminjaman</h4>
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
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection