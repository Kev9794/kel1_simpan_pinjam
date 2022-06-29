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