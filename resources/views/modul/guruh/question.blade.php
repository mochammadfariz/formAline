@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <!-- Channel & Mata Kuliah -->
        <div class="col-lg-3 col-sm-12 col-xs-12">
            <div>
                <h5>
                    <img src="http://localhost:8000/asset/img/icon/television.svg" aria-hidden="true" height="30">
                    Teknik Informatika UG
                </h5>
                <h6>
                    <ul type="none">
                        <li style="margin:-10px 0;">
                            <img src="http://localhost:8000/asset/img/icon/college-graduation.svg" aria-hidden="true" height="30"> Rekayasa Komputasional
                        </li>
                    </ul>
                </h6>
            </div>
        
            <div class="mt-5">
                <h5>
                    <img src="http://localhost:8000/asset/img/icon/television.svg" aria-hidden="true" height="50" width="50">
                    Channel Ku
                </h5>
                <div>
                    <form action="#" class="search-wrap">
                        <div class="input-group w-100">
                            <input type="text" class="form-control" style="width:40%;" placeholder="Cari Channel">
            
                            <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                            </div>
                        </div>
                    </form> <!-- search-wrap .end// -->
                </div> <!-- col.// -->
                <hr>
                <h6>
                    <ul type="square">
                        <li style="margin:10px 0;">
                            <a href="" style="font-size:larger;">Rekayasa Komputasional</a>
                        </li>
                        <li style="margin:10px 0; font-weight:normal;">
                            <a href="" style="font-size:larger;">Sistem Basis Data 2</a>
                        </li>
                    </ul>
                    <div class="mt-3">
                        <a href="">+ Tambah Baru</a>
                    </div>
                </h6>
            </div>
            <div class="mt-5">
                <h5>
                    <img src="http://localhost:8000/asset/img/icon/college-graduation.svg" aria-hidden="true" height="50" width="50">
                    Mata Kuliah
                </h5>
                <div>
                    <form action="#" class="search-wrap">
                        <div class="input-group w-100">
                            <input type="text" class="form-control" style="width:40%;" placeholder="Cari Channel">
            
                            <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                            </div>
                        </div>
                    </form> <!-- search-wrap .end// -->
                </div> <!-- col.// -->
                <hr>
                <h6>
                        <ul type="square">
                                <li style="margin:10px 0;">
                                    <a href="" style="font-size:larger;">Sistem Keamanan Komputer</a>
                                </li>
                                <li style="margin:10px 0; font-weight:normal;">
                                    <a href="" style="font-size:larger;">Sistem Basis Data 2</a>
                                </li>
                                <li style="margin:10px 0; font-weight:normal;">
                                    <a href="" style="font-size:larger;">Algoritma Pemrograman Parallel</a>
                                </li>
                            </ul>
                    <div class="mt-3">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </div>
                </h6>
            </div>

            <a class="btn btn-primary" href="/home" role="button">Kembali</a>
        </div>

        <!-- Kumpulan Pertanyaan di Mata Kuliah -->
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <!-- Judul -->
                <div class="row">
                    <div class="col align-items-center" style="text-align:center;">
                        <h1>27</h1>
                        <h4 style="font-weight:normal;">Dilihat</h4>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <h4>
                                DVWA gak bisa diinstall di linux
                            </h4>
                        </div>
                        <div class="row">
                                <a class="btn btn-primary btn-sm" style="margin:2px 0;" href="#" role="button">DVWA</a>&nbsp;
                                <a class="btn btn-primary btn-sm" style="margin:2px 0;" href="#" role="button">Linux</a>&nbsp;
                                <a class="btn btn-primary btn-sm" style="margin:2px 0;" href="#" role="button">SKK</a>&nbsp;
                        </div>
                    </div>
                    <div class="col">
                        <div class="rowalign-items-start" style="text-align:right;">
                            <sup>Rabu, 03 Juli 2019</sup>
                        </div>
                        <div class="rowalign-items-end" style="text-align:right;">
                            Ditanyakan Oleh : <br>
                            <a href="">Dheo Prasetyo</a>
                        </div>
                    </div>
                </div>
                    
                <hr>
            <!-- End Judul -->

            <!-- Isi -->
                <div class="row">
                    <div class="col">
                        <p style="text-align:justify;">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Mollitia id sed possimus? Maxime ea dicta fugiat, aperiam illum voluptatum,
                            totam commodi repellendus ducimus ipsam explicabo corrupti eos eaque? Minima,
                            quaerat?
                        </p>
                        <img src="asset/img/pictures/setup-page.png" aria-hidden="true" style="display: block;margin-left: auto;margin-right: auto;width: 100%;height: auto;">

                    <p style="text-align:justify;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Mollitia id sed possimus? Maxime ea dicta fugiat.
                    </p>
                    </div>
                </div>
                
                <hr>
            <!-- End Isi -->

            <!-- Sorting -->
            <div class="row">
                <div class="col-3 justify-content-start" style="text-align:center;">                
                    <h1>27</h1>
                    <h4 style="font-weight:normal;">Dilihat</h4>
                </div>
                <div class="col">
                    <div class="dropdown" style="text-align:right;">
                        Urutkan Dari :<br>
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Jumlah Disukai
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Jumlah Balasan</a>
                            <a class="dropdown-item" href="#">Paling Baru</a>
                        </div>
                    </div>
                </div>
            </div>
                
                <hr>
            <!-- End Sorting -->
            
            <!-- Jawaban1 -->
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <p style="color:#25AE88;"><img src="http://localhost:8000/asset/img/icon/success.svg" width="20">
                                    Jabawan Terbaik Oleh Penanya
                                </p>
                            </div>
                            <div class="col">
                                <p style="text-align:right;"><sup>Kamis, 04 Juli 2019<br>Pukul 00:16 WIB</sup></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p style="text-align:justify;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non architecto, dolorem doloribus rem esse minima eius saepe nisi repellendus iure dignissimos temporibus delectus at amet. Consectetur reiciendis odio rerum quam!</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>
                                    <img src="http://localhost:8000/asset/img/icon/heart-invert-01.svg" width="40">
                                    2 Suka&nbsp;
                                    <img src="http://localhost:8000/asset/img/icon/add-comment-button-blue-01.svg" width="20">
                                    0 Balasan
                                </p>
                            </div>
                            <div class="col justify-content-end">
                                <p style="text-align:right;">
                                    Penjawab :<br>
                                    <a href="">Rafif Favian</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <hr>
            <!-- End Jawaban1 -->


            <!-- Jawaban2 -->
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                
                            </div>
                            <div class="col">
                                <p style="text-align:right;"><sup>Jumat, 05 Juli 2019<br>Pukul 10:06 WIB</sup></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p style="text-align:justify;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non architecto, dolorem doloribus rem esse minima eius saepe nisi repellendus iure dignissimos temporibus delectus at amet. Consectetur reiciendis odio rerum quam!</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                    <p>
                                        <img src="http://localhost:8000/asset/img/icon/heart-invert-01.svg" width="40">
                                        0 Suka&nbsp;
                                        <img src="http://localhost:8000/asset/img/icon/add-comment-button-blue-01.svg" width="20">
                                        0 Balasan
                                    </p>
                            </div>
                            <div class="col">
                                <p style="text-align:right;">
                                    Penjawab :<br>
                                    <a href="">Muhammad Guruh Ajinugroho</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <hr>
            <!-- End Jawaban2 -->
        </div>

        <!-- Profil & Pertanyaan-->
        <div class="col-lg-3 col-sm-12 col-xs-12">
            <div>
                <h5>
                    <img src="http://localhost:8000/asset/img/icon/graduate-student-avatar.svg" aria-hidden="true" height="50" width="50">
                    Profilku<br>
                    <a href="" style="font-size:smaller;font-weight:normal;">Klik untuk merubah</a>
                </h5>
                <hr>
                <ul type="square">
                    <li>Muhammad Guruh Ajinugroho</li>
                    <li>S1 - Jurusan Teknik Informatika Fakultas Teknologi Industri Universitas Gunadarma</li>
                    <li>Smester 7</li>
                </ul>
                <div style="text-align:right;">
                    <a class="btn btn-primary" href="#" role="button">Ajukan Pertanyaan</a>
                </div>
            </div>
            <div class="mt-5">
                <h5>
                    <img src="http://localhost:8000/asset/img/icon/form.svg" aria-hidden="true" height="50" width="50">
                    Pertanyaan Ku
                </h5>
                <hr>
                <h6>
                    <ul type="square">
                        <li style="margin:10px 0; font-weight:normal;">
                            Tanya Rumus Regresi <sup>(3 Jawaban)</sup>
                            <br>
                            <a href="" style="font-size:smaller;">Rekayasa Komputasional</a>
                        </li>
                        <li style="margin:10px 0; font-weight:normal;">
                            Perbedaan Join dan Subquery <sup>(5 Jawaban)</sup>
                            <br>
                            <a href="" style="font-size:smaller;">Sistem Basis Data 2</a>
                        </li>
                        <li style="margin:10px 0; font-weight:normal;">
                            Storing data xss-reflected <sup>(1 Jawaban)</sup>
                            <br>
                            <a href="" style="font-size:smaller;">Sistem Keamanan Komputer</a>
                        </li>
                    </ul>
                    <div class="mt-3">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </div>
                </h6>
            </div>
        </div>
    </div>
</div>
@endsection