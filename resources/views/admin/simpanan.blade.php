@extends('layouts.admin')

@section('container')
<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h5 class="mb-4 fw-bold">Tabel Simpanan</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">id_simpanan</th>
                            <th scope="col">Tanggal Simpan</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Saldo</th>
                            <th scope="col">id_anggota</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>1</td>
                            <td>5 Juni 2021</td>
                            <td>Rp.700.000</td>
                            <td>Rp.4.700.000</td>
                            <td>1</td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
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
                        <label for="tgl_simpan" class="col-form-label">Tanggal Simpan:</label>
                        <input type="date" class="form-control" id="tgl_simpan">
                    </div>
                    <div class="form-group">
                        <label for="jumlah" class="col-form-label">Jumlah:</label>
                        <input type="number" class="form-control" id="jumlah">
                    </div>
                    <div class="form-group">
                        <label for="saldo" class="col-form-label">Saldo:</label>
                        <input type="number" class="form-control" id="saldo">
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