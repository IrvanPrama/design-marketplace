@extends('layout.master')

@section('name','Design List | Akudesain')

@section('nav-item')
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li>
            <form action="{{route('search')}}" method="get" class="form-inline my-2 my-lg-0" autocomplete="off">
                <input name="q" class="form-control mr-sm-2" type="search" placeholder="Cari Desain"
                    style="border-radius: 2px;">
                <button class="btn" style="color: rgba(128, 128, 128, 0.671); margin-left:-50px;" type="submit"><i
                        class="fa fa-search"></i></button>
            </form>
        </li>
        @if (is_null(auth()->user()))
        <li class="nav-item">
            <a class="nav-link text-white" href="{{route('design')}}">
                Portofolio
            </a>
        </li>
        @endif
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link text-white" href="{{route('signup')}}">Daftar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{route('login')}}">Masuk</a>
        </li>

        <li class="btn btn-success">
            <a class="nav-link" href="{{route('order')}}" tabindex="-1" aria-disabled="true"
                style="padding:0; color: white">Buat
                Pesanan</a>
        </li>
    </ul>
    </ul>
    @if (auth()->user())
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown mr-2 pt-1">
            <a class="nav-link text-white text_capital">
                {{auth()->user()->job}}
            </a>
        </li>
        <li class="nav-item dropdown mr-2">
            <button class="btn" style="border-radius: 18px" type="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <div type="button" class="nav-linkdropdown-toggle text-white" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="br-full" src="@if(!is_null(auth()->user()->avatar))
                        {{asset('/assets/profile/'.auth()->user()->avatar)}}
                        @else
                        {{asset('/assets/profile/default.jpg')}}
                        @endif" alt="profil" style="width: 40px; height:40px;">
                        </div>
                    </li>
                    <li class="nav-item mr-3 ml-3 mt-2">
                        <p class="text-white text_capital"><b>{{auth()->user()->name}}</b></p>
                    </li>
                </ul>
            </button>
            <div class="dropdown-menu">
                <a href="{{route('dashboard')}}" class="dropdown-item" type="button">Dashboard</a>
                <div class="dropdown-divider"></div>
                <a href="/dashboard/user/edit-profile" class="dropdown-item" type="button">Edit Profil</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('logout')}}">Log Out</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" type="button" data-toggle="modal" data-target="#reviewModal">Buat Review</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Level <b>{{auth()->user()->role}}</b></a>
            </div>
        </li>
    </ul>
    @endif
</div>
@endsection

@section('content')
<div class="container">
    <!-- Desain Terbaru -->
    <h2 class="text-h2 text-oten mb-1 text-center" style="text-align: left;">Portofolio AkuDesain</h2>
    <h3 class="text-sedang mb-5 text-center" style="text-align: left;">Lihat portofolio terbaik kami dengan berbagai
        macam
        pilihan desain<br>yang sesuai dengan kebutuhan anda</h3>
    <div class="col-lg-12 mb-2">
        <div class="row">
            <div class="dropdown">
                <div class="btn btn-primary category mr-2 dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Katagori</div>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="public/design?category=logo">Logo</a>
                    <a class="dropdown-item" href="public/design?category=kartu nama">Kartu Nama</a>
                    <a class="dropdown-item" href="public/design?category=brosur">Brosur</a>
                    <a class="dropdown-item" href="public/design?category=banner">Banner</a>
                    <a class="dropdown-item" href="public/design?category=feed ig">Feed IG</a>
                    <a class="dropdown-item" href="public/design?category=cv">Curriculum Vitae (CV)</a>
                    <a class="dropdown-item" href="public/design?category=kaos">Kaos</a>
                    <a class="dropdown-item" href="public/design?category=ilustrasi">Ilustrasi</a>
                    <a class="dropdown-item" href="public/design?category=jasa">Jasa Lainnya</a>
                </div>
            </div>
            <a class="btn btn-primary latest dropdown-toggle" href="public/design" type="button">Terbaru</a>
        </div>
        @if (is_null($datadesign))
        <div class="error">
            Data Tidak Ada
        </div>
        @else
        <div class="row d-flex justify-content-center">
            @foreach ($datadesign as $item)
            <a href="/dashboard/detail/{{$item->id}}" class="card br-0"
                style="border: solid 4px rgba(0, 110, 255, 0.815);height: 275px;">
                <div class="row mt-0">
                    <img class="profil-card mb-1" src="
                    @if(!is_null($item->avatar))
                    {{asset('/assets/profile/'.$item->avatar)}}
                    @else
                    {{asset('/assets/profile/default.jpg')}}
                    @endif" alt="profil">
                    <p class="text-oten text_capital"
                        style="margin:5px 0; padding: 5px 0; font-size: 18px; font-weight: bold;">
                        {{$item->name}}
                    </p>
                </div>
                <div class="image"
                    style="height: 220px; width:220px; background-image: url('{{asset('/assets/design/'.$item->design1)}}'); background-repeat: no-repeat; background-size: cover; background-position: center; margin-right: 6px; margin-left: 6px;">
                </div>
                <p class="text-h3 text_capital text-oten" style="margin:5px 0;">{{$item->title}}</p>
            </a>
            @endforeach
        </div>
        @endif
        <div class="d-flex justify-content-center mt-4">
            <a href="{{route('order')}}" class="btn btn-success">Pesan Sekarang</a>
        </div>
    </div>
    <!-- End Desain Terbaru -->
</div>
@endsection

@section('footer')
<div class="row">
    <div class="col-lg-5">
        <img src="{{asset('assets/logo.png')}}" alt="logo" style="height: 35px; width: 200px; margin: 30px 0;">
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