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
                        <div class="card pt-4 pb-3" style="width: 60%;">
                            <div class="card-header">
                            <h5 class="text-center mb-3"><b>Detail Angsuran</b></h5>
                            </div>
                            <div class="card-body mb-0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>ID Angsuran: </b>{{ $angsuran->id_angsuran }}</li>
                                <li class="list-group-item"><b>Tanggal Angsur: </b>{{ $angsuran->tgl_angsur }}</li>
                                <li class="list-group-item"><b>Nama Pengangsur: </b>{{ $angsuran->users->name }}</li>
                                <li class="list-group-item"><b>Jumlah: </b>{{ $angsuran->jumlah }}</li>
                                <li class="list-group-item"><b>Sisa Peminjaman: </b>{{ $angsuran->jumlah_sisa }}</li>
                                <li class="list-group-item"><b>Tenggat Waktu: </b>{{ $angsuran->sisa_tenggat_waktu }}</li> 
                            </ul> 
                            </div>
                            
                        </div> 
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        <!-- Table End -->
@endsection