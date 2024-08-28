<!DOCTYPE html>
<html lang='fa' dir="rtl">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>KnightOne Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="{{ asset('font.dash.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/iranyekan1.woff') }}" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

<!-- Header section -->
<header id="header" class="fixed-top">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
                <h1 class="logo me-auto me-lg-0"><a href="{{ route('main.index') }}">moncour admin</a></h1>

                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li><a class="nav-link scrollto active" href="#" onclick="showSection('userManagement')">مدیریت
                                کاربران</a></li>
                        <li><a class="nav-link scrollto" href="#" onclick="showSection('contactManagement')">مدیریت تماس
                                با ما </a></li>
                        <li><a class="nav-link scrollto" href="#" onclick="showSection('messageManagement')">مدیریت پیام
                                های سیستم </a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

                <li>
                    <a href="{{ route('logout') }}" class="get-started-btn scrollto">خروج</a>
                </li>
            </div>
        </div>
    </div>
</header><!-- End Header -->
@php
    $count = 0;
@endphp
<!-- Content Sections -->
<div class="container mt-5 pt-5">
    <!-- مدیریت کاربران Section -->
    <div id="userManagement" class="content-section table-responsive">
        <div class="row">
            <h2>مدیریت کاربران</h2>
            <a href="#" class="btn btn-primary" style="background-color: #009961;">ایجاد کاربر جدید</a>
        </div>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">ردیف</th>
                <th scope="col">نام</th>
                <th scope="col">نام کاربری</th>
                <th scope="col">رمزعبور</th>
                <th scope="col">بسته های خریداری شده</th>
                <th scope="col">نوع کاربر</th>
                <th scope="col">عملیات کاربر</th>
            </tr>
            </thead>
            <tbody>
            @php $count = 0; @endphp
            @foreach($users as $user)
                <tr>
                    <td>{{ ++$count }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->userName }}</td>
                    <td>{{ $user->userName }}</td>
                    <td>بسته ها</td>
                    <td>
                        @if($user->role == 0)
                            مدیر وب سایت
                        @elseif($user->role == 1)
                            ادمین وب سایت
                        @elseif($user->role == 2)
                            کاربر عادی
                        @endif
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm">غیرفعال کردن کاربر</a>
                        <a href="#" class="btn btn-primary btn-sm">عملیات</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!--مدیریت پیام های تماس با م Section -->
    <div id="contactManagement" class="content-section" style="display: none;">
        <h2>مدیریت پیام های تماس با ما</h2>

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">ردیف</th>
                <th scope="col">نام</th>
                <th scope="col">ایمیل</th>
                <th scope="col">موضوع</th>
                <th scope="col">متن پیام</th>
                <th scope="col">عملیات کاربر</th>
            </tr>
            </thead>
            <tbody>
            @php $count = 0; @endphp
            @foreach($contactus as $contact)
                <tr>
                    <td>{{ ++$count }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->message }}</td>

                    <td>
                        <a href="#" class="btn btn-primary btn-sm">غیرفعال کردن کاربر</a>
                        <a href="#" class="btn btn-primary btn-sm">عملیات</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- مدیریت پیام های سیستم Section -->
    <div id="messageManagement" class="content-section" style="display: none;">
        <div class="row">
            <h2>مدیریت پیام های سیستم</h2>
            <a href="#" class="btn btn-primary" style="background-color: #009961;">ایجاد پیام جدید</a>
        </div>

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">ردیف</th>
                <th scope="col">زمان</th>
                <th scope="col">موضوع</th>
                <th scope="col">متن پیام</th>
                <th scope="col">عملیات کاربر</th>
            </tr>
            </thead>
            <tbody>
            @php $count = 0; @endphp
            @foreach($messages as $message)
                <tr>
                    <td>{{ ++$count }}</td>
                    <td>{{ $message->time }}</td>
                    <td>{{ $message->title }}</td>
                    <td>{{ $message->body }}</td>

                    <td>
                        <a href="#" class="btn btn-primary btn-sm">غیرفعال کردن کاربر</a>
                        <a href="#" class="btn btn-primary btn-sm">عملیات</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- Custom JS -->
<script>
    function showSection(sectionId) {
        document.getElementById('userManagement').style.display = 'none';
        document.getElementById('contactManagement').style.display = 'none';
        document.getElementById('messageManagement').style.display = 'none';

        document.getElementById(sectionId).style.display = 'block';
    }
</script>

</body>

</html>
