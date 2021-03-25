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
                <a class="dropdown-item" href="#">Desain Logo</a>
                <a class="dropdown-item" href="#">Desain Baju</a>
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
                @foreach ($datadesign as $item)
                <div class="card br-0" style="border: solid 4px rgba(0, 110, 255, 0.815);">
                    <div class="row mt-0">
                        <img class="profil-card mb-0" src="{{asset('/assets/profile/'.$item->avatar)}}" alt="profil">
                        <p class="profil-card-name text-oten mb-0">
                            {{$item->name}}
                        </p>
                    </div>
                    <div class="image"
                        style="height: 220px; width:220px; background-image: url('{{asset('/assets/'.$item->design)}}');margin-right:6px; margin-left:6px; orientation: center;">

                    </div>
                    {{-- <img src="{{ asset('/assets/'.$item->design) }}" class="card-img-top" alt="design"> --}}
                    <div class="card-footer">
                        <p class="card-text">{{$item->title}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- End Desain Terbaru -->

        <!-- Kenapa Harus AkuDesain -->
        <p class="text-h1 text-oten">Kenapa Harus AkuDesain?</p>
        <div class="row" style="margin-bottom: 100px;">
            <div class="col-lg-12">
                <div class="row text-center d-flex justify-content-center">
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

    <!-- Testimoni -->
    <div class="container">
        <p class="text-h1 text-oten" style="margin-bottom: 10px">Apa Kata Mereka?</p>
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row p-5 d-flex justify-content-center">
                                @foreach ($datareview as $item)
                                <div class="col-md-4">
                                    <div class="single-box">
                                        <div class="img-area">
                                            <img src="{{asset('/assets/profile/'.$item->avatar)}}" alt="profile">
                                        </div>
                                        <div class="img-text">
                                            <h2>{{$item->name}}</h2>
                                            <p>{{$item->review}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row p-5 d-flex justify-content-center">
                                @foreach ($datareview2 as $item)
                                <div class="col-md-4">
                                    <div class="single-box">
                                        <div class="img-area">
                                            <img src="{{asset('/assets/profile/'.$item->avatar)}}" alt="profile">
                                        </div>
                                        <div class="img-text">
                                            <h2>{{$item->name}}</h2>
                                            <p>{{$item->review}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
<div class="row">
    <div class="col-lg-5">
        <img src="../assets/logo.png" alt="logo" style="height: 35px; width: 200px; margin: 30px 0;">
        <p class="text-white">AkuDesain adalah sebuah platform yang memudahkan anda dalam menemukan
            jasa
            desain.
            Sistem AkuDesain
            sangat mudah dipakai, cepat dalam respon dan membantu and secara akurat untuk mencari
            freelancer
            yang tepat</p>
    </div>
    <div class="col-lg-2"></div>
    <div class="col-lg-5 text-white">
        <p style=" margin: 30px 0 10px 0; font-weight: bold;">Kontak Kami</p>
        <ul>
            <li>
                <a href="#" style="text-decoration: none; color: white;">
                    <div class="row">
                        <img src="{{asset('assets/ig.png')}}" alt="ig"
                            style="width: 18px; height: 18px; margin: 5px 10px;">
                        <p>akudesain_id</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" style="text-decoration: none; color: white;">
                    <div class="row">
                        <img src="{{asset('assets/facebook.png')}}" alt="fb" class="mini-icon"
                            style="width: 12px; height: 18px; margin: 5px 14px;">
                        <p>AkuDesain</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" style="text-decoration: none; color: white;">
                    <div class="row">
                        <img src="{{asset('assets/mail.png')}}" alt="mail"
                            style="width: 18px; height: 14px; margin: 5px 10px;">
                        <p>AkuDesain.official@gmail.com</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" style="text-decoration: none; color: white;">
                    <div class="row">
                        <img src="{{asset('assets/wa.png')}}" alt="wa"
                            style="width: 16px; height: 14px; margin: 5px 10px;">
                        <p>+62 87 776 966 876</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>

</div>
@endsection