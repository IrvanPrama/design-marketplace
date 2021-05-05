@extends('dashboard.master-user')

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
                <a href="/dashboard/designer/edit-profile" class="btn bg-white color-oten"
                    style="height:40px; width:150px;">
                    <p class="color-oten" style="text-align: center;"><b>Profil</b></p>
                </a>
            </div>
        </section>
        <!-- End Menu Tab -->

        <!-- Content -->
        <section class="mb-5">
            <!-- Desain Terbaru -->
            <div class="col-lg-12 bg-white mt-0 px-4 py-4">
                <form class="mx-auto" style="width: 80%" action="/store-update-profile-user" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input class="form-control @error('name')
                        is-invalid
                        @enderror" placeholder="Nama Lengkap" type="text" name="name" id="input-edit"
                            value="{{auth()->user()->name}}">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="form-control  @error('username')
                        is-invalid
                        @enderror" placeholder="Username" type="text" name="username" id="input-edit"
                            value="{{auth()->user()->username}}">

                        @error('username')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea class="form-control  @error('about')
                        is-invalid
                        @enderror" type="text" name="about" rows="4" id="about">@if(is_null(auth()->user()->about))
Ceritakan sedikit tentang anda (max: 300 karakter)
@else 
{{auth()->user()->about}}
@endif
                        </textarea>

                        @error('about')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-row">
                        <div class="col-md-8 mb-3">
                            <label for="validationDefaultUsername">No. HP / Whatsapp</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend2">+62</span>
                                    </div>
                                    <input type="tel" value="{{auth()->user()->no_hp}}" id="now_hp" name="no_hp" class="form-control  @error('no_hp')
                                is-invalid
                                @enderror" id="validationDefaultUsername" placeholder="No. HP / WA"
                                        aria-describedby="inputGroupPrepend2" required>
                                </div>
                                @error('no_hp')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="born">Tgl. Lahir</label>
                            <input class="form-control  @error('born')
                        is-invalid
                        @enderror ml-2" value="{{auth()->user()->born}}" placeholder="Tanggal Lahir" type="date"
                                name="born" id="born">
                            @error('born')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="job">Pekerjaan</label>
                        <input class="form-control  @error('job')
                        is-invalid
                        @enderror" id="job" name="job" value="{{auth()->user()->job}}"
                            placeholder="PT. Indonesia Persada" type="text" id="input-edit">
                        @error('job')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button onclick="myFunction()" type="submit" class="btn btn-block btn-success">Simpan</button>
                </form>
            </div>
            <div class="col-lg-12 bg-white mt-0 px-4 my-2 py-4">
                <form class="mx-auto" style="width: 80%" action="/store-update-password" method="POST">
                    {{ csrf_field() }}
                    <p class="text-2">Edit Password</p>
                    <div class="form-group">
                        <input placeholder="Password Baru" type="password" name="password_lama" class="form-control  @error('name')
                        is-invalid
                        @enderror">
                    </div>
                    <div class="form-group">
                        <input placeholder="Confirm Password" type="password" name="password" class="form-control  @error('name')
                        is-invalid
                        @enderror">
                    </div>
                    <button type="submit" class="btn btn-success ml-auto">Ganti</button>
                </form>
            </div>
            <!-- End Desain Terbaru -->
        </section>
        <!-- End Content -->

    </div>

</body>

@endsection

@section('modal')
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
                <form action="/store-update-avatar" method="post" enctype="multipart/form-data">
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

@section('script')
<script>
    function myFunction() {
        var strr = $('#now_hp').val();

        str = strr.replace(/0(\d+)/, "$1");

        document.getElementById('now_hp').value = str;
        console.log(str)
    }
</script>
@endsection