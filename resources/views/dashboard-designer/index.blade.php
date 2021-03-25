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
            <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Portofolio
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('logout')}}">Lihat Designer Populer</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Peringkat</a>
            </div>
        </li>
    </ul>
    @endif

    <div class="btn-group">
        <button class="btn btn-primary btn-lg" type="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-3 ml-3 mt-2">
                    <p class="text-white">{{auth()->user()->name}}</p>
                </li>
                <li class="nav-item">
                    <div class="nav-linkdropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('assets/user.png')}}" alt="profil" style="width: 40px; height:40px;">
                    </div>
                </li>
            </ul>
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" data-toggle="modal" data-target="#reviewModal">Buat Review</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('logout')}}">Log Out</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Level <b>{{auth()->user()->role}}</b></a>
        </div>
    </div>
</div>
@endsection


@section('content')
<div class="container">

    <!-- Judul -->
    <section>
        <p class="text-h1 text-oten" style="text-align: left; margin-bottom:10px;">Koleksi Design Kamu</p>
        <div class="btn btn-success" style="border-radius: 0" data-toggle="modal" data-target="#uploadModal"><span><i
                    class="fas fa-plus"></i></span>
            Upload Design
        </div>
    </section>
    <!-- End Judul -->

    <!-- Content -->
    <section>
        <div class="col-lg-12 mt-1" style="border-top: solid 3px rgb(0, 102, 255)">
            <div class="row">

                @foreach ($datadesign as $item)
                <div class="card br-0">
                    <img src="{{ asset('/assets/'.$item->design) }}" class="card-img-top" alt="design">
                    <div class="card-body">
                        <p class="card-text">{{$item->title}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
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