@extends('dashboard.master-user')

@section('name', 'User Order | Akudesain')

@section('nav-item')
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
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
        <li class="nav-item dropdown">
            <a class="nav-link text-white" href="{{route('dashboard-design')}}">
                Portofolio
            </a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
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
                            <img class="br-full" src="
                            
                        @if(!is_null(auth()->user()->avatar))
                        {{asset('/assets/profile/'.auth()->user()->avatar)}}
                        @else
                        {{asset('/assets/profile/default.jpg')}}
                        @endif
                            
                            " alt="profil" style="width: 40px; height:40px;">
                        </div>
                    </li>
                </ul>
            </button>
            <div class="dropdown-menu">
                <a href="{{route('dashboard')}}" class="dropdown-item" type="button">Dashboard</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" type="button" data-toggle="modal" data-target="#profileModal">Edit Profil</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('logout')}}">Log Out</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" type="button" data-toggle="modal" data-target="#reviewModal">Buat Review</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Level <b>{{auth()->user()->role}}</b></a>
            </div>
        </div>
    </ul>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row mt-5 d-flef justify-content-center">
        <div class="col-lg-6 text-center">
            <div class="row">
                <h4 class="text-oten text_capital text-center mx-auto" style="width: 60%"><b>Temukan Design yang tepat
                        sesuai
                        kebutuhan
                        anda</b></h4>
            </div>
            <div class="row">
                <img style="max-width: 90%; height: 300px;" src="{{asset('/assets/order.png')}}" alt="order">
            </div>
        </div>
        <div class="col-lg-5">
            <div class="row">
                <h4 class="text-oten text_capital mx-auto"><b>Masukan Detail Pesanan anda</b></h4>
            </div>
            <div class="row">
                <div class="box border-oten" style="width:100%;">
                    @foreach ($datadesign as $item )
                    <form class="m-3" action="/form/order/submit" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="avatar" value="{{auth()->user()->avatar}}">
                        <input type="hidden" name="name" value="{{auth()->user()->name}}">
                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                        <input type="hidden" name="designer_id" value="{{$item->user_id}}">
                        <input type="hidden" name="title_design" value="{{$item->title}}">
                        <input type="hidden" name="design_id" value="{{$item->id}}">
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <textarea name="description" type="text"
                                        class="form-control border-grey @error('description') is-invalid @enderror"
                                        style="height:100%;" placeholder="Deskripsikan dengan singkat pesanan anda"
                                        rows="4">{{$item->description}}</textarea>
                                    @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @error('example_img')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-3" style="padding-left: 0;">
                                <div class="box" style="border-radius: 8px; border: 2px solid grey;">
                                    <img src="{{asset('assets/design/'.$item->design1)}}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-12">
                                <select name="category"
                                    class="form-control border-grey  @error('category') is-invalid @enderror"
                                    style="width: 100%" id="exampleFormControlSelect1">
                                    <option selected disabled>Kategori</option>
                                    <option value="kaos">Kaos</option>
                                    <option value="logo">Logo</option>
                                    <option value="brosur">Brosur</option>
                                    <option value="banner">Banner</option>
                                    <option value="poster">Poster</option>
                                    <option value="design cv">Design CV</option>
                                    <option value="illustrasi">Illustrasi</option>
                                    <option value="feed ig">Feed IG</option>
                                    <option value="jasa lainnya">Jasa Lainnya</option>
                                </select>
                                @error('category')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col pr-1">
                                <input
                                    class="form-control border-grey input-currency  @error('budget') is-invalid @enderror"
                                    type-currency="IDR" style="width: 100%" type="text" name="budget"
                                    placeholder="Anggaran (Rp)" autocomplete="off">
                                @error('budget')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col pl-1"><input
                                    class="form-control border-grey  @error('deadline') is-invalid @enderror"
                                    style="width: 100%" type="date" name="deadline" placeholder="Tanggal Deadline">
                                @error('deadline')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror</div>
                        </div>
                        <div class="col mt-3 mb-3" style="border-bottom: 1px solid rgb(131, 131, 131)"></div>
                        <div class="row mt-2">
                            <div class="col">
                                <input class="form-control border-grey" type="text" name="email" placeholder="Email"
                                    value="{{auth()->user()->email}}" disabled>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-2 pr-0">
                                <select class="form-control border-grey p-1" type="text" placeholder="No. Hp">
                                    <option value="0" selected>+62</option>
                                </select>
                            </div>
                            <div class="col-sm-10 pl-1">
                                <input class="form-control border-grey" type="text" name="no_hp"
                                    placeholder="No. Handphone / WA" value="{{auth()->user()->no_hp}}" disabled>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-block br-st mt-2 mb-2">Kirim Detail Pesanan
                        </button>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

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
                        <label for="name">No. Handphone</label>
                        <input type="text" id="no_hp" name="no_hp" class="form-control"
                            value="{{auth()->user()->no_hp}}">
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

@section('footer')
<div class="row">
    <div class="col-lg-5">
        <img src="{{asset('/assets/logo.png')}}" alt="logo" style="height: 35px; width: 200px; margin: 30px 0;">
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

<script>
    document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('input[type-currency="IDR"]').forEach((element) => {
  element.addEventListener("keyup", function (e) {
    let cursorPostion = this.selectionStart;
    let value = parseInt(this.value.replace(/[^,\d]/g, ""));
    let originalLenght = this.value.length;
    if (isNaN(value)) {
      this.value = "";
    } else {
      this.value = value.toLocaleString("id-ID", {
        currency: "IDR",
        style: "currency",
        minimumFractionDigits: 0
      });
      cursorPostion = this.value.length - originalLenght + cursorPostion;
      this.setSelectionRange(cursorPostion, cursorPostion);
    }
  });
});
} );
</script>
@endsection