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
        <!-- Apply Area Start -->
        <div class="apply-area pt-150 pb-150">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="apply-wrapper">
                            <!-- Form -->
                            <form method="POST" action="{{ route('peminjaman.store') }}">
                                <div class="row">
                                    <!-- ID Peminjam -->
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <label>* ID PEMINJAM</label>
                                            <input type="text" name="user_id" value="{{ auth()->user()->id }}" readonly>
                                        </div>
                                    </div>
                                    <!-- Jumlah Pinjaman -->
                                    <div class="col-lg-6">
                                       <div class="single-form">
                                            <label>* Jumlah Pinjaman</label>
                                            <input type="number" name="jumlah" placeholder="Enter jumlah">
                                       </div>
                                    </div>
                                    <!-- Tanggal Peminjaman -->
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <label>* Tanggal Pinjam</label>
                                            <input type="date" id="tgl_pinjam" name="tgl_pinjam">
                                        </div>
                                    </div>
                                    <!-- Tenggat Waktu Pinjamm -->
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <label>* Tenggat Waktu Pinjam</label>
                                            <input type="date" id="tenggat_waktu" name="tenggat_waktu">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </form>
                            <!-- End From -->
                            <!-- Form btn -->
                            
                            <button class="btn apply-btn mt-30" type="submit">Ajukan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Apply Area End -->
@endsection