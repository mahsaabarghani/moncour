@extends('layouts.header')
@section('body')
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
    <!-- ======= قیمت ها ======= -->
    <section id="pricing" class="pricing">
        <div class="container">
            <div class="section-title">
                <h2>قیمت ها</h2>
            </div>

            <div class="row">
                @foreach($packages as $package)
                    <div class="col-lg-3 col-md-6 mt-4" style="display: flex; flex-direction: column;">
                        <div class="box @if($package->id === 1) recommended @endif"
                             style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
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
    <!-- ======= نظرات شما ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="section-title">
                <h2>نظرات شما</h2>
            </div>

            <div>
                <div class="row portfolio-container">
                    @if($showContactMessages->isEmpty())
                        <div class="col-12">
                            <p style="text-align: center;font-weight: bolder;color: #0f5132;font-size: larger">نظری وجود
                                ندارد</p>
                        </div>
                    @else
                        @php
                            $count = 0;
                        @endphp
                        @foreach($showContactMessages as $showContactMessage)
                            @if($count == 9)
                                @break
                            @endif
                            <div class="col-md-3 portfolio-item filter-app portfolio-box" style="height: 150px;">
                                {{-- <img src="{{asset('assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt=""> --}}
                                <p>{{$showContactMessage->message}}</p>
                                <div class="portfolio-info">
                                    <h4>{{$showContactMessage->subject}}</h4>
                                    <p>{{$showContactMessage->name}}</p>
                                    <a href="#"><i style="font-size:25px;" class="bx bx-like"></i></a>
                                </div>
                            </div>
                            @php
                                $count+=1;
                            @endphp
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- پایان نظرات -->




    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>درباره ما</h2>
                <p>
                    ما یک وب‌سایت انگیزشی هستیم که بسته‌های پیامکی انگیزشی ارائه می‌دهیم. هدف ما این است که به شما کمک
                    کنیم هر روز با انرژی و انگیزه شروع کنید و در طول روز با پیام‌های انگیزشی همراه شما باشیم.
                </p>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        با خرید بسته‌های پیامکی ما، در هر ساعتی از روز پیامک‌های انگیزشی دریافت خواهید کرد که به شما کمک
                        می‌کند به اهداف خود برسید و همیشه با انگیزه بمانید.
                    </p>
                    <a href="#" class="btn-learn-more">بیشتر بدانید</a>


                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <ul>
                        <li>
                            <div>دریافت پیام‌های انگیزشی روزانه</div>
                            <i class="ri-check-double-line"></i></li>
                        <li><i class="ri-check-double-line"></i> امکان فعالسازی هدیه برای دیگران</li>
                        <li><i class="ri-check-double-line"></i> پشتیبانی ۲۴ ساعته</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- End About Us Section -->


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
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="موضوع"
                                   required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" id="message" rows="5" placeholder="متن پیام"
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
@endsection
