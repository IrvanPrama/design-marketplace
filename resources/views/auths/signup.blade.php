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