@extends('layouts.admin')

@section('container')
        <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                        
                        <div class="navbar-nav w-100">
                            <a href="/cicilan" class="nav-item nav-link"><i class="fa fa-arrow-left me-2"></i></a>
                        </div>

                        <div class="row justify-content-center align-items-center">
                            <div class="card pt-4 pb-3 mb-3" style="width: 60%;">
                            
                                <div class="card-header">
                                    <h5 class="text-center mb-3"><b>Edit Angsuran</b></h5>
                                </div>
                            
                            <div class="card-body">
                                <form action="{{ route('cicilan.update', $angsuran->id_angsuran) }}" method="POST">
                                @method('put')
                                @csrf
                                <div class="form-group">
                                    <label for="tgl_Aangsur" class="col-form-label">Tanggal Angsur:</label>
                                    <input type="date" class="form-control" id="tgl_angsur" name="tgl_angsur" value="{{ $angsuran->tgl_angsur }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="user_id" class="col-form-label">ID Peminjam:</label>
                                    <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $angsuran->users->id }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah" class="col-form-label">Jumlah:</label>
                                    <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $angsuran->jumlah }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_sisa" class="col-form-label">Sisa Peminjaman:</label>
                                    <input type="number" class="form-control" id="jumlah_sisa" name="jumlah_sisa" value="{{ $angsuran->jumlah_sisa }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="tenggat_waktu" class="col-form-label">Sisa Tenggat Waktu:</label>
                                    <input type="date" class="form-control" id="sisa_tenggat_waktu" name="sisa_tenggat_waktu" value="{{ $angsuran->sisa_tenggat_waktu }}" required>
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
@endsection