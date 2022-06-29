@extends('layouts.admin')

@section('container')

            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-6">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4 dashboard-info" style="background: linear-gradient(135deg, #17ead9 0%, #6078ea 100%); height: 8em">
                            <i class="fa fa-user fa-3x text-light"></i>
                            <div class="ms-1">
                                <p class="mb-2 text-light fw-bold">Total Anggota</p>
                                <h4 class="mb-0 text-light fw-bold">{{ auth()->user()->count() - 1 }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-6">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4 dashboard-info" style="background: linear-gradient(135deg, #17ead9 0%, #6078ea 100%); height: 8em">
                            <i class="fa fa-credit-card fa-3x text-light"></i>
                            <div class="ms-2">
                                <p class="mb-2 text-light fw-bold">Total Peminjaman</p>
                                <h4 class="mb-0 text-light fw-bold">$100000</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-6">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4 dashboard-info" style="background: linear-gradient(135deg, #17ead9 0%, #6078ea 100%); height: 8em">
                            <i class="fa fa-university fa-3x text-light"></i>
                            <div class="ms-3">
                                <p class="mb-2 text-light ">Total Simpanan</p>
                                <h6 class="mb-0 text-light fw-bold">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-6">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4 dashboard-info" style="background: linear-gradient(135deg, #17ead9 0%, #6078ea 100%); height: 8em">
                            <i class="fa fa-calculator fa-3x text-light"></i>
                            <div class="ms-3">
                                <p class="mb-2 text-light ">Total Penarikan</p>
                                <h6 class="mb-0 text-light fw-bold">$1234</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4 mb-5">
                <div class="row g-4 d-flex justify-content-center">
                    <div class="col-sm-12 col-md-6 col-xl-5">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-5">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Progress Bar</h6>
                            <div class="pg-bar mb-3">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="pg-bar mb-3">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="pg-bar mb-3">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="pg-bar mb-0">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widgets End -->
@endsection