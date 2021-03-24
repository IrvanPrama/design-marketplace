@extends('layout.master')

@section('name','Dashboard')

@section('nav-item')


@if (auth()->user()->role === 'user')

<form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Cari Desain" aria-label="Search"
        style="border-radius: 2px;">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

@endif


<div class="collapse navbar-collapse" id="navbarSupportedContent">
    @if (auth()->user()->role === 'designer')
    <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Portofolio
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Lihat Designer Populer</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Peringkat</a>
            </div>
        </li>
    </ul>
    @endif

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
                <a class="dropdown-item" href="/review" data-toggle="modal" data-target="#reviewModal">Buat Review</a>
                <div class="dropdown-divider"></div>
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

    <!-- Judul -->
    <section>
        @if (auth()->user()->role === 'user')
        <p class="text-h1 text-oten" style="text-align: left;">Desain Terbaru</p>
        @else
        <p class="text-h1 text-oten" style="text-align: left; margin-bottom:10px;">Koleksi Design Kamu</p>
        <div class="btn btn-success" style="border-radius: 0" data-toggle="modal" data-target="#uploadModal"><span><i
                    class="fas fa-plus"></i></span>
            Upload Design
        </div>
        @endif
    </section>
    <!-- End Judul -->

    <!-- Content -->
    <div class="col-lg-12">
        <div class="row d-flex justify-content-center">
            <div class="card br-0">
                <img src="../assets/bayar.png" class="card-img-top" style="padding: 10px;" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of
                        the
                        card's content.</p>
                </div>
            </div>
            <div class="card br-0">
                <img src="../assets/bayar.png" class="card-img-top" style="padding: 10px;" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of
                        the
                        card's content.</p>
                </div>
            </div>
            <div class="card br-0">
                <img src="../assets/bayar.png" class="card-img-top" style="padding: 10px;" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of
                        the
                        card's content.</p>
                </div>
            </div>
            <div class="card br-0">
                <img src="../assets/bayar.png" class="card-img-top" style="padding: 10px;" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of
                        the
                        card's content.</p>
                </div>
            </div>
            <div class="card br-0">
                <img src="../assets/bayar.png" class="card-img-top" style="padding: 10px;" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of
                        the
                        card's content.</p>
                </div>
            </div>
            <div class="card br-0">
                <img src="../assets/bayar.png" class="card-img-top" style="padding: 10px;" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on </p>
                </div>
            </div>
            <div class="card br-0">
                <img src="../assets/bayar.png" class="card-img-top" style="padding: 10px;" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of
                        the
                        card's content.</p>
                </div>
            </div>
            <div class="card br-0">
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
    <!-- End Content -->

    <!-- Button Pesan -->
    <p class="text-h1 text-oten">Buat Designmu Sekarang!</p>
    <div class="row" style="margin-bottom: 100px;">
        <div class="col-lg-12 d-flex justify-content-center">
            <div class="btn btn-primary" style="border-radius: 0">Order Desain</div>
        </div>
    </div>
    <!-- End Button Pesan -->

</div>
</section>

<!-- Modal Review-->
<div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
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
                    <input type="text" id="user_id" name="user_id" class="form-control" value="{{auth()->user()->id}}"
                        hidden>
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input class="form-control" id="title" name="title" style="border-radius: 0"
                            placeholder="Color Spash dengan teknik photomorpic">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="file" id="design" name="design" style="border-radius: 0"
                            placeholder="Color Spash dengan teknik photomorpic">
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




@endsection

@section('footer')
@yield('footer-desc')
@endsection