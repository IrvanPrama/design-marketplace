@extends('layout.master')
@section('name','Detail Produk')

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
        <button class="btn" style="border-radius: 18px" type="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
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
<div class="container">
    <div class="row mt-5 mb-5">

        <!-- Slide Galery -->
        <div class="col-lg-5" style="position: relative;">
            <div class="row">
                <div class="mySlides">
                    <div class="numbertext">1 / 3</div>
                    <img src="{{asset('assets/design/a.jpg')}}" style="width:94%; height:400px;">
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 3</div>
                    <img src="{{asset('assets/design/palugada.jpg')}}" style="width:94%; height:400px;">
                </div>

                <div class="mySlides">
                    <div class="numbertext">3 / 3</div>
                    <img src="{{asset('assets/design/a.jpg')}}" style="width:94%; height:400px;">
                </div>
            </div>
            <!-- Thumbnail images -->
            <div class="row mt-3">
                <div class="d-flex justify-content-xl-between">
                    <div class="column">
                        <img class="demo cursor" src="{{asset('assets/design/a.jpg')}}"
                            style="width:130px; height:130px" onclick="currentSlide(1)" alt="The Woods">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="{{asset('assets/design/palugada.jpg')}}"
                            style="width:130px; height:130px" onclick="currentSlide(2)" alt="Cinque Terre">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="{{asset('assets/design/a.jpg')}}"
                            style="width:130px; height:130px" onclick="currentSlide(3)" alt="Mountains and fjords">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slide Galery -->

        <div class="col-lg-7">
            <div class="row ml-4">
                <img src="{{asset('/assets/profile/default.jpg')}}" class="rounded" style="height: 60px; width:60px"
                    alt="">
                <div class="row">
                    <div class="ml-4">
                        <h5 class="uppercase text-oten mb-1"><b>Nama Designer</b></h5>
                        <p><b>Pekerjaan</b></p>
                    </div>
                </div>
            </div>
            <div class="row ml-4">
                <div class="" style="border: 2px solid rgb(27, 118, 238); border-radius: 18px;">
                    <div class="box m-4">
                        <h4 class="text-oten"><b>Desain Brosur 3 Lipat</b></h4>
                        <div class="underline mt-3 mb-3 pt-3 pb-3"
                            style="border-top: 1px solid rgba(128, 128, 128, 0.685); border-bottom: 1px solid rgba(128, 128, 128, 0.685); width:100%;">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, eaque. Lorem ipsum
                                dolor
                                sit amet consectetur adipisicing elit. Sequi, quidem. Lorem ipsum dolor sit amet.
                                <br></p>
                            <p>
                                <b>Langkah Pengerjaan</b>
                                <br>1. Anda Order / Konsultasi materi desaindan jelaskan detail kebutuhan desain anda.
                                <br>2. Saya kirimkan penawaran harga setelah ada kesepakatan
                                <br>3. Anda kirim materi desain yang diperlukan dan saya mulai mengerjakan lalu
                                kirimkan
                                hasil desain / dummy (revisi jika diperlukan)
                                <br>4. Saya kirim hasil akhir desain seteah di setujui
                            </p>
                        </div>
                        <span><i class="far fa-clock" style="font-size: 20px"></i></span> Lama Pengerjaan: 3 Hari</p>
                        <div class="row">

                            <div class="btn btn-success mr-auto ml-auto" style="width: 35%">Pesan Sekarang</div>
                            <div class="btn btn-success mr-auto ml-auto" style="width: 35%">Chat Designer</div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
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

@section('script')
<script>
    var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
@endsection