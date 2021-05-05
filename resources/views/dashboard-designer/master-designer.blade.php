<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('assets/logo-new.png')}}">

    <!-- My CSS -->
    <link rel="stylesheet" href={{asset('css/style.css')}}>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/5db3044f3c.js" crossorigin="anonymous"></script>

    <!-- Font Fam -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <title>@yield('name')</title>
</head>

<body>
    <div style="min-height: 93vh">
        <!-- Header -->
        <section id="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-oten">
                <div class="container">
                    <a class="navbar-brand" href="{{route('designer-dashboard')}}">
                        <img src="{{asset('assets/logo.png')}}" alt="" style="height: 25px; width: 180px;">
                    </a>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <div class="btn-group">
                                <ul class="navbar-nav ml-auto mt-2">
                                    <li class="nav-item mr-1">
                                        <a href="/dashboard/designer">
                                            <p class="text-white pt-1 mr-2">Pesanan</p>
                                        </a>
                                    </li>
                                    <li class="nav-item mr-1">
                                        <a href="/dashboard/designer">
                                            <p class="text-white pt-1">{{auth()->user()->job}}</p>
                                        </a>
                                    </li>
                                    <div class="btn-group">
                                        <button class="btn pt-0" type="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <ul class="navbar-nav ml-auto">
                                                <li class="nav-item">
                                                    <div class="nav-linkdropdown-toggle">
                                                        <img class="br-full" src="
                                                    
                                                    @if(!is_null(auth()->user()->avatar))
                                                    {{asset('/assets/profile/'.auth()->user()->avatar)}}
                                                
                                                    @else
                                                    {{asset('/assets/profile/default.jpg')}}
                                                    @endif
                                                    
                                                    " alt="profil" style="width: 40px; height:40px;">
                                                    </div>
                                                </li>
                                                <li class="nav-item mr-3 ml-2 pt-1">
                                                    <p class="text-white text_capital bold">{{auth()->user()->name}}
                                                    </p>
                                                </li>
                                            </ul>
                                        </button>

                                        <div class="dropdown-menu">
                                            <a href="/dashboard/designer" class="dropdown-item">Dashboard</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="/dashboard/designer/edit-profile" class="dropdown-item">Edit
                                                Profile</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" type="button" data-toggle="modal"
                                                data-target="#reviewModal">Buat Review</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" type="button" href="{{route('logout')}}">Log
                                                Out</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Status <b>{{auth()->user()->role}}</b></a>
                                        </div>

                                    </div>
                                </ul>
                            </div>
                        </ul>
                    </div>

                </div>
            </nav>
            <!-- Akhir Navbar -->

            @yield('content')


        </section>

        @yield('modal')
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    @yield('script')
</body>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="col-lg-12" style="padding-bottom: 0;">
            @yield('footer')
            <div class="row justify-content-center">
                <p style="margin-top: 10px; color: white;">Copyright &copy AkuDesain 2021</p>
            </div>
        </div>
    </div>
</footer>

</html>