<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description"
          content="ProLex product landing page template or product landing page template helps you easily create websites for your app or product,  landing page template form promotion and many more.">
    <meta name="author" content="ThemeTags">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content=""/> <!-- website name -->
    <meta property="og:site" content=""/> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content=""/> <!-- description shown in the actual shared post -->
    <meta property="og:image" content=""/> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content=""/> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article"/>

    <!--title-->
    <title>FastCoffe</title>

    <!--favicon icon-->
    <link rel="icon" href="{{ asset('frontend') }}/assets/LoGoo.png" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans&display=swap"
          rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="http://prolex.themetags.com/css/bootstrap.min.css">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="http://prolex.themetags.com/css/magnific-popup.css">
    <!--Themify icon css-->
    <link rel="stylesheet" href="http://prolex.themetags.com/css/themify-icons.css">
    <!--flaticon css-->
    <link rel="stylesheet" type="text/css" href="fonts/flaticon.css">
    <!--animated css-->
    <link rel="stylesheet" href="http://prolex.themetags.com/css/animate.min.css">
    <!--ytplayer css-->
    <link rel="stylesheet" href="http://prolex.themetags.com/css/jquery.mb.YTPlayer.min.css">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="http://prolex.themetags.com/css/owl.carousel.min.css">
    <link rel="stylesheet" href="http://prolex.themetags.com/css/owl.theme.default.min.css">
    <!--custom css-->
    <link rel="stylesheet" href="http://prolex.themetags.com/css/style.css">
    <!--responsive css-->
    <link rel="stylesheet" href="http://prolex.themetags.com/css/responsive.css">

    <link rel="stylesheet" href="{{asset('main.css')}}">

    

    <style>
    #kontak {
      background-color: #f9f9f9;
      padding: 20px;
    }

    #kontak h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    #kontak p {
      margin-bottom: 20px;
    }

    #kontak ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    #kontak li {
      margin-bottom: 10px;
    }

    #kontak li strong {
      font-weight: bold;
    }
  </style>
</head>
<body>

<!--header section start-->
<header class="header">
    <!--start navbar-->
    <nav id="nav" class="navbar navbar-expand-lg fixed-top bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="{{ asset('frontend') }}/assets/LoGoo.png" width="120" alt="logo"
                                                           class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>

            <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{url('frontend/homefrontend')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{url('frontend/form')}}">Form Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{url('frontend/produk')}}">Kategori Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{url('frontend/kontak')}}">Kontak Kami</a>
                    </li>
                    <li class="nav-item">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--end navbar-->
</header>
<section class="hero-section ptb-100 background-img"
             style="background: url('{{ asset('frontend') }}/assets/SPECIAL.png')no-repeat center center / cover">
        <div class="container">
            <div class="row align-items-center justify-content-between py-4">
                <div class="col-md-7 col-lg-6">
                    <div class="hero-content-left text-white">
                        <h1 class="text-white"><font style="color:yellow">Coffe </font>That
                        Inspires</h1>
                        <p class="lead">
                        Work can wait, smooth out your day , everyday
                        </p>
                        
                        <!--core feature list end-->
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="hero-animation-img">
                        <img src="{{ asset('frontend') }}/assets/LOGO.png" alt="app" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->
<!--header section end-->