@extends('layout.master')

@section('name', 'Client Signup | Akudesain')
@section('content')
<!-- Daftar Button -->
<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
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
                    <form action="/signup/account" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="role" value="user">
                        <b>
                            <p class="mb-2">Info Akun</p>
                        </b>
                        <div class="form-group mb-4">
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control  @error('name')
                            is-invalid
                            @enderror" id="name" placeholder="Nama Lengkap">
                            @error('deadline')
                            <span class="text-white has-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email')
                            is-invalid
                            @enderror" id="email" placeholder="Email" autocomplete="off" aria-describedby="emailHelp">
                            @error('email')
                            <span class="text-white has-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" value="{{ old('password') }}" class="form-control @error('password')
                            is-invalid
                            @enderror" id="password" placeholder="Password" autocomplete="off">
                            @error('password')
                            <span class="text-white has-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" name="password2" value="{{ old('password2') }}" class="form-control @error('password2')
                            is-invalid
                            @enderror" id="password2" placeholder="Confirm Password">
                            @error('password2')
                            <span class="text-white has-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <b>
                            <p class="mb-2">Info Kontak</p>
                        </b>
                        <div class="form-group">
                            <input type="text" name="job" value="{{ old('job') }}" class="form-control @error('job')
                            is-invalid
                            @enderror" id="job" placeholder="Pekerjaan">
                            @error('job')
                            <span class="text-white has-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="integer" id="now_hp" value="{{ old('no_hp') }}" name="no_hp" class="form-control @error('no_hp')
                            is-invalid
                            @enderror" id="now_hp" placeholder="No Handphone">
                            @error('no_hp')
                            <span class="text-white has-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="username" value="{{ old('username') }}" class="form-control @error('username')
                            is-invalid
                            @enderror" id="username" placeholder="username">
                            @error('username')
                            <span class="text-white has-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <button onclick="myFunction()" type="submit" class="btn btn-block btn-success">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Daftar Button -->
</body>

@endsection

@section('footer')
<div class="row">
    <div class="col-lg-5">
        <img src="../assets/logo.png" alt="logo" style="height: 35px; width: 200px; margin: 30px 0;">
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