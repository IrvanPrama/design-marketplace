@extends('layout.master')
@section('name', 'Login')

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
    </div>
</div>
<!-- End Daftar Button -->
<!-- End Content -->
@endsection

@section('footer')
@yield('footer-desc')
@endsection