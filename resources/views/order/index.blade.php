@extends('dashboard.master-user')

@section('name', 'Order | Akudesain')

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
                    <form class="m-3" action="/form/order/submit/no-direct" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                        <input type="hidden" name="name" value="{{auth()->user()->name}}">
                        <input type="hidden" name="avatar" value="{auth()->user()->avatar}}">
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <textarea name="description" type="text"
                                        class="form-control border-grey @error('description') is-invalid @enderror"
                                        style="height:100%;" placeholder="Deskripsikan dengan singkat pesanan anda"
                                        rows="4"></textarea>
                                    @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @error('example_img')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-3" style="padding-left: 0;">
                                <div class="box py-2"
                                    style="border-radius: 8px;  @error('example_img') border: 2px solid red !important; @enderror border: 2px solid grey;">
                                    <div class="row"><i class="fas fa-plus-circle mx-auto color-oten"></i></div>
                                    <div class="row mx-auto">
                                        <p class="text-oten p-1 text-center mx-auto"
                                            style="font-size: 10px; width:80%;">
                                            <b>Tambahkan gambar
                                                contoh
                                                pesanan</b>
                                        </p>
                                        <input type="file" name="example_img" id="example_img"
                                            class=" @error('example_img') is-invalid @enderror">
                                    </div>
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
                </div>
            </div>
        </div>
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
@endsection