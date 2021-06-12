@extends('dashboard.master-user')

@section('name','Dashboard Panel | Akudesain')


@section('content')
<div class="container my-5">

    <!-- Order List -->
    <section class="mt-5">
        <div class="row mb-3">
            <a href="/dashboard/order" class="btn" style="height:40px; width:180px; background-color: rgb(206, 206, 206);">
                <p class="color-oten" style="text-align: center;"><b>Daftar Pesanan</b></p>
            </a>
            <a href="/dashboard/user/ongoing" class="btn"
                style="height:40px; width:100px; background-color: rgb(206, 206, 206);">
                <p class="color-oten" style="text-align: center;"><b>Proses</b></p>
            </a>
            <a href="/dashboard/user/done" class="btn" style="height:40px; width:100px;">
                <p class="color-oten" style="text-align: center;"><b>Selesai</b></p>
            </a>
        </div>
        <div class="row">
            @foreach ($dataprocess as $item)
            <div class="card-order"
                style="border: solid 4px rgba(0, 110, 255, 0.815);border-radius: 20px; height: 260px;">
                <div class="row mt-0">
                    <img class="profil-card mb-1" src="
                    
                    @if(!is_null($item->avatar))
                    {{asset('/assets/profile/'.$item->avatar)}}
                
                    @else
                    {{asset('/assets/profile/default.jpg')}}
                    @endif
                    
                    " alt="profil">
                    <p class="text-oten text_capital"
                        style="margin:5px 0; padding: 5px 0; font-size: 18px; font-weight: bold; line-height: 2">
                        {{$item->name}}
                    </p>
                </div>

                <p class="text-uppercase p-1 m-2 bold"
                    style="margin:5px 0; border-top:solid rgb(184, 184, 184) 1px; border-bottom:solid rgb(184, 184, 184) 1px;">
                    {{$item->title_design}}</p>

                <p class="ml-2 mr-2 mt-2 mb-3">{{$item->description}}</p>
                <div class="row m-2 ">
                    <p class="font-size-mini"><b>Deadline:</b> {{$item->deadline}}</p>
                    <p class="font-size-mini ml-auto"><b>Anggaran:</b> {{$item->budget}}</p>
                </div>

                <button class="btn btn-success" data-toggle="modal" data-target="#detailModal{{$item->id}}"
                    style="margin-right: 30%; margin-left: 30%; width:40%; font-size: 12px; line-height: 1.5; background-color:green; border-radius:10px !important;">
                    Lihat Rincian</button>
            </div>
            @endforeach
        </div>
    </section>
    <!-- End Order List -->
</div>
</section>
@endsection

@section('modal')
<!-- Modal detail-->
@foreach ($dataprocess as $item)
<div class="modal fade" id="detailModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="card-order modal-content"
            style="border: solid 4px rgba(0, 110, 255, 0.815);border-radius: 20px; min-height: 360px;">
            <div class="row mt-0">
                <img class="profil-card mb-1" src="{{asset('/assets/profile/'.$item->avatar)}}" alt="profil">
                <p class="text-oten text_capital"
                    style="margin:5px 0; padding: 5px 0; font-size: 18px; font-weight: bold; line-height: 2">
                    {{$item->name}}
                </p>
                <span class="ml-auto mr-2"><button type="button" class="close"
                        style="border-radius: 100%; margin-top:-10px; background-color: red; color:white; width: 30px; height:30px;"
                        data-dismiss="modal" aria-label="Close">
                        <span style="line-height: 0.2;" aria-hidden="true">&times;</span>
                    </button></span>
            </div>

            <p class="text-uppercase p-1 m-2 bold"
                style="margin:5px 0; border-top:solid rgb(184, 184, 184) 1px; border-bottom:solid rgb(184, 184, 184) 1px;">
                {{$item->title_design}}</p>

            <p class="ml-2 mr-2 mt-2 mb-3">{{$item->description}}</p>
            <div class="row m-2 ">
                <p class="font-size-mini"><b>Deadline:</b> {{$item->deadline}}</p>
                <p class="font-size-mini ml-auto"><b>Anggaran:</b> {{$item->budget}}</p>
            </div>
            <div class="row mx-auto">
                <img class="mx-2" style="height: 120px; width: 120px;" src="{{asset('/assets/design/'.$item->image1)}}"
                    alt="">
                <img class="mx-2" style="height: 120px; width: 120px;" src="{{asset('/assets/design/'.$item->image2)}}"
                    alt="">
                <img class="mx-2" style="height: 120px; width: 120px;" src="{{asset('/assets/design/'.$item->image3)}}"
                    alt="">
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- End Modal detail-->

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