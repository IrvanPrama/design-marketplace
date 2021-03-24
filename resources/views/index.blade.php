@extends('layout.master')

@section('nav-item')
<form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Cari Desain" aria-label="Search"
        style="border-radius: 2px;">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Portofolio
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
            </div>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link text-white" href="{{route('signup')}}">Daftar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{route('login')}}">Masuk</a>
        </li>

        <li class="btn btn-success">
            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true" style="padding:0; color: white">Buat
                Pesanan</a>
        </li>
    </ul>
</div>
@endsection


@section('content')
<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4 text-white" style="font-weight: 500;">Temukan Desain
            Anda<br>Dengan Mudah
        </h1>
        <p class="text-white" style="font-size: 20px;">Sebuah media yang mempermudah anda<br>menemukan jasa
            desain
        </p>
        <div class="btn btn-success" style="text-transform: uppercase;">Pesan Sekarang</div>
    </div>
</div>
<!-- End Jumbotron -->

<!-- Bar Panel -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 bar-panel">
            <div class="row">
                <div class="col-lg">
                    <img src="../assets/box.png" alt="image1" class="panel-img">
                </div>
                <div class="col-lg">
                    <img src="../assets/box.png" alt="image1" class="panel-img">
                </div>
                <div class="col-lg">
                    <img src="../assets/box.png" alt="image1" class="panel-img">
                </div>
                <div class="col-lg">
                    <img src="../assets/box.png" alt="image1" class="panel-img">
                </div>
                <div class="col-lg">
                    <img src="../assets/box.png" alt="image1" class="panel-img">
                </div>
                <div class="col-lg">
                    <img src="../assets/box.png" alt="image1" class="panel-img">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bar Panel -->
</section>

<!-- Main Content -->
<section id="content">
    <!-- Cara Order -->
    <div class="container">
        <div class="text-h1">
            <p class="text-oten">Cara Order Desain</p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row text-center d-flex justify-content-center">
                    <div class="col-lg">
                        <div class="text-box">
                            <img src="../assets/cari.png" alt="cari" class="icon-md">
                            <p class="text-h3">Cari Desain yang Diinginkan</p>
                            <p>Anda bisa memilih desain yang diinginkan dengan melihat portofolio desain dari
                                para desainer sesuaikan keinginan anda</p>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="text-box">
                            <img src="../assets/bayar.png" alt="cari" class="icon-md">
                            <p class="text-h3">Isi Catata Desain dan Bayar</p>
                            <p>Isi catatan desain yang anda inginkan kemudian diskusikan bersama desainer
                                kemudian <br>
                                lakukan pembayaran yang aman <br> melalui akun AkuDesain</p>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="text-box">
                            <img src="../assets/phone.png" alt="cari" class="icon-md">
                            <p class="text-h3">Desain Selesai</p>
                            <p>Desain yang anda inginkan <br> selesai tepat waktu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cara Order -->

    <div class="container">
        <!-- Desain Terbaru -->
        <p class="text-h1 text-oten" style="text-align: left;">Desain Terbaru</p>
        <div class="col-lg-12">
            <div class="row d-flex justify-content-center">
                <div class="card">
                    <div class="row">
                        <img class="profil-card" src="../assets/box.png" alt="profil">
                        <p class="profil-card-name text-oten">Wawan Hendrawan</p>
                    </div>
                    <img src="../assets/bayar.png" class="card-img-top" style="padding: 10px;" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the
                            card's content.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="row">
                        <img class="profil-card" src="../assets/box.png" alt="profil">
                        <p class="profil-card-name text-oten">Wawan Hendrawan</p>
                    </div>
                    <img src="../assets/bayar.png" class="card-img-top" style="padding: 10px;" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the
                            card's content.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="row">
                        <img class="profil-card" src="../assets/box.png" alt="profil">
                        <p class="profil-card-name text-oten">Wawan Hendrawan</p>
                    </div>
                    <img src="../assets/bayar.png" class="card-img-top" style="padding: 10px;" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the
                            card's content.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="row">
                        <img class="profil-card" src="../assets/box.png" alt="profil">
                        <p class="profil-card-name text-oten">Wawan Hendrawan</p>
                    </div>
                    <img src="../assets/bayar.png" class="card-img-top" style="padding: 10px;" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the
                            card's content.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="row">
                        <img class="profil-card" src="../assets/box.png" alt="profil">
                        <p class="profil-card-name text-oten">Wawan Hendrawan</p>
                    </div>
                    <img src="../assets/bayar.png" class="card-img-top" style="padding: 10px;" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the
                            card's content.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="row">
                        <img class="profil-card" src="../assets/box.png" alt="profil">
                        <p class="profil-card-name text-oten">Wawan Hendrawan</p>
                    </div>
                    <img src="../assets/bayar.png" class="card-img-top" style="padding: 10px;" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the
                            card's content.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="row">
                        <img class="profil-card" src="../assets/box.png" alt="profil">
                        <p class="profil-card-name text-oten">Wawan Hendrawan</p>
                    </div>
                    <img src="../assets/bayar.png" class="card-img-top" style="padding: 10px;" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the
                            card's content.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="row">
                        <img class="profil-card" src="../assets/box.png" alt="profil">
                        <p class="profil-card-name text-oten">Wawan Hendrawan</p>
                    </div>
                    <img src="../assets/bayar.png" class="card-img-top" style="padding: 10px;" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the
                            card's content.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Desain Terbaru -->

        <!-- Kenapa Harus AkuDesain -->
        <p class="text-h1 text-oten">Kenapa Harus AkuDesain?</p>
        <div class="row" style="margin-bottom: 100px;">
            <div class="col-lg-12">
                <div class="row text-center  d-flex justify-content-center">
                    <div class="col-lg">
                        <div class="text-box">
                            <img src="../assets/choose.png" alt="cari" class="icon-md">
                            <p class="text-h3">Kemudahan Dalam Memilih Desain</p>
                            <p> <br>Pilih desain yang anda inginkan dengan berbagai pilihan desain yang sesuai
                                dengan keperluan anda serta kemudahan dalam revisi desain</p>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="text-box">
                            <img src="../assets/user.png" alt="cari" class="icon-md">
                            <p class="text-h3">Kemudahan dan Keamanan Pembayaran</p>
                            <p>Metode pembayaran yang beragam akan memudahkan anda. Serta pembayaran akan kami
                                pegang terlebih dahulu sebelum kami teruskan ke desainer sehingga transaksi menjadi
                                aman</p>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="text-box">
                            <img src="../assets/working.png" alt="cari" class="icon-md">
                            <p class="text-h3">Jaminan Harga Terjangkau</p>
                            <p> <br>Dapatkan desain yang anda inginkan dengan harga terjangkau</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Kenapa Harus AkuDesain -->
    </div>
</section>

@endsection

@section('footer')
@yield('footer-desc')
@endsection