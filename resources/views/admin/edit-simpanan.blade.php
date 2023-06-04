@extends('layouts.admin')

@section('container')
        <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                        
                        <div class="navbar-nav w-100">
                            <a href="/deposit" class="nav-item nav-link"><i class="fa fa-arrow-left me-2"></i></a>
                        </div>

                        <div class="row justify-content-center align-items-center">
                            <div class="card pt-4 pb-3 mb-3" style="width: 60%;">
                            
                                <div class="card-header">
                                    <h5 class="text-center mb-3"><b>Edit Simpanan</b></h5>
                                </div>
                            
                            <div class="card-body">
                                <form action="{{ route('deposit.update', $simpanan->id_simpanan) }}" method="POST">
                                @method('put')
                                @csrf
                                <div class="form-group">
                                    <label for="tgl_simpan" class="col-form-label">Tanggal Simpan:</label>
                                    <input type="date" class="form-control" id="tgl_simpan" name="tgl_simpan" value="{{ $simpanan->tgl_simpan }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="user_id" class="col-form-label">ID Peminjam:</label>
                                    <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $simpanan->users->id }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah" class="col-form-label">Jumlah:</label>
                                    <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $simpanan->jumlah }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="saldo" class="col-form-label">Saldo:</label>
                                    <input type="number" class="form-control" id="saldo" name="saldo" value="{{ $simpanan->saldo }}" required>
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