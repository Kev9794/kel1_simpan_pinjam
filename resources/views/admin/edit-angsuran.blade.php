@extends('layouts.edit-admin')

@section('container')
<form>
    <h4 class="fw-bolder text-center">Edit Angsuran</h4>
    <div class="form-group">
        <label for="tgl_angsur" class="col-form-label">Tanggal Angsur:</label>
        <input type="date" class="form-control" id="tgl_angsur">
    </div>
    <div class="form-group">
        <label for="jumlah" class="col-form-label">Jumlah:</label>
        <input type="number" class="form-control" id="jumlah">
    </div>
    <div class="form-group">
        <label for="jumlah_sisa" class="col-form-label">Jumlah Sisa:</label>
        <input type="number" class="form-control" id="jumlah_sisa">
    </div>
    <div class="form-group">
        <label for="user_id" class="col-form-label">Id Anggota:</label>
        <input type="number" class="form-control" id="user_id">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection