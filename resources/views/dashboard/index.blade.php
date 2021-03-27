@extends('layout.master')

@section('name','Dashboard')

@section('nav-item')
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Cari Desain" aria-label="Search"
                style="border-radius: 2px;">
            <button class="btn" style="color: rgba(128, 128, 128, 0.671); margin-left:-50px;" type="submit"><i
                    class="fa fa-search"></i></button>
        </form>
        <li class="nav-item dropdown">
            <a class="nav-link text-white" href="{{route('dashboard-design')}}">
                Portofolio
            </a>
        </li>
    </ul>

    <div class="btn-group">
        <button class="btn btn-primary" style="border-radius: 18px" type="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-3 ml-3 mt-2">
                    <p class="text-white text_capital"><b>{{auth()->user()->name}}</b></p>
                </li>
                <li class="nav-item">
                    <div class="nav-linkdropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="br-full" src="{{asset('/assets/profile/'.auth()->user()->avatar)}}" alt="profil"
                            style="width: 40px; height:40px;">
                    </div>
                </li>
            </ul>
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" type="button" data-toggle="modal" data-target="#profileModal">Edit Profil</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('logout')}}">Log Out</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" type="button" data-toggle="modal" data-target="#reviewModal">Buat Review</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Level <b>{{auth()->user()->role}}</b></a>
        </div>
    </div>
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
                            <img src="{{asset('/assets/cari.png')}}" alt="cari" class="icon-md">
                            <p class="text-h3">Cari Desain yang Diinginkan</p>
                            <p>Anda bisa memilih desain yang diinginkan dengan melihat portofolio desain dari
                                para desainer sesuaikan keinginan anda</p>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="text-box">
                            <img src="{{asset('/assets/bayar.png')}}" alt="cari" class="icon-md">
                            <p class="text-h3">Isi Catata Desain dan Bayar</p>
                            <p>Isi catatan desain yang anda inginkan kemudian diskusikan bersama desainer
                                kemudian <br>
                                lakukan pembayaran yang aman <br> melalui akun AkuDesain</p>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="text-box">
                            <img src="{{asset('/assets/bayar.png')}}" alt="cari" class="icon-md">
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
        <p class="text-h1 text-oten mb-1" style="text-align: left;">Desain Terbaru</p>
        <div class="col-lg-12">
            <div class="row d-flex justify-content-center">
                @foreach ($datadesign as $item)
                <div class="card br-0" style="border: solid 4px rgba(0, 110, 255, 0.815);height: 275px;">
                    <div class="row mt-0">
                        <img class="profil-card mb-1" src="{{asset('/assets/profile/'.$item->avatar)}}" alt="profil">
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
                <a href="{{route('dashboard-design')}}" class="btn btn-success">Lihat Desain Lainnya</a>
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
    </div>
</section>

<!-- Modal Review-->
<div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content br-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tulis Review Kamu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/review/create" method="post">
                    {{ csrf_field() }}
                    <input type="text" name="name" class="form-control" value="{{auth()->user()->name}}" hidden>
                    <input type="text" name="user_id" class="form-control" value="{{auth()->user()->id}}" hidden>
                    <input type="text" name="avatar" class="form-control" value="{{auth()->user()->avatar}}" hidden>
                    <div class="form-group">
                        <textarea class="form-control" name="review" rows="4" style="border-radius: 0"
                            placeholder="Pengerjaan designnya cepat, harga bisa menyesuaikan . . ."></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" style="border-radius: 0">Kirim Review</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Review-->

<!-- Modal Profil-->
<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content br-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Unggah Foto Profil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/profile/update" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group mb-4">
                        <label for="name">Nama</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{auth()->user()->name}}">
                    </div>
                    <div class="form-group mb-4">
                        <label for="name">Unggah Foto Profil</label>
                        <input type="file" name="avatar" class="form-control" value="{{auth()->user()->avatar}}">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" style="border-radius: 0">Unggah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Profil-->

@endsection