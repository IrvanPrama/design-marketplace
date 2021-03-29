@extends('layout.master')

@section('name', 'Detail Produk')

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
<div class="container">
    <div class="row mt-5 mb-5">
        <!-- Slide Galery -->
        <div class="col-lg-5" style="position: relative;">
            <div class="row mx-auto">
                @foreach ($dt as $item)
                <div class="mySlides mx-auto" style="z-index:1000;">
                    <div class="numbertext">1 / 3</div>
                    <img src="{{asset('/assets/design/'.$item->design1)}}" style="max-width:100%; height:400px;">
                </div>
                <div class="mySlides mx-auto" style="z-index:1000;">
                    <div class="numbertext">2 / 3</div>
                    <img src="{{asset('/assets/design/'.$item->design2)}}" style="max-width:100%; height:400px;">
                </div>
                <div class="mySlides mx-auto" style="z-index:1000;">
                    <div class="numbertext">3 / 3</div>
                    <img src="{{asset('/assets/design/'.$item->design3)}}" style="max-width:100%; height:400px;">
                </div>
                <div class="box mx-auto"
                    style="background-color: rgba(128, 128, 128, 0.459); width:450px; height:400px; margin-top:-400px;">
                </div>
                @endforeach
            </div>

            <!-- Thumbnail images -->
            <div class="row mt-3 mx-auto">
                <div class="d-flex justify-content-xl-between">
                    @foreach ($dt as $item)
                    <div class="column">
                        <img class="demo cursor" src="{{asset('/assets/design/'.$item->design1)}}"
                            style="width:130px; height:130px" onclick="currentSlide(1)" alt="The Woods">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="{{asset('/assets/design/'.$item->design2)}}"
                            style="width:130px; height:130px" onclick="currentSlide(2)" alt="Cinque Terre">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="{{asset('/assets/design/'.$item->design3)}}"
                            style="width:130px; height:130px" onclick="currentSlide(3)" alt="Mountains and fjords">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End Slide Galery -->

        <div class="col-lg-7">
            @foreach ($user as $item)
            <div class="row ml-4">
                <img src="{{asset('/assets/profile/'.$item->avatar)}}" class="br-full" style="height: 60px; width:60px"
                    alt="">
                <div class="row">
                    <div class="ml-4">
                        <h5 class="uppercase text-oten mb-1 text_capital"><b>{{$item->name}}</b></h5>
                        <p><b>{{$item->job}}</b></p>
                    </div>
                </div>
            </div>
            @endforeach

            @foreach ($dt as $item)
            <div class="row ml-4">
                <div class="" style="border: 2px solid rgb(27, 118, 238); border-radius: 18px;">
                    <div class="box m-4">
                        <h4 class="text-oten text_capital"><b>{{$item->title}}</b></h4>
                        <div class="underline mt-3 mb-3 pt-3 pb-3"
                            style="border-top: 1px solid rgba(128, 128, 128, 0.685); border-bottom: 1px solid rgba(128, 128, 128, 0.685); width:100%;">
                            <p>{{$item->description}}<br></p>
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
            @endforeach
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