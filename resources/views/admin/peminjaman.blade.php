@extends('layouts.admin')

@section('container')
        <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <button type="button" class="btn btn-success"><i class="fa fa-print"></i>Cetak Laporan</button>  
                            <h6 class="mb-4">Tabel Peminjaman</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">id_pinjaman</th>
                                        <th scope="col">Tanggal Pinjam</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Jangka Waktu</th>
                                        <th scope="col">id_anggota</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>1</td>
                                        <td>5 Maret 2020</td>
                                        <td>Rp.5.000.000</td>
                                        <td>2 Bulan</td>
                                        <td>1</td>
                                        <td>
                                        <button type="button" class="btn btn-primary">Edit</button>
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
@endsection