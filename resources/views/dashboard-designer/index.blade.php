@extends('layout.master')

@section('name','Dashboard')

@section('nav-item')
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <div class="btn-group">
            <button class="btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="border-radius:18px;">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-3 ml-3 pt-2">
                        <p class="text-white text_capital"><b>{{auth()->user()->name}}</b></p>
                    </li>
                    <li class="nav-item">
                        <div class="nav-linkdropdown-toggle text-white" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                class="br-full" src="{{asset('/assets/profile/'.auth()->user()->avatar)}}" alt="profil"
                                style="width: 40px; height:40px;">
                        </div>
                    </li>
                </ul>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" type="button" data-toggle="modal" data-target="#profileModal">Edit Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" type="button" data-toggle="modal" data-target="#reviewModal">Buat Review</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" type="button" href="{{route('logout')}}">Log Out</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Status <b>{{auth()->user()->role}}</b></a>
            </div>
        </div>
    </ul>
</div>
@endsection


@section('content')
<div class="container my-5">

    <!-- Order List -->
    <section class="mt-5">
        <h2 class="text-oten" style="text-align: left; margin-bottom:10px;"><b>Daftar Pesanan</b></h2>
        <div class="row">
            @foreach ($dataorder as $item)
            <div class="col-xl-3 col-md-6 mb-4" type="button" data-toggle="modal"
                data-target="#orderModal{{$item->id}}">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body py-1">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{$item->name}}
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 text_capital">{{$item->category}}
                                </div>
                            </div>
                            <div class="col-auto">
                                <img class="br-full" style="width: 50px; height:50px;"
                                    src="{{asset('assets/profile/'.$item->avatar)}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- End Order List -->

    <!-- Judul -->
    <section class="mt-5">
        <h2 class="text-oten" style="text-align: left; margin-bottom:10px;"><b>Koleksi Design Kamu</b> </h2>
        <div class="btn btn-success" style="border-radius: 0" data-toggle="modal" data-target="#uploadModal"><span><i
                    class="fas fa-plus"></i></span>
            Upload Design
        </div>
    </section>
    <!-- End Judul -->

    <!-- Content -->
    <section class="mb-5">
        <!-- Desain Terbaru -->
        <div class="col-lg-12">
            <div class="row">
                @foreach ($datadesign as $item)
                <a href="/detail/{{$item->id}}" class="card br-0"
                    style="border: solid 4px rgba(0, 110, 255, 0.815);height: 275px;" data-toggle="modal"
                    data-target="#designModal{{$item->id}}">
                    <div class="row mt-0">
                        <img class="profil-card mb-1" src="{{asset('/assets/profile/'.$item->avatar)}}" alt="profil">
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
        </div>
        <!-- End Desain Terbaru -->
    </section>
    <!-- End Content -->
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

<!-- Modal Upload Design-->
<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content br-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Unggah Design Kamu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/design/upload" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="text" id="name" name="name" class="form-control" value="{{auth()->user()->name}}"
                        hidden>
                    <input type="text" id="avatar" name="avatar" class="form-control" value="{{auth()->user()->avatar}}"
                        hidden>
                    <input type="text" id="user_id" name="user_id" class="form-control" value="{{auth()->user()->id}}"
                        hidden>
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input class="form-control" id="title" name="title" style="border-radius: 0"
                            placeholder="Design Brosur">
                    </div>
                    <div class="form-floating">
                        <label for="description">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description"
                            style="border-radius: 0"></textarea>
                        <label for="description">Contoh: Siap mengerjakan Disain Brosur untuk menunjang promosi produk
                            atau event anda baik untuk media online maupun media cetak dengan resvisi unlimited selama
                            jam kerja.</label>
                    </div>
                    <div class="form-group row">
                        <input class="" type="file" id="design1" name="design1" style="border-radius: 0">
                        <input class="" type="file" id="design2" name="design2" style="border-radius: 0">
                        <input class="" type="file" id="design3" name="design3" style="border-radius: 0">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary br-0">Unggah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Upload Design-->

<!-- Modal Design-->
@foreach ($datadesign as $item)
<div class="modal fade" id="designModal{{$item->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content br-0">
            <div class="modal-header">
                <h5 class="text-oten text_capital">{{$item->title}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Thumbnail images -->
                <div class="row my-3 d-flex justify-content-around">
                    <img class="img" src="{{asset('/assets/design/'.$item->design1)}}" style="width:200px; height:200px"
                        alt="The Woods">

                    <img class="img" src="{{asset('/assets/design/'.$item->design2)}}" style="width:200px; height:200px"
                        alt="Cinque Terre">

                    <img class="img" src="{{asset('/assets/design/'.$item->design3)}}" style="width:200px; height:200px"
                        alt="Mountains and fjords">
                </div>
                <div class="modal-footer">
                    <button data-toggle="modal" data-target="#editDesignModal{{$item->id}}" type="button"
                        class="btn btn-primary br-0">Edit</button>
                    <a type="button" href="{{url('delete-design', $item->id )}}" class="btn btn-danger br-0">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- End Modal Design-->

<!-- Modal Order Detail -->
@foreach ($dataorder as $item)
<div class="modal fade" id="orderModal{{$item->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content br-0">
            <div class="modal-header">
                <h5 class="text-oten text_capital">Pesanan {{$item->category}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex justify-content-center">
                <div class="row mx-auto">
                    <div class="col-sm-6">
                        <div class="row mx-auto">
                            <img style="height: 265px; max-width:100%"
                                src="{{asset('assets/order/'.$item->example_img)}}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6 mx-auto">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text_capital">Nama: {{$item->name}}</li>
                            <li class="list-group-item">Deskripsi: <br>{{$item->description}}</li>
                            <li class="list-group-item">No. Hp: {{$item->no_hp}}</li>
                            <li class="list-group-item">Email: {{$item->email}}</li>
                            <li class="list-group-item">Anggaran: <br> {{$item->budget}}
                            <li class="list-group-item">Deadline: <br> {{$item->deadline}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a type="button" href="" class="btn btn-block btn-primary br-0">Hubungi
                    Pemesan</a>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- End Order Detail -->

<!-- Modal Edit Design-->
@foreach ($datadesign as $item)
<div class="modal fade" id="editDesignModal{{$item->id}}" tabindex="-1" z-index="10" role="dialog"
    aria-labelledby="exampleModalCenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content br-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Design</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/design/update/{{$item->id}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="text" id="name" name="name" class="form-control" value="{{$item->name}}">
                    <div class="form-group mb-4">
                        <label for="title">Judul</label>
                        <input type="text" id="title" name="title" class="form-control" value="{{$item->title}}">
                    </div>
                    <div class="form-group mb-4 form-floating">
                        <label for="description">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" rows="4"
                            placeholder="contoh: Siap mengerjakan Disain Brosur untuk menunjang promosi produk atau event anda baik untuk media online maupun media cetak dengan resvisi unlimited selama jam kerja."
                            style="border-radius: 0">{{$item->description}}</textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label for="name">Unggah Design 1</label>
                        <input type="file" name="design1" class="form-control" value="{{$item->design1}}">
                        <label for="name">Unggah Design 2</label>
                        <input type="file" name="design2" class="form-control" value="{{$item->design2}}">
                        <label for="name">Unggah Design 3</label>
                        <input type="file" name="design3" class="form-control" value="{{$item->design3}}">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" style="border-radius: 0">Unggah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- End Modal Edit Design-->


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
                        <input type="file" name="avatar" class="form-control">
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

@section('footer')
@yield('footer-desc')
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