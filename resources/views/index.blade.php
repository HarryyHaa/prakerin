<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Wisata Jawa Barat</title>
    {{-- &amp; --}}
    <!-- Favicon -->
    <link rel="icon" href="{{ asset ('assets/frontend/img/core-img/logo3.png')}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset ('assets/frontend/style.css')}}">

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
                    {{-- <h2>Wisata Jabarr</h2> --}}
                    <a href="/" class="nav-brand"><img src="{{ asset('assets/frontend/img/core-img/logoo2.jpeg')}}" width="180px" height="0px"></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

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
                                <form action="{{action('FrontendController@allblog')}}">
                                    <input type="search" name="cari" id="topSearch" placeholder="Search and hit enter...">
                                    <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"> </i></button>
                                </form>
                            </div>
                            <!-- Login -->
                            <a href="/login" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
                             <!-- Submit Video -->

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area owl-carousel">
        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url('{{ asset('assets/frontend/img/bg-img/h.jpg') }}')">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                {{-- <a href="#">JULY 18, 2019</a>
                                <a href="/blog">wisata</a> --}}
                            </div>
                            <a href="/blog" class="post-title" data-animation="fadeInUp" data-delay="300ms">Wisata Jawa Barat </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url('{{ asset('assets/frontend/img/bg-img/q.jpg')}}')">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                {{-- <a href="#">July 18, 2018</a>
                                <a href="/blog">wisata</a> --}}
                            </div>
                            <a href="/blog" class="post-title" data-animation="fadeInUp" data-delay="300ms">Carilah Tempat Tempat Wisata Yang Anda Inginkan </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url('{{ asset('assets/frontend/img/bg-img/u.jpg')}}')">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                {{-- <a href="">July 18, 2018</a>
                                <a href="/blog">wisata</a> --}}
                            </div>
                            <a href="/blog" class="post-title" data-animation="fadeInUp" data-delay="300ms">Banyak Tempat Wisata Dan Budaya DiJawa Barat</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Mag Posts Area Start ##### -->
    <section class="mag-posts-area d-flex flex-wrap">

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Left Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>WisataPopuler</h5> <br>
                    @php
                        $trandings = \App\Artikel::orderBy('views', 'DESC')->get()->take(5);
                    @endphp
                    @foreach ($trandings as $data)
                        <div class="single-blog-post d-flex">
                            <div class="post-thumbnail">
                                <img src="{{ asset('assets/img/artikel/'.$data->foto)}}">
                            </div>
                            <div class="post-content">
                                <a href="/detail/{{$data->id}}" class="post-title">{{ $data->judul }}</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $data->views }} Orang</a>
                                    {{-- <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>


                <!-- Single Blog Post -->


                <!-- Single Blog Post -->


                <!-- Single Blog Post -->


                <!-- Single Blog Post -->


                <!-- Single Blog Post -->

            </div>

            <!-- Sidebar Widget -->


            <!-- Sidebar Widget -->

        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
             Main Posts Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
        @foreach( $artikel as $data )
                            <div class="col-12">
                                <div class="featured-post-area mb-50">
                                    <!-- Thumbnail -->
                                    <div class="post-thumbnail mb-30">
                                        <a href="#"><img src="{{ asset('assets/img/artikel/'.$data->foto.'')}}" alt=""></a>
                                    </div>
                                    <!-- Featured Post Content -->
                                    <div class="featured-post-content">
                                        <p class="post-date">{{ $data->created_at->format('d M Y') }}</p>
                                        <a href="#" class="post-title">
                                            <h2>{{ $data->judul }}</h2>
                                        </a>
                                        <p class="post-excerpt">{!! str_limit($data->konten,150) !!}</p>
                                    </div>
                                    <!-- Post Meta -->
                                    <div class="post-meta d-flex align-items-center justify-content-between">
                                        <!-- Author Comments -->
                                        <div class="author-comments">
                                            <p><span>by</span> {{$data->user->name}} </p>
                                            {{-- <a href="#">03 <span>Comments</span></a> --}}
                                        </div>
                                        <!-- Social Info -->
                                        <div class="social-info">
                                            {{-- <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> --}}
                                            {{-- <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a> --}}
                                            {{-- <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> --}}
                                        </div>
                                    </div>
                                    {{-- <p>{!! str_replace('5', '50', $index->konten) !!}</p> --}}
                                </div>
                            </div>
                 @endforeach

                 {{-- {{$artikel->appends(Request::all())->links()}} --}}
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Right Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        {{-- <div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Social Followers Info -->
                <div class="social-followers-info">
                    <!-- Facebook -->
                    <a href="https://web.facebook.com" class="facebook-fans"><i class="fa fa-facebook"></i> Facebook <span></span></a>
                    <!-- Twitter -->
                    <!-- Google -->
                    <a href="#" class="google-followers"><i class="fa fa-google-plus"></i> Google <span></span></a>
                </div>
            </div>

            <!-- Sidebar Widget -->

                <!-- Section Title -->


                <!-- Catagory Widget -->


            <!-- Sidebar Widget -->

            <!-- Sidebar Widget -->


            <!-- Sidebar Widget -->

        </div> --}}
    </section>
    <!-- ##### Mag Posts Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <!-- Logo -->
                        {{-- <h1>Wisata Jabarr</h1> --}}
                        <a href="/" class="foo-logo"><img src="{{ asset('assets/frontend/img/core-img/logoo2.png')}}"></a>
                        <p>Jawa Barat adalah sebuah provinsi di Indonesia. Ibu kotanya berada di Kota Bandung. Perkembangan Sejarah menunjukkan bahwa Provinsi Jawa Barat merupakan Provinsi yang pertama dibentuk di wilayah Indonesia </p>
                        <div class="footer-social-info">
                            {{-- <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> --}}
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        {{-- <h6 class="widget-title">Categories</h6>
                        <nav class="footer-widget-nav">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Life Style</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Tech</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Travel</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Music</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Foods</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Fashion</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Game</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Football</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Sports</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> TV Show</a></li>
                            </ul>
                        </nav> --}}
                    </div>
                </div>

                <!-- Footer Widget Area -->
                 <!-- Footer Widget Area -->
                 <div class="col-12 col-sm-6 col-lg-3">
                    {{-- <div class="footer-widget">
                        <h6 class="widget-title">Categories</h6>
                        <nav class="footer-widget-nav">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Life Style</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Tech</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Travel</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Music</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Foods</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Fashion</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Game</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Football</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Sports</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> TV Show</a></li>
                            </ul>
                        </nav>
                    </div> --}}
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Populer</h6>
                        <ul class="footer-tags">
                            @php
                            $trandings = \App\Artikel::orderBy('views', 'DESC')->get()->take(3);
                        @endphp
                        @foreach ($trandings as $data)
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="{{ asset('assets/img/artikel/'.$data->foto)}}">
                                </div>
                                <div class="post-content">
                                    <a href="/detail/{{$data->id}}" class="post-title">{{ $data->judul }}</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $data->views }} Orang</a>
                                        {{-- <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-sm-6">
                        <p class="copywrite-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i {{--class="fa fa-heart-o"--}} aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                    <div class="col-12 col-sm-6">
                        <nav class="footer-nav">
                            <ul>
                                {{-- <li><a href="#">Home</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Advertisement</a></li>
                                <li><a href="#">Contact Us</a></li> --}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
