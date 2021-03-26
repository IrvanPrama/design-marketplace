@extends('layout.master')

@section('name','Dashboard')

@section('nav-item')


<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
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
    </ul>

    <div class="btn-group">
        <button class="btn btn-primary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
            style="border-radius:18px;">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-3 ml-3 pt-2">
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
            <a class="dropdown-item" type="button" data-toggle="modal" data-target="#profileModal">Edit Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" type="button" data-toggle="modal" data-target="#reviewModal">Buat Review</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" type="button" href="{{route('logout')}}">Log Out</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Status <b>{{auth()->user()->role}}</b></a>
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
        <!-- Desain Terbaru -->
        <div class="col-lg-12">
            <div class="row">
                @foreach ($datadesign as $item)
                <div class="card br-0" style="border: solid 4px rgba(0, 110, 255, 0.815);height: 275px;">
                    <div class="row mt-0">
                        <img class="profil-card mb-0" src="{{asset('/assets/profile/'.$item->avatar)}}" alt="profil">
                        <p class="text-oten" style="margin:5px 0; padding: 5px 0; font-size: 18px; font-weight: bold;">
                            {{$item->name}}
                        </p>
                    </div>
                    <div class="image"
                        style="height: 220px; width:220px; background-image: url('{{asset('/assets/design/'.$item->design)}}'); background-repeat: no-repeat; background-size: cover; background-position: center; margin-right: 6px; margin-left: 6px;">
                    </div>
                    <p class="text-h3 text_capital text-oten" style="margin:5px 0;">{{$item->title}}</p>
                </div>
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

<!-- Modal Design-->
@foreach ($datadesign as $item)
<div class="modal fade" id="designModal{{$item->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content br-0">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="design-image d-flex justify-content-center">
                    <img style="height: auto; max-width: 50vw" src="{{asset('/assets/'.$item->design)}}" alt="design">
                </div>
                <div class="modal-footer">
                    <button data-toggle="modal" data-target="#editDesignModal{{$item->id}}" type="button"
                        class="btn btn-primary br-0">Edit</button>
                    <a type="button" href="{{url('delete-design', $item->id )}}" class="btn btn-danger br-0">Delete</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- End Modal Design-->

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
                    <div class="form-group mb-4">
                        <label for="title">Judul</label>
                        <input type="text" id="title" name="title" class="form-control" value="{{$item->title}}">
                    </div>
                    <div class="form-group mb-4">
                        <label for="name">Unggah Foto Profil</label>
                        <input type="file" name="design" class="form-control" value="{{$item->design}}">
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

@endsection

@section('footer')
@yield('footer-desc')
@endsection