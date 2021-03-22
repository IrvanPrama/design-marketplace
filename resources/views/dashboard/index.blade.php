@extends('layout.master')

@section('name','Dashboard')

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
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item mt-3">
            <p class="text-white">{{auth()->user()->name}}</p>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{asset('assets/user.png')}}" alt="profil" style="width: 40px; height:40px;">
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Log Out</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Level <b>{{auth()->user()->role}}</b></a>
            </div>
        </li>
    </ul>
</div>
@endsection


@section('content')
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
    <p class="text-h1 text-oten">Buat Designmu Sekarang!</p>
    <div class="row" style="margin-bottom: 100px;">
        <div class="col-lg-12 d-flex justify-content-center">
            <div class="btn btn-primary">Order Desain</div>
        </div>
    </div>
    <!-- End Kenapa Harus AkuDesain -->
</div>


</section>

@endsection