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
                            <form action="#">
                                <div class="row">
                                    <!-- First Name -->
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <label>* NAMA</label>
                                            <input type="text" name="" placeholder="Enter name">
                                        </div>
                                    </div>
                                    <!-- Radio -->
                                    <div class="col-lg-12">
                                       <div class="single-form  d-flex">
                                            <label>* Jenis Kelamin :</label>
                                            <!--Radio Select -->
                                           <div class="select-radio6">
                                                <div class="radio">
                                                    <input id="radio" name="radio" type="radio" checked="">
                                                    <label for="radio-6" class="radio-label">Laki</label>
                                                </div>
                                                <div class="radio">
                                                    <input id="radio" name="radio" type="radio">
                                                    <label for="radio-7" class="radio-label">Perempuan</label>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <label>* Email Address</label>
                                            <input type="email" name="" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <!-- Last Name -->
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <label>* No Telp</label>
                                            <input type="text" name="" placeholder="Enter Number">
                                        </div>
                                    </div>
                                    <!-- Nice Select -->
                                    <div class="col-lg-12">
                                        <div class="single-form">
                                            <label>* Pekerjaan</label>
                                            <div class="select-option mb-10">
                                                <select name="select" id="select1">
                                                    <option value="">Pilih Kategori</option>
                                                    <option value="">Mahasiswa</option>
                                                    <option value="">PNS</option>
                                                    <option value="">UMUM</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Street Address -->
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <label>* Alamat</label>
                                            <input type="text" name="" placeholder="Enter Street Address">
                                        </div>
                                    </div>
                                    <!-- Jumlah Pinjaman -->
                                    <div class="col-lg-6">
                                       <div class="single-form">
                                            <label>* Jumlah Pinjaman</label>
                                            <input type="text" name="" placeholder="Enter name">
                                       </div>
                                    </div>
                                    </div>
                                </div>
                            </form>
                            <!-- End From -->
                            <!-- Form btn -->
                            <a href="#" class="btn apply-btn mt-30">SUBMIT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Apply Area End -->
@endsection