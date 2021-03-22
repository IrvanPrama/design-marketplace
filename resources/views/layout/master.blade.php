<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- My CSS -->
    <link rel="stylesheet" href={{asset('css/style.css')}}>

    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/5db3044f3c.js" crossorigin="anonymous"></script>

    <title>@yield('name')</title>
</head>

<body>
    <!-- Header -->
    <section id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-oten">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('assets/logo.png')}}" alt="" style="height: 25px; width: 180px;">
                </a>

                @yield('nav-item')

            </div>
        </nav>
        <!-- Akhir Navbar -->

        @yield('content')

</body>
<!-- Footer -->
<footer id="footer">
    <div class="container">
        <div class="col-lg-12" style="padding-bottom: 0;">
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
            <div class="row justify-content-center">
                <p style="margin-top: 10px; color: white;">Copyright &copy AkuDesain 2021</p>
            </div>
        </div>
    </div>
</footer>

</html>