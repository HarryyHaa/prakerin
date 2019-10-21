<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Wisata Jabarr</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/frontend/img/core-img/wisata')}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/style.css')}}">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Navbar Area -->
        <div class="mag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="magNav">

                    <!-- Nav brand -->
                    <h2>Wisata Jabarr</h2>
                    {{-- <a href="/" class="nav-brand"><img src="{{ asset('assets/frontend/img/core-img/logo.png')}}" alt=""></a> --}}

                    <!-- Navbar Toggler -->


                    <!-- Nav Content -->
                    <div class="nav-content d-flex align-items-center">
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="/">Home</a></li>
                                    <li><a href="/blog">Artikel</a></li>

                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <div class="top-meta-data d-flex align-items-center">
                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="/" method="post">
                                    <input type="search" name="top-search" id="topSearch" placeholder="Search and hit enter...">
                                    <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <!-- Login -->
                            <a href="/login" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
                            <!-- Submit Video -->
                            {{-- <a href="/submit" class="submit-video"><span><i class="fa fa-cloud-upload"></i></span> <span class="video-text">Submit Video</span></a> --}}
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url({{ asset('assets/frontend/img/bg-img/49.jpg')}})">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Detail</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="mag-breadcrumb py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="/blog"><i aria-hidden="true"></i> Artikel</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-details-area">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-xl-8">
                @foreach ($artikel as $artikels)
                    <div class="post-details-content bg-white mb-30 p-30 box-shadow">
                        <div class="blog-thumb mb-30">
                        <img src="{{ asset('assets/img/artikel/'.$artikels->foto)}}"  alt="">

                        </div>
                        <div class="blog-content">
                            <div class="post-mel, d-m-Y')}}</a>
                            {{-- <a href="#">{{ $artikels->kategori->nama_kategori}}</a> --}}
                            </div>
                            <h4 class="post-title">{{ $artikels->judul }}</h4>
                            <!-- Post Meta -->
                            {{-- <div class="post-meta-2">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div> --}}

                            <p>{!! $artikels->konten !!}</p><br>
                            @endforeach
                            {{-- <a href="#"> @foreach ($artikel as $tags){{ $tags->nama_tag }} @endforeach</a> --}}

                            <!-- Like Dislike Share -->


                            <!-- Post Author -->


                    <!-- Related Post Area -->


                    <!-- Comment Area Start -->


                    <!-- Post A Comment Area -->


                <!-- Sidebar Widget -->


    <!-- ##### Post Details Area End ##### -->

    <!-- ##### Footer Area Start ##### -->

    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('assets/frontend/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{ asset('assets/frontend/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('assets/frontend/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('assets/frontend/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{ asset('assets/frontend/js/active.js')}}"></script>
</body>

</html>
