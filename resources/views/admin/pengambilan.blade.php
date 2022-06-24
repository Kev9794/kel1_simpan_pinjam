@extends('layouts.admin')

@section('container')
        <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Tabel Pengambilan</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">id_pengambilan</th>
                                        <th scope="col">Tanggal Ambil</th>
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
                                        <td>15 September 2021</td>
                                        <td>Rp.900.000</td>
                                        <td>Rp.2.500.000</td>
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