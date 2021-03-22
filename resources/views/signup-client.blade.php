@extends('layout.master')

@section('name', 'Client Signup')
@section('content')
<!-- Daftar Button -->
<div class="container" style="margin-bottom: 50px">
    <div class="col-lg-12 d-flex justify-content-center mt-5">
        <div class="col-lg-5" style="border-right: 4px solid rgb(0, 162, 255);">
            <div>
                <img src="../assets/daftar.png" alt="" style="width: 40%; height: 40%; margin: 0 40% 0 33%;">
                <p class="text-h3" style="margin: 10px auto 3px auto; font-weight:bold; font-size: 2rem;">Client
                </p>
                <p class="text-h4 mx-5" style="font-weight: 500;">Pemilik usaha atau masyarakat umum yang
                    membutuhkan jasa disan.</p>
            </div>
            <p style="font-weight: bold; margin-left: 57px; font-size: 1rem;">Daftar</p>
            <div class="d-flex justify-content-center">
                <!-- Facebook -->
                <div class="btn btn-block d-flex justify-content-center"
                    style="width: 300px; margin: 10px 0; border-radius: 2px; background-color:rgb(0, 162, 255) ; color: white;">
                    <div class="row">
                        <i class="fab fa-facebook-f fa-1x" style="margin: 5px 10px;"></i>
                        <p style="font-weight: 500; margin-bottom: 0;">Daftar dengan Facebook</p>
                    </div>
                </div>
                <!-- End Facebook -->
            </div>

            <div class="d-flex justify-content-center">
                <!-- Google -->
                <div class="btn btn-outline-success d-flex justify-content-center"
                    style="width: 300px; margin: 10px 0;  border-radius: 2px;">
                    <div class="row">
                        <i class="fab fa-google fa-1x" style="margin: 5px 10px;"></i>
                        <p style="font-weight: 500; margin-bottom: 0;">Daftar dengan Google</p>
                    </div>
                </div>
                <!-- End Google -->
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card text-white" style="width: 25rem;">
                <div class="card-body bg-oten">
                    <b>
                        <p class="text-center"
                            style="border-bottom: 3px solid white; padding-bottom: 2px;font-size: 1.2rem;">Daftar
                            Sebagai
                            Client (Gratis)</p>
                    </b>
                    <form>
                        <b>
                            <p class="mb-2">Info Akun</p>
                        </b>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" id="username"
                                aria-describedby="emailHelp" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Password">
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" name="password" class="form-control" id="password2"
                                placeholder="Confirm Password">
                        </div>
                        <b>
                            <p class="mb-2">Info Kontak</p>
                        </b>
                        <div class="form-group">
                            <input type="text" name="industri" class="form-control" id="industri"
                                placeholder="Industri">
                        </div>
                        <div class="form-group">
                            <input type="integer" name="nohp" class="form-control" id="nohp" placeholder="No Handphone">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <button type="submit" class="btn btn-block btn-success">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Daftar Button -->
</body>

@endsection