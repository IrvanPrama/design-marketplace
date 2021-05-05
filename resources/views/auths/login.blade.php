@extends('layout.master')
@section('name', 'Login | Akudesain')

@section('content')
<!-- Content -->
<!-- Daftar Button -->
<div class="container">
    <div class="d-flex justify-content-center mt-5">
        <div class="card" style="min-width: 350px; border: none;">
            <div class="" style="background-color: rgb(0, 162, 255); ">
                <div class="row justify-content-center d-flex mt-3 mb-3"><img src="{{asset('assets/logo.png')}}"
                        style="width: 200px;height: 30px;" alt="logo">
                </div>
                <div class="mr-3 ml-3">
                    <form action="{{route('postlogin')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group mb-4">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email"
                                style="border-radius: 0;">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Password" style="border-radius: 0;">
                        </div>
                        <button type="submit" class="btn btn-block text-white mb-3 btn-success"
                            style="border-radius: 0;">
                            MASUK
                        </button>
                    </form>
                </div>
            </div>
            <div style="border-bottom: 3px solid rgb(0,162,225); height: 30px;"></div>
            <div class="d-flex justify-content-center" style="margin-top:-14px; z-index: 1;">
                <b>
                    <p class="pl-3 pr-3 text-oten" style="background-color: white;">ATAU</p>
                </b>
            </div>
            {{-- <div class="d-flex justify-content-center">
                <!-- Facebook -->
                <div class="btn btn-block d-flex justify-content-center"
                    style="width: 300px; margin: 10px 0; border-radius: 2px; background-color:rgb(0, 162, 255) ; color: white;">
                    <div class="row">
                        <i class="fab fa-facebook-f fa-1x" style="margin: 5px 10px;"></i>
                        <p style="font-weight: 500; margin-bottom: 0;">Daftar dengan Facebook</p>
                    </div>
                </div>
                <!-- End Facebook -->
            </div> --}}

            <div class="d-flex justify-content-center">
                <!-- Google -->
                <a href="{{route('signup')}}" class="btn btn-outline-success d-flex justify-content-center"
                    style="width: 300px; margin: 10px 0;  border-radius: 2px;">
                    <div class="row">
                        <i class="fab fa-google fa-1x" style="margin: 5px 10px;"></i>
                        <p style="font-weight: 500; margin-bottom: 0;">Daftar dengan Email</p>
                    </div>
                </a>
                <!-- End Google -->
            </div>
        </div>
    </div>
</div>
<!-- End Daftar Button -->
<!-- End Content -->
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