@extends('layouts.edit-admin')

@section('container')
<form>
    <h4 class="fw-bolder text-center">Edit Simpanan</h4>
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
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection