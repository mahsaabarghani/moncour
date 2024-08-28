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
                <h1 class="logo me-auto me-lg-0"><a href="index.blade.php">زهرمار</a></h1>
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
                                            بسته ی   {{$item->name}}</a></li>
                                @endforeach
{{--                                <li class="dropdown"><a href="#"><span>سفارشی</span> <i--}}
{{--                                            class="bi bi-chevron-right"></i></a>--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="#">Deep Drop Down 1</a></li>--}}
{{--                                        <li><a href="#">Deep Drop Down 2</a></li>--}}
{{--                                        <li><a href="#">Deep Drop Down 3</a></li>--}}
{{--                                        <li><a href="#">Deep Drop Down 4</a></li>--}}
{{--                                        <li><a href="#">Deep Drop Down 5</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
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

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <h1>moncoor</h1>
                <h2>سلام</h2>
                <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
            </div>
        </div>
    </div>
</section><!-- End Hero -->

<main id="main">


    <!-- ======= خدمات ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>خدماتِ Moncoeur</h2>

            </div>

            <div class="row">
                @foreach($items as $item)

                    <div class="col-lg-4">
                        <a href="{{route('product.show',$item->id)}}">
                            <div class="align-items-stretch">
                                <div class="icon-box" style="position: relative;height: 300px;">
                                    <div class="align-baseline">
                                        <div class="icon"><i class='{{$item->icon}}'></i></div>
                                        <h4><a href="{{route('product.show',$item->id)}}">
                                                {{$item->name}}
                                            </a></h4>
                                        <p>{{$item->description}}</p>
                                    </div>
                                    <br>

                                    <div class="align-bottom" style="position: absolute; bottom: 5px;">
                                        <a style="color: #009961;" href="{{route('product.show',$item->id)}}"
                                           class="filter-active ">
                                            مشاهده بیشتر<i class="bx bx-plus"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>


                @endforeach
            </div>


        </div>
    </section><!-- End خدمات -->


    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">

            <div class="text-center title">
                <h3>آنچه تاکنون به دست آورده ایم
                </h3>
            </div>

            <div class="row counters position-relative">

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="23" data-purecounter-duration="1"
                          class="purecounter"></span>
                    <p>خریدار</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="1521" data-purecounter-duration="1"
                          class="purecounter"></span>
                    <p>بازدید</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="168" data-purecounter-duration="1"
                          class="purecounter"></span>
                    <p>تعداد پیامک</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="41" data-purecounter-duration="1"
                          class="purecounter"></span>
                    <p>بسته های خریداری شده</p>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= نظرات شما ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
                <h2>نظرات شما</h2>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">همه</li>
                        <li data-filter=".filter-app">جدیدترین</li>
                        <li data-filter=".filter-card">مفیدترین</li>
                    </ul>
                    <ul id="portfolio-flters">
                        <li data-filter=".filter-web">مشاهده بیشتر
                            <i class="bx bx-plus"></i>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="{{asset('assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>بسته ی خریداری شده</h4>
                        <p>نام خریدار</p>
                        <a href="#"><i style="font-size:25px;" class="bx bx-like "></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="{{asset('assets/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>بسته ی خریداری شده</h4>
                        <p>نام خریدار</p>
                        <a href="#"><i style="font-size:25px;" class="bx bx-like "></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="{{asset('assets/img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>بسته ی خریداری شده</h4>
                        <p>نام خریدار</p>
                        <a href="#"><i style="font-size:25px;" class="bx bx-like "></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="{{asset('assets/img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>بسته ی خریداری شده</h4>
                        <p>نام خریدار</p>
                        <a href="#"><i style="font-size:25px;" class="bx bx-like "></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="{{asset('assets/img/portfolio/portfolio-5.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>بسته ی خریداری شده</h4>
                        <p>نام خریدار</p>
                        <a href="#"><i style="font-size:25px;" class="bx bx-like "></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="{{asset('assets/img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>بسته ی خریداری شده</h4>
                        <p>نام خریدار</p>
                        <a href="#"><i style="font-size:25px;" class="bx bx-like "></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="{{asset('assets/img/portfolio/portfolio-7.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>بسته ی خریداری شده</h4>
                        <p>نام خریدار</p>
                        <a href="#"><i style="font-size:25px;" class="bx bx-like "></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="{{asset('assets/img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>بسته ی خریداری شده</h4>
                        <p>نام خریدار</p>
                        <a href="#"><i style="font-size:25px;" class="bx bx-like "></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="{{asset('assets/img/portfolio/portfolio-9.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>بسته ی خریداری شده</h4>
                        <p>نام خریدار</p>
                        <a href="#"><i style="font-size:25px;" class="bx bx-like "></i></a>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- پایان نظرات -->


    <!-- ======= قیمت ها ======= -->
    <section id="pricing" class="pricing">
        <div class="container">
            <div class="section-title">
                <h2>قیمت ها</h2>
            </div>

            <div class="row ">
                @foreach($packages as $package)
                    <div class="col-lg-3 col-md-6 mt-4">
                        <div class="box @if($package->id === 1) recommended @endif">
                            @if($package->id ===1)
                                <span class="recommended-badge">پیشنهادِ moncoeur</span>
                            @endif
                            <h3>{{$package->title}}</h3>
                            <h4><span>ماه /</span> {{$package->price}} <sup>هزار تومان </sup></h4>
                            <ul>
                                <li>ارسال روزانه پیام</li>
                                <li>امکان فعالسازی هدیه برای دیگران</li>
                                <li>پشتیبانی‌ ۲۴ ساعته</li>
                                <li style=" font-weight: bold;">{{$package->discount}} درصد تخفیف</li>
                                <li style="color: #fc5b5b; font-weight: bolder;" class="na">
                                    {{$package->oldPrice}} هزار تومان
                                </li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">فعال سازی
                                    <i style="font-size: 20px" class="bi bi-cart3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- پایان قیمت ها -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>درباره ما</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat
                        </li>
                        <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate
                            velit
                        </li>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <a href="#" class="btn-learn-more">Learn More</a>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>تماس با ما</h2>
                <p> لطفاً پیش از ارسال ایمیل یا تماس تلفنی، ابتدا
                    <a href="#faq">پرسش‌‌های متداول</a>
                    را مشاهده کنید.
                </p>
            </div>
        </div>


        <div class="container">

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="email">
                            <i class="ri-mail-line"></i>
                            <h4>ایمیل:</h4>
                            <p>info@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="ri-phone-line"></i>
                            <h4>شماره تماس:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="{{route('contact.store')}}" method="post" role="form" class="">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                       required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                   required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                      required></textarea>
                        </div>
                        @if(session('success'))
                            <div class="my-3">
                                <div class="sent-message">پیام شما ارسال شد متشکریم!</div>
                            </div>
                        @endif
                        <br>

                        <div class="text-center">
                            <button class="get-started-btn scrollto" type="submit">ارسال نظر</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

    <!-- ======= سوالات مخاطبان ======= -->
    <section id="faq" class="faq">
        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div class="content">
                        <h3>
                            <strong>سوالاتی</strong>
                            که می پرسید:</h3>
                    </div>

                    <div class="accordion-list">
                        <ul>
                            <li>
                                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1">
                                    آیا با فعال سازی سیستم پیامک انگیزشی از گوشی ما شارژکم می شود؟
                                    <i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                    <p>
                                        خیر، هیچ شارژی از گوشی شما کم نخواهد شد.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">
                                    چگونه سامانه ارسال پیامک انگیزشی را تمدید کنیم؟
                                    <i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        تنها با ثبت نام و خرید اشتراک می توانید از خدمات ما بهره ببرید.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">
                                    چگونه سامانه ارسال پیامک انگیزشی را تمدید کنیم؟
                                    <i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        تنها با ثبت نام و خرید اشتراک می توانید از خدمات ما بهره ببرید.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed">
                                    آیا می شود سرویس پیام انگیزشی را برای خانواده و دوستان خریداری کنیم؟
                                    <i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        بله برای هر کسی که بخواید می توانید تهیه کنید. برای فعال سازی باید زمان ثبت نام
                                        شماره ی فرد مورد نظر را وارد کنید و تیک گزینه ی “می خواهید یک حساب کاربری ایجاد
                                        کنید؟”را خالی بگذارید.

                                    </p>
                                </div>
                            </li>
                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5" class="collapsed">
                                    اگر سوال یا مشکلی پیش امد چگونه پیام بدهیم؟
                                    <i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        می توانید از طریق شماره تماس ۰۹۳۸۲۶۰۲۱۷۱ پیام ار سال فرمایید یا تماس بگیرید و یا
                                        به تلگرام همین شماره پیام ارسال کنید .می تونید از طریق ای دی اینستاگرام
                                        mohebiseresht@ نیز دایرکت بدهید.در اسرع وقت مشکل شما را بررسی می کنم.

                                    </p>
                                </div>
                            </li>
                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-6" class="collapsed">
                                    آیا امکان لغو سیستم پیام انگیزشی وجود دارد؟
                                    <i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-6" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        خیر متاسفانه امکان لغو سامانه وجود ندارد.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-7" class="collapsed">
                                    بعد از فعال سازی سامانه پیامک انگیزشی شروع پیامک ها از چه زمانی اغاز می شود؟
                                    <i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-7" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        بعد از خرید و فعال سازی اشتراک از روز بعد ساعت ۸ صبح ارسال پیامک ها اغاز می
                                        گردد.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-8" class="collapsed">
                                    آیا پیامک های تبلیغاتی سیم کارت ما غیر فعال باشد باز هم پیامک انگیزشی برای ما ارسال
                                    می شود؟
                                    <i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-8" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        بله اگر پیامک های تبلیغاتی شما نیز غیر فعال باشد پیامک های انگیزشی سایت محبی
                                        سرشت برای شما ارسال می گردد. این در حالی است که تعدادی از سایت های دیگر که
                                        اشتراک پیامک انگیزشی ارسال می نمایند قابلیت ارسال پیامک انگیزشی به سیم کارت هایی
                                        که تبلیغات را غیر فعال کرده اند ندارند.
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                     style='background-image: url("{{asset('assets/img/faq.jpg')}}");'>&nbsp;
                </div>
            </div>

        </div>
    </section><!-- End Faq Section -->
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
