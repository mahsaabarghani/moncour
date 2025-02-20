<!DOCTYPE html>
<html lang='fa' dir="rtl">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>KnightOne Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href={{"assets/img/favicon.png"}} rel="icon">
    <link href={{"assets/img/apple-touch-icon.png"}} rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="{{asset('font.dash.css')}}"
        rel="stylesheet">
    <link
        href="{{asset('fonts/iranyekan1.woff')}}"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href='{{asset("assets/vendor/bootstrap/css/bootstrap.min.css")}}' rel="stylesheet">
    <link href='{{asset("assets/vendor/bootstrap-icons/bootstrap-icons.css")}}' rel="stylesheet">
    <link href='{{asset("assets/vendor/boxicons/css/boxicons.min.css")}}' rel="stylesheet">
    <link href='{{asset("assets/vendor/glightbox/css/glightbox.min.css")}}' rel="stylesheet">
    <link href='{{asset("assets/vendor/remixicon/remixicon.css")}}' rel="stylesheet">
    <link href='{{asset("assets/vendor/swiper/swiper-bundle.min.css")}}' rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: KnightOne
    * Template URL: https://bootstrapmade.com/knight-simple-one-page-bootstrap-template/
    * Updated: Mar 17 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
                <h1 class="logo me-auto me-lg-0"><a href="{{route('main.index')}}">moncour</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li><a class="nav-link scrollto active" href="#hero">خانه</a></li>
                        <li><a class="nav-link scrollto" href="#services">خدمات</a></li>
                        <li><a class="nav-link scrollto " href="#portfolio">نظرات</a></li>
                        <li><a class="nav-link scrollto" href="#pricing">قیمت ها</a></li>
                        <li class="dropdown"><a href="#"><span>دسترسی سریع به خدمات </span> <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                @foreach($items as $item)
                                    <li><a href="{{route('product.show', $item->id)}}">
                                            بسته ی {{$item->name}}</a></li>
                                @endforeach

                            </ul>
                        </li>
                        <li><a class="nav-link scrollto" href="#about">درباره ما</a></li>
                        <li><a class="nav-link scrollto" href="#contact">تماس با ما</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

                <li>
                    @if(Auth::check())
                        @if(Auth::user()->role==0)
                            <a href="{{route('logout')}}" class="get-started-btn scrollto">خروج</a>
                            <a href="{{ route('admin.index') }}" class="get-started-btn scrollto">ادمین پنل</a>
                        @else
                            <a href="{{route('logout')}}" class="get-started-btn scrollto">خروج</a>
                            <a href="{{ route('profile.edit') }}" class="get-started-btn scrollto">پروفایل</a>
                        @endif
                    @else
                        <a href="{{route('login')}}" class="get-started-btn scrollto">ورود</a>
                        <a href="{{route('register')}}" class="get-started-btn scrollto">ثبت نام</a>
                    @endif
                </li>
            </div>
        </div>

    </div>
</header><!-- End Header -->



<main id="main">


    @yield('body')
</main><!-- End #main -->
<br>


<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <h3>Moncoeur</h3>
        <div class="social-links">
            <a href="#" class="telegram"><i class="bx bxl-telegram"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-whatsapp"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-gmail"></i></a>
        </div>
        <div class="copyright">
            تمامی حقوق مادی و معنوی این سایت متعلق به Moncoeur می باشد و هرگونه کپی برداری غیرقانونی محسوب خواهد شد
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/knight-simple-one-page-bootstrap-template/ -->
            طراحی شده توسط <a href="https://bornacti.ir/" target="_blank">bornacti.ir</a>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
