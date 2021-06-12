@extends('dashboard.master-user')

@section('name','Order Panel | Akudesain')

@section('content')
<div class="container my-5">

    <!-- Order List -->
    <section class="mt-5">
        <div class="row mb-3">
            <a href="/dashboard/order" class="btn" style="height:40px; width:180px;">
                <p class="color-oten" style="text-align: center;"><b>Daftar Pesanan</b></p>
            </a>
            <a href="/dashboard/user/ongoing" class="btn"
                style="height:40px; width:100px; background-color: rgb(206, 206, 206);">
                <p class="color-oten" style="text-align: center;"><b>Proses</b></p>
            </a>
            <a href="/dashboard/user/done" class="btn"
                style="height:40px; width:100px; background-color: rgb(206, 206, 206);">
                <p class="color-oten" style="text-align: center;"><b>Selesai</b></p>
            </a>
        </div>
        <div class="row">
            @foreach ($dataorder as $item)
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
                <form method="post">
                    <input type="text" id="name" name="name" value="{{$item->name}}" hidden>
                    <input type="text" id="no_hp" name="no_hp" value="{{$item->no_hp}}" hidden>
                    <button class="btn btn-success br-md" style="width: 40%; margin-right: 30%; margin-left: 30%;"
                        type="button" id="sendwa" name="sendwa">Konfirmasi</button>
                </form>
            </div>
            @endforeach
        </div>
    </section>
    <!-- End Order List -->
</div>
</section>
@endsection

@section('modal')

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

@endsection

@section('script')

<!-- Send WA-->
<script>
    $(document).ready(function() {
    $('#sendwa').click(function() {
        var name = $('#name').val();
        var nowa = $('#no_hp').val();
        var pesan = 
            ' **ADA PESANAN AKUDESAIN** \n\n' + 
            ' Hay saya ' + name + 
            '\n saya memesan design pada anda, mari lihat di aplikasi Akudesain.' + '\n\n' + 
            'www.akudesain.id/dashboard/designer';

        pesan = encodeURI(pesan);
        window.open('https://api.whatsapp.com/send?phone='+ nowa +'&text=' + pesan, '_blank');
    });
});
</script>
<!-- End Send WA-->

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