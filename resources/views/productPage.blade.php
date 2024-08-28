<!DOCTYPE html>
<html lang='fa' dir="rtl">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portfolio Details - KnightOne Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

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
                <h1 class="logo me-auto me-lg-0"><a href="main.index.blade.php">زهرمار</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="main.index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li><a class="nav-link scrollto active" href="{{route('main.index').'#hero'}}">خانه</a></li>
                        <li><a class="nav-link scrollto" href="#services">خدمات</a></li>
                        <li><a class="nav-link scrollto " href="#portfolio">نظرات</a></li>
                        <li><a class="nav-link scrollto" href="#pricing">قیمت ها</a></li>
                        <li class="dropdown"><a href="#"><span>دسترسی سریع به خدمات </span> <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="#">
                                        انگیزشی کنکور</a></li>
                                <li><a href="#">تقویت اراده</a></li>
                                <li><a href="#">از طرف خدا</a></li>
                                <li><a href="#">
                                        کلامی از قرآن</a></li>
                                <li><a href="#">
                                        انگیزشی</a></li>
                                <li class="dropdown"><a href="#"><span>سفارشی</span> <i
                                            class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <li><a href="#">Deep Drop Down 1</a></li>
                                        <li><a href="#">Deep Drop Down 2</a></li>
                                        <li><a href="#">Deep Drop Down 3</a></li>
                                        <li><a href="#">Deep Drop Down 4</a></li>
                                        <li><a href="#">Deep Drop Down 5</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a class="nav-link scrollto" href="#about">درباره ما</a></li>
                        <li><a class="nav-link scrollto" href="#contact">تماس با ما</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

                <li>
                    @if(Illuminate\Support\Facades\Auth::check())
                        <a href="{{route('logout')}}" class="get-started-btn scrollto">خروج</a>
                        <a href="{{ route('profile.edit') }}" class="get-started-btn scrollto">پروفایل</a>
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

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="{{route('main.index')}}">خانه</a></li>
                <li>مشخصات محصول</li>
            </ol>
            <h2> بسته ی {{$input->name}}</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= مشخصات محصول ======= -->
    <section id="portfolio-details" class="portfolio-details" style="background-color: #fbf4f4">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="{{asset('assets/img/portfolio/portfolio-1.jpg')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/img/portfolio/portfolio-2.jpg')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/img/portfolio/portfolio-3.jpg')}}" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="portfolio-info">
                        <h3>مشخصات محصول</h3>
                        <ul>
                            <li><strong>نام بسته</strong>: {{$input->name}}</li>
                            <li><strong>{{$input->description}}</strong></li>
                            <li>
                            </li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>توضیحات تکمیلی:</h2>
                        <p>
                            {{$input->body}}
                        </p>
                    </div>
                    <form>
                        <strong> مدت زمان بسته</strong>:<br><br>
                        <div class="select-wrapper">
                            <select  id="select" class="form-control">
                                <option value="" disabled selected> + یکی از بسته ها را انتخاب کنید
                                </option>
                                @foreach($packages  as $package )
                                    <option id="packageTime" onclick="changePrice()" value="{{$package->title}}">
                                        {{$package->title}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div class="select-wrapper">
                            <select class="form-control">
                                <option value="" selected> برای خودم
                                </option>
                                <option value="1">هدیه به دیگری</option>
                            </select>
                        </div>
                        <br>
                        <br>
                        @foreach($packages  as $package )
                            <strong>قیمت محصول</strong>:
                            <span id="packagePrice"></span> هزار تومان
                        @endforeach

                        <br>
                        <br>
                        <div class="container" dir="ltr">
                            <button class="get-started-btn scrollto">پرداخت و ثبت سفارش</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->
    <script>
        //var x = 'ncbjbc';




            x = {{$package->title}};
            document.getElementById('packagePrice').innerHTML = x;





    </script>
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <h3>KnightOne</h3>
        <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi
            placeat.</p>
        <div class="social-links">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        <div class="copyright">
            &copy; Copyright <strong><span>KnightOne</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/knight-simple-one-page-bootstrap-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
<script>

</script>
</body>

</html>
