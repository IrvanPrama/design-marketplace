@extends('dashboard-designer.master-designer')

@section('name','Edit | Akudesain')

@section('content')

<body style="background-color: rgb(231, 231, 231);">


    <div class="jumbotron-user jumbotron-fluid mt-0" style="padding-top:320px;">
        <div class="profil">
            <p class="text-1 mb-3 bold white">Edit Profil</p>
            <div class="mx-auto d-block" style="height:210px; width: 210px;" type="button" data-toggle="modal"
                data-target="#editAvatarModal">
                <img class="br-full" src="
                
                
                @if(!is_null(auth()->user()->avatar))
                {{asset('/assets/profile/'.auth()->user()->avatar)}}
            
                @else
                {{asset('/assets/profile/default.jpg')}}
                @endif
                
                " alt="" style="width: 200px; height: 200px;">
                <div class="br-full bg-white pt-2" style="height: 50px;
                width: 50px;
                margin-top: -55px;
                position: relative;
                z-index: 155;
                margin-left: 145px;"><i class="fas fa-camera fa-2x"></i></div>
            </div>
        </div>
    </div>

    <div class="container px-5 pb-5" style="margin-top: 170px;">

        <!-- Menu Tab -->
        <section class="col-lg-12 mt-5">
            <div class="row">
                <a href="/dashboard/designer/edit-profile" class="btn" style="height:40px; width:150px;">
                    <p class="color-oten" style="text-align: center;"><b>Profil</b></p>
                </a>
                <a href="/dashboard/designer/edit-portofolio" class="btn bg-white color-oten"
                    style="height:40px; width:150px;">
                    <p class=" color-oten" style="text-align: center;"><b>Portofolio</b></p>
                </a>
            </div>
        </section>
        <!-- End Menu Tab -->

        <!-- Content -->
        <section class="mb-5">
            <!-- Desain Terbaru -->
            <div class="col-lg-12 bg-white mt-0 px-4 py-4">
                <div class="row">
                    <div type="button" style="line-height: 1.8;" class="btn btn-success ml-auto mr-2 bold"
                        data-toggle="modal" data-target="#uploadModal">Tambah Portofolio</div>
                </div>
                <div class="row">
                    @foreach ($datadesign as $item)
                    <div class="card br-0" style="border: solid 4px rgba(0, 110, 255, 0.815);height: 275px;">
                        <span class="ml-auto" style="margin-right: -10px;">
                            <a href="/delete-design/{{$item->id}}" type="button" class="close text-center"
                                style="opacity:1;border-radius: 100px; margin-top:-10px; background-color: red; color:white; width: 30px; height:30px;">
                                <span style="line-height: 0.2;">&times;</span>
                            </a>
                        </span>
                        <div class="row mt-0">
                            <img class="profil-card mb-1" src=" 
                            
                            @if(!is_null(auth()->user()->avatar))
                            {{asset('/assets/profile/'.auth()->user()->avatar)}}
                        
                            @else
                            {{asset('/assets/profile/default.jpg')}}
                            @endif

                            " alt=" profil">
                            <p class="text-oten text_capital"
                                style="margin:5px 0; padding: 5px 0; font-size: 18px; font-weight: bold;">
                                {{$item->name}}
                            </p>
                        </div>
                        <div class="image"
                            style="height: 220px; width:220px; background-image: url('{{asset('/assets/design/'.$item->design1)}}'); background-repeat: no-repeat; background-size: cover; background-position: center; margin-right: 6px; margin-left: 6px;">
                        </div>
                        <p class="text-3 bold text_capital text-oten text-center" style="margin:5px 0;">
                            {{$item->title}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- End Desain Terbaru -->
        </section>
        <!-- End Content -->

    </div>

</body>
@endsection

@section('modal')
<!-- Modal Upload Design-->
<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="card-order modal-content" style="background-color: rgba(0, 110, 255, 0.815); min-height: 360px;">
            <div class="row">
                <div class="ml-auto">
                    <div style="opacity:1;background-color: red; color: white; width:30px; height: 30px; line-height: 1; margin-top: -10px;"
                        type="button" class="close br-full text-center" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </div>
                </div>
            </div>
            <form class=" px-4" action="/design/upload" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="text" id="name" name="name" class="form-control" value="{{auth()->user()->name}}" hidden>
                <input type="text" id="avatar" name="avatar" class="form-control" value="{{auth()->user()->avatar}}"
                    hidden>
                <input type="text" id="user_id" name="user_id" class="form-control" value="{{auth()->user()->id}}"
                    hidden>
                <div class="form-group">
                    <input class="form-control" id="title" name="title" style="border-radius: 0" placeholder="Judul">
                </div>
                <div class="form-floating">
                    <textarea class="form-control" rows="4" id="description" name="description"
                        style="border-radius: 0">Deskripsi</textarea>
                </div>
                <div class="form-group mt-3">
                    <select class="form-control br-0" name="category" class="custom-select" id="inputGroup">
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
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" placeholder="Lama pengerjaan" name="duration" class="form-control br-0">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" placeholder="Contoh: Rp.50.000" name="budget" class="form-control br-0">
                    </div>
                </div>
                <div class="form-row mt-2">
                    <div class="form-group col-md-4">
                        <input class="form-control" type="file" id="design1" name="design1" style="border-radius: 0">
                    </div>
                    <div class="form-group col-md-4">
                        <input class="form-control" type="file" id="design2" name="design2" style="border-radius: 0">
                    </div>
                    <div class="form-group col-md-4">
                        <input class="form-control" type="file" id="design3" name="design3" style="border-radius: 0">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-block btn-success br-0">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal Upload Design-->

<!-- Modal Edit Design-->
<div class="modal fade" id="editAvatarModal" tabindex="-1" z-index="10" role="dialog"
    aria-labelledby="exampleModalCenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content br-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Update Foto Profil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/store-update-avatar-designer" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group mb-4">
                        <label for="name">Unggah Foto</label>
                        <input type="file" name="avatar" class="form-control" value="{{auth()->user()->avatar}}">
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" style="border-radius: 0">Unggah</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Edit Design-->
@endsection