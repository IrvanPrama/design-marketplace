@extends('layout.master')

@section('nav-item')
<form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Cari Desain" aria-label="Search"
        style="border-radius: 2px;">
    <button class="btn" style="color: rgba(128, 128, 128, 0.671); margin-left:-50px;" type="submit"><i
            class="fa fa-search"></i></button>
</form>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
            <a class="nav-link text-white" href="#">
                Portofolio
            </a>
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
        <div class="col-lg-12 bar-panel">
            <div class="row">
                <div class="col-lg text-center pr-1 pl-1 spc-panel">
                    <img src="{{asset('/assets/asset-2.png')}}" alt="image1" class="panel-img">
                    <p><b>Logo</b></p>
                </div>
                <div class="col-lg text-center pr-1 pl-1 spc-panel">
                    <img src="{{asset('/assets/asset-3.png')}}" alt="image1" class="panel-img">
                    <p><b>Kartu Nama</b></p>
                </div>
                <div class="col-lg text-center pr-1 pl-1 spc-panel">
                    <img src="{{asset('/assets/asset-4.png')}}" alt="image1" class="panel-img">
                    <p><b>Brosur</b></p>
                </div>
                <div class="col-lg text-center pr-1 pl-1 spc-panel">
                    <img src="{{asset('/assets/asset-5.png')}}" alt="image1" class="panel-img">
                    <p><b>Banner</b></p>
                </div>
                <div class="col-lg text-center pr-1 pl-1 spc-panel">
                    <img src="{{asset('/assets/asset-6.png')}}" alt="image1" class="panel-img">
                    <p><b>Feed IG</b></p>
                </div>
                <div class="col-lg text-center pr-1 pl-1 spc-panel">
                    <img src="{{asset('/assets/asset-7.png')}}" alt="image1" class="panel-img">
                    <p><b>CV</b></p>
                </div>
                <div class="col-lg text-center pr-1 pl-1 spc-panel">
                    <img src="{{asset('/assets/asset-8.png')}}" alt="image1" class="panel-img">
                    <p><b>Kaos</b></p>
                </div>
                <div class="col-lg text-center pr-1 pl-1 spc-panel">
                    <img src="{{asset('/assets/asset-9.png')}}" alt="image1" class="panel-img">
                    <p><b>Ilustrasi</b></p>
                </div>
                <div class="col-lg text-center pr-1 pl-1 spc-panel">
                    <img src="{{asset('/assets/asset-10.png')}}" alt="image1" class="panel-img">
                    <p><b>Jasa Lainnya</b></p>
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
        <p class="text-h1 text-oten mb-0" style="text-align: left;">Desain Terbaru</p>
        <div class="col-lg-12">
            <div class="row d-flex justify-content-center">
                @foreach ($datadesign as $item)
                <div class="card br-0" style="border: solid 4px rgba(0, 110, 255, 0.815);height: 275px;">
                    <div class="row mt-0">
                        <img class="profil-card mb-0" src="{{asset('/assets/profile/'.$item->avatar)}}" alt="profil">
                        <p class="text-oten" style="margin:5px 0; padding: 5px 0; font-size: 18px; font-weight: bold;">
                            {{$item->name}}
                        </p>
                    </div>
                    <div class="image"
                        style="height: 220px; width:220px; background-image: url('{{asset('/assets/design/'.$item->design)}}'); background-repeat: no-repeat; background-size: cover; background-position: center; margin-right: 6px; margin-left: 6px;">
                    </div>
                    <p class="text-h3 text_capital text-oten" style="margin:5px 0;">{{$item->title}}</p>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-4">
                <a href="" class="btn btn-success">Lihat Desain Lainnya</a>
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
        <div class="row mt-3">
            <div class="col-md-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row p-5 d-flex justify-content-center" style="padding-top: 5rem !important;">
                                @foreach ($datareview as $item)
                                <div class="col-md-4 text-center">
                                    <div class="profile">
                                        <img src="{{asset('/assets/profile/'.$item->avatar)}}" class="user"
                                            alt="profile">
                                        <h3 class="text_capital">{{$item->name}}</h3>
                                        <div class="text-area">
                                            <p class="text-review">"{{$item->review}}"</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row p-5 d-flex justify-content-center" style="padding-top: 5rem !important;">
                                @foreach ($datareview2 as $item)
                                <div class="col-md-4 text-center">
                                    <div class="profile">
                                        <img src="{{asset('/assets/profile/'.$item->avatar)}}" class="user"
                                            alt="profile">
                                        <h3 class="text_capital">{{$item->name}}</h3>
                                        <div class="text-area">
                                            <p class="text-review">"{{$item->review}}"</p>
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