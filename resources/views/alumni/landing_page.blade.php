<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title','BKK SMK YPC TASIKMALAYA') </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/assets1/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/assets1/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/assets1/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/assets1/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/assets1/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/assets1/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/assets1/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Appland
  * Updated: Sep 25 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @yield('content')

  <header id="header" class="fixed-top  header-transparent" style="background-color: #9ec8e8">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo mt-2">
        <h5><a href="" class="fw-bold text-black">BKK SMK YPC TASIKMALAYA</a></h5>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>


      <nav id="navbar" class="navbar" >
          @if (Auth::guard('alumnis')->check())
        <ul>
                <li>
                  <a class="nav-link scrollto {{ Request::segment(1)=='landingpage'?'active open':'' }} fw-bold" href="/landingpage">Home</a>
                </li>
                <li>
                  <a class="nav-link scrollto {{ Request::segment(1)=='loker'?'active open':'' }} fw-bold" href="/loker">Lowongan Kerja</a>
                </li>
                <li>
                  <a class="nav-link scrollto fw-bold {{ Request::segment(1)=='perusahaan'?'active open':'' }}" href="/index/perusahaan">Perusahaan</a>
                </li>
                <li class="dropdown"><a href="#"><span class="fw-bold nav-link {{ Request::segment(1)=='riwayat'?'active open':'' }}" >Riwayat</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                <li>
                  <a href="/riwayat/perusahaan">Perusahaan</a>
                </li>
                <li>
                    <a href="/riwayat/lowongan">Lowongan</a>
                </li>
                <li>
                    <a href="/testimoni/alumni">Testimoni</a>
                </li>
                </ul>
                </li>
                <li class="dropdown"><a href="/profil"><span class="fw-bold nav-link {{ Request::segment(1)=='profil'?'active open':'' }}">Profil</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                    <li>
                        {{-- <img src="/storage/{{ $lowongan->alumni->foto }}" class="rounded-circle mb-1" alt="" width="50">{{ $lowongan->alumni->nama_alumni }} --}}
                      <a href="/profil">Profil Saya</a>
                    </li>
                    <li><a href="logoutalumni">Logout</a></li>
                    </ul>
                    </li>
            @else
                <li><a class="nav-link scrollto {{ Request::segment(1)=='landingpage'?'active open':'' }} fw-bold" href="/landingpage">Home</a></li>
                <li><a class="nav-link scrollto {{ Request::segment(1)=='loginalumni'?'active open':'' }} fw-bold" href="loginalumni">Login</a></li>
            @endif

          {{-- <li><a class="getstarted scrollto" href="#features">Get Started</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->


  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/assets1/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/assets1/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/assets1/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/assets1/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/assets1/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/assets1/js/main.js') }}"></script>

</body>

</html>
{{-- <!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>AppGrids - Bootstrap 5 App Landing Page Template</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.svg"/>
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('assets/assets/css/bootstrap-5.0.0-alpha-2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/css/LineIcons.2.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/css/main.css') }}" />
  </head>
  <body> --}}
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- ========================= preloader start ========================= -->
    {{-- <div class="preloader">
      <div class="loader">
        <div class="ytp-spinner">
          <div class="ytp-spinner-container">
            <div class="ytp-spinner-rotator">
              <div class="ytp-spinner-left">
                <div class="ytp-spinner-circle"></div>
              </div>
              <div class="ytp-spinner-right">
                <div class="ytp-spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
		<!-- preloader end -->
        {{-- @yield('content') --}}


    <!-- ========================= header start ========================= -->
    {{-- <header class="header">
      <div class="navbar-area">
          <div class="row align-items-center">
              <div class="col-lg-12">
                  <nav class="navbar navbar-expand-lg" style="background-color:  #34678d">
                    <div class="container">
                <a class="navbar-brand" href="index.html" >
                  <span class="text-white">BKK SMK YPC TASIKMALAYA</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                  <ul id="nav" class="navbar-nav ml-auto">
                    @if (Auth::guard('alumnis')->check())
                    <li class="nav-item">
                      <a class="text-white" href="/landingpage">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a href="loker" class="text-white">Lowongan kerja</a>
                    </li>
                    <li class="nav-item">
                        <a href="index/perusahaan/" class="text-white">Perusahaan</a>
                    </li>
                        <ul class="navbar-nav">
                          <li class="nav-item dropdown">
                            <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              Dropdown
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </li>
                        </ul>
                    <li class="nav-item">
                        <a href="" class="text-white">Hi {{ Auth::guard('alumnis')->user()->nama_alumni }}</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="page-scroll text-white" href="#home">Home</a>
                      </li>
                      <li class="nav-item">
                          <a href="loginalumni" class="text-white">Login</a>
                      </li>
                    @endif --}}
                    {{-- <li class="nav-item">
                      <a class="page-scroll" href="#tracking">Explore</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#download">Download</a>
                    </li> --}}
                  {{-- </ul>
                </div> --}}
                <!-- navbar collapse -->
              {{-- </nav> --}}
              <!-- navbar -->

            {{-- </div>
          </div> --}}
          <!-- row -->
        {{-- </div> --}}
        <!-- container -->
      {{-- </div> --}}
      <!-- navbar area -->
    {{-- </header> --}}
    <!-- ========================= header end ========================= -->

    {{-- <script src="{{ asset('assets/assets/js/bootstrap.5.0.0.alpha-2-min.js') }}"></script>
    <script src="{{ asset('assets/assets/js/count-up.min.js') }}"></script>
    <script src="{{ asset('assets/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/assets/js/main.js') }}"></script>
  </body>
</html> --}}


