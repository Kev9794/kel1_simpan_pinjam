@extends('layouts.main')

@section('container')

        <!-- Hero Start-->
        <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>Apply Form</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->
        @include('partials.apply')
        <!-- Apply Area Start -->
        <div class="apply-area pt-150 pb-150">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-8">
                        @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{ session('success') }}
                        </div>
                        @endif
                        <div class="apply-wrapper">
                            <p>PENARIKAN</p>
                            <!-- Form -->
                            <form method="POST" action="{{ route('tarik') }}">
                                @csrf
                                <div class="row">
                                    <!-- ID Peminjam -->
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <label>* ID PENARIK</label>
                                            <input type="text" id="user_id" name="user_id" value="{{ auth()->user()->id }}" readonly>
                                        </div>
                                    </div>
                                    <!-- Tenggat Waktu Pinjamm -->
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <label>* Tanggal Penarikan</label>
                                            <input type="date" id="tgl_ambil" name="tgl_ambil">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <label>* Jumlah</label>
                                            <input type="number" id="jumlah" name="jumlah">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <label>* Saldo</label>
                                            <input type="number" id="saldo" name="saldo">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn apply-btn mt-30" type="submit">TARIK</button>
                            </form>
                            <!-- End From -->
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Apply Area End -->
@endsection