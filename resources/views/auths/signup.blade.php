@extends('layout.master')
@section('nama', 'Signup')

@section('content')
<!-- Daftar Button -->
<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
    <div class="col-lg-12 d-flex justify-content-center mt-5">
        <div class="col-lg-5" style="border-right: 4px solid rgb(0, 162, 255);">
            <div>
                <img src="{{asset('assets/daftar.png')}}" alt="" style="width: 40%; height: 40%; margin: 0 40% 0 33%;">
                <p class="text-h3" style="margin: 10px auto 3px auto; font-weight:bold; font-size: 2rem;">Client
                </p>
                <p class="text-h4 mx-5" style="font-weight: 500;">Sebagai desainer yang memiliki passion
                    dibidang
                    desain</p>
            </div>
            <div class="d-flex justify-content-center">
                <!-- Button -->
                <a href="{{route('signup-client')}}" class="btn btn-block d-flex justify-content-center"
                    style="width: 300px; margin: 10px 0; border-radius: 2px;  background-color:rgb(3, 230, 52) ; color: white;">
                    <div class=" row">
                        <p style="font-weight: 500; margin-bottom: 0;">
                            Daftar Client</p>
                    </div>
                </a>
                <!-- End Button -->
            </div>
        </div>
        <div class="col-lg-5">
            <div>
                <img src="../assets/designer.png" alt="" style="width: 40%; height: 40%; margin: 0 40% 0 33%;">
                <p class="text-h3" style="margin: 10px auto 3px auto; font-weight:bold; font-size: 2rem;">Desainer
                </p>
                <p class="text-h4 mx-5" style="font-weight: 500;">Sebagai desainer yang memiliki passion
                    dibidang
                    desain</p>
            </div>
            <div class="d-flex justify-content-center">
                <!-- Button -->
                <a class="btn btn-block d-flex justify-content-center" href="{{route('signup-designer')}}"
                    style="width: 300px; margin: 10px 0; border-radius: 2px;  background-color:rgb(0, 162, 255) ; color: white;">
                    <div class=" row">
                        <p style="font-weight: 500; margin-bottom: 0;">
                            Daftar Desainer</p>
                    </div>
                </a>
                <!-- End Button -->
            </div>
        </div>
    </div>
</div>
<!-- End Daftar Button -->
</body>

@endsection
@section('footer')
@yield('footer-desc')
@endsection