@extends('layouts.admin')

@section('container')
        <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                        <div class="navbar-nav w-100">
                        <a href="/pengambilan" class="nav-item nav-link"><i class="fa fa-arrow-left me-2"></i></a>
                        </div>

                        <div class="row justify-content-center align-items-center">
                        <div class="card pt-4 pb-3" style="width: 60%;">
                            <div class="card-header">
                            <h5 class="text-center mb-3"><b>Detail Penarikan</b></h5>
                            </div>
                            <div class="card-body mb-0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>ID Penarikan: </b>{{ $pengambilan->id_pengambilan }}</li>
                                <li class="list-group-item"><b>Tanggal Penarikan: </b>{{ $pengambilan->tgl_ambil }}</li>
                                <li class="list-group-item"><b>Nama Penarik: </b>{{ $pengambilan->users->name }}</li>
                                <li class="list-group-item"><b>Jumlah: </b>{{ $pengambilan->jumlah }}</li>
                                <li class="list-group-item"><b>Saldo: </b>{{ $pengambilan->saldo }}</li> 
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