<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ config('app.name') }} | @yield('title')</title>
    <!-- Font Awesome icons (free version)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="{{ url('/img/icon1.png') }}" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="{{ url('/bootstrap-5.2.3-dist/css/bootstrap.min.css') }}">
    <link href="{{ url('/front/css/styles.css') }}" rel="stylesheet" />
    @stack('css')

    <style>
        .social-link {
            text-decoration: none;
            color: white;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            text-decoration: none;
        }

        /* Efek hover untuk icon */
        .social-link:hover .fa-stack .fa-circle {
            color: #0d6efd !important;
            /* Bootstrap primary blue */
        }

        .social-link:hover .fa-stack .fa-inverse {
            color: white !important;
        }

        /* Efek hover untuk text */
        .social-link:hover {
            color: #0d6efd !important;
        }

        /* Animasi beat untuk icon saat hover */
        .social-link:hover .fa-stack {
            animation: fa-beat 1s infinite;
        }

        footer {
            font-family: poppins, sans-serif;
        }
    </style>
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ url('/img/icon1.png') }}" alt="Logo" width="15%">
                {{ config('app.name') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item">
                        <a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/') }}">
                            Halaman Awal
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-lg-3 py-3 py-lg-4" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Tentang Kami
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('page.detail', ['slug' => 'visi-dan-misi']) }}">
                                    Visi dan Misi
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item"
                                    href="{{ route('page.detail', ['slug' => 'prestasi-dan-penghargaan']) }}">
                                    Prestasi dan Penghargaan
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Something else here
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/berita') }}">
                            Berita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/pendaftaran') }}">
                            Pendaftaran
                        </a>
                    </li>
                    @if (isset(Auth::user()->id))
                        <li class="nav-item">
                            <a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('logout2') }}">Logout</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('register') }}">Buat Akun</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/login') }}">Login</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer-->
    <footer class="border-top bg-dark">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 align-items-center justify-content-center mb-3">
                <div class="col-md-6 col-lg-6 col-xl-6 align-items-center justify-content-center">
                    <div class="row g-2 gy-3">

                        <div class="col-md-6 col-lg-6 d-flex align-items-center ">
                            <div class="flex-shrink-0">
                                <a href="https://web.facebook.com/p/LKP-Elmuna-Kebumen-100054534726890/?_rdc=1&_rdr#"
                                    target="_blank" class="social-link">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x" style="color:white"></i>
                                        <i class="fab fa-facebook fa-stack-1x fa-inverse fa-xl"
                                            style="color:#343A40"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <a href="https://web.facebook.com/p/LKP-Elmuna-Kebumen-100054534726890/?_rdc=1&_rdr#"
                                    target="_blank" class="text-small social-link">elmuna institut</a>
                            </div>
                        </div>


                        <div class="col-md-6 col-lg-6 d-flex align-items-center ">
                            <div class="flex-shrink-0">
                                <a href="https://www.instagram.com/elmuna_institut/" target="_blank"
                                    class="social-link">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x" style="color: white"></i>
                                        <i class="fab fa-instagram fa-stack-1x fa-inverse fa-lg"
                                            style="color:#343A40"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <a href="https://www.instagram.com/elmuna_institut/" target="_blank"
                                    class="txt-small social-link">elmuna_institut</a>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 d-flex align-items-center ">
                            <div class="flex-shrink-0">
                                <a href="https://www.youtube.com/@elmunakebumen5576" target="_blank"
                                    class="social-link">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x" style="color:white"></i>
                                        <i class="fab fa-brand fa-youtube fa-stack-1x fa-inverse fa-lg"
                                            style="color:#343A40"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <a href="https://www.youtube.com/@elmunakebumen5576" target="_blank"
                                    class="text-small social-link">elmuna kebumen</a>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 d-flex align-items-center ">
                            <div class="flex-shrink-0">
                                <a href="" target="_blank" class="social-link">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x" style="color:white"></i>
                                        <i class="fab fa-brand fa-tiktok fa-stack-1x fa-inverse fa-lg"
                                            style="color:#343A40"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <a href="https://www.tiktok.com/@elmuna_institut?_t=ZS-8wYonMuemy0&_r=1"
                                    target="_blank" class="text-small social-link">@elmuna_institut</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="row">
                                <div class="col md-3 col-lg-3">
                                    <a href="https://maps.app.goo.gl/NFV1cNH1PzMXehqr8" class="social-link">
                                        <span class="fa-stack fa-lg">
                                            <i class="fas fa-circle fa-stack-2x" style="color:white"></i>
                                            <i class="fa-solid fa-location-dot fa-stack-1x fa-inverse fa-lg"
                                                style="color:#343A40"></i>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-md-9 col-lg-9">
                                    <h5 class="text-light">Elmuna 1</h5>
                                    <a href="https://maps.app.goo.gl/NFV1cNH1PzMXehqr8" target="_blank"
                                        class="fs-6 text-small social-link">Jl.
                                        Raya Soka Petanahan No. 10 Km.6 Plumbon Ds.Klegenwonosari, Kec. Klirong Kab.
                                        Kebumen 54391 (Utara Polsek Klirong)</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="row">
                                <div class="col md-3 col-lg-3">
                                    <a href="https://maps.app.goo.gl/cKjoD1mbbtvdy6t97" class="social-link">
                                        <span class="fa-stack fa-lg">
                                            <i class="fas fa-circle fa-stack-2x" style="color:white"></i>
                                            <i class="fa-solid fa-location-dot fa-stack-1x fa-inverse fa-lg"
                                                style="color:#343A40"></i>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-md-9 col-lg-9">
                                    <h5 class="text-light">Elmuna 2</h5>
                                    <a href="https://maps.app.goo.gl/cKjoD1mbbtvdy6t97" target="_blank"
                                        class="fs-6 text-small social-link">Jl. Tentara
                                        Pelajar No. 37A Kel. Panjer, Kec. Kebumen Kab.Kebumen 54312 (Selatan Polres
                                        Kebumen)</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="row align-items-center">
                                <div class="col md-3 col-lg-3">
                                    <span class="social-link">
                                        <span class="fa-stack fa-lg">
                                            <i class="fas fa-circle fa-stack-2x" style="color:white"></i>
                                            <i class="fab fa-brand fa-whatsapp fa-stack-1x fa-inverse fa-lg"
                                                style="color:#343A40"></i>
                                        </span>
                                    </span>
                                </div>
                                <div class="col-md-9 col-lg-9">
                                    <a href="https://wa.me/6282134389173" target="_blank"
                                        class="text-small social-link">0821-3438-9173</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="row align-items-center">
                                <div class="col md-3 col-lg-3">
                                    <span class="social-link">
                                        <span class="fa-stack fa-lg">
                                            <i class="fas fa-circle fa-stack-2x" style="color:white"></i>
                                            <i class="fab fa-brand fa-whatsapp fa-stack-1x fa-inverse fa-lg"
                                                style="color:#343A40"></i>
                                        </span>
                                    </span>
                                </div>
                                <div class="col-md-9 col-lg-9">
                                    <a href="https://wa.me/6282323362908" target="_blank"
                                        class="text-small social-link">0823-2336-2908</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mt-4">
                    <div class="small text-center text-muted fst-italic">Copyright &copy; Elmuna
                        {{ date('Y') }}</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="{{ url('/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core theme JS-->
    <script src="{{ url('/front/js/scripts.js') }}"></script>
</body>

</html>
