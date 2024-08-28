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
<style>
    .content-section {
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
    }

    .content-section.show {
        opacity: 1;
    }

    #preloader {
        display: block;
        position: fixed;
        left: 0;
        top: 0;
        z-index: 999;
        width: 100%;
        height: 100%;
        overflow: visible;
        background: #ffffff url('https://i.stack.imgur.com/ATB3o.gif') no-repeat center center;
    }

    body.loaded #preloader {
        display: none;
    }
</style>

<body>
<!-- Preloader -->
<div id="preloader"></div>
<!-- Header section -->
<header id="header" class="fixed-top">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
                <h1 class="logo me-auto me-lg-0"><a href="{{ route('main.index') }}">moncour admin</a></h1>

                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li><a class="nav-link scrollto" href="#" data-section-id="userManagement">مدیریت کاربران</a>
                        </li>
                        <li><a class="nav-link scrollto" href="#" data-section-id="contactManagement">مدیریت تماس با
                                ما</a></li>
                        <li><a class="nav-link scrollto" href="#" data-section-id="messageManagement">مدیریت پیام های
                                سیستم</a></li>

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
@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif
@php
    $count = 0;
@endphp
<!-- Content Sections -->
<div class="container mt-5 pt-5">
    <!-- مدیریت کاربران Section -->
    <div id="userManagement" class="content-section table-responsive" style="display: none;">

        <div class="container my-4">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <h2>مدیریت کاربران</h2>
                </div>
                <div class="col-auto">
                    <a href="{{route('user.create')}}" class="btn btn-primary"
                       style="background-color: #009961; font-size: 15px; padding: 10px 20px;">ایجاد کاربر جدید</a>
                </div>
            </div>
        </div>
        <!--مدیریت کاربران فعال Section -->
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">ردیف</th>
                <th scope="col">نام</th>
                <th scope="col">نام کاربری</th>
                <th scope="col">رمزعبور</th>
                <th scope="col">بسته های خریداری شده</th>
                <th scope="col">نوع کاربر</th>
                <th scope="col">زمان ثبت نام</th>
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
                    <td>{{ \Hekmatinasser\Verta\Verta::instance($user->created_at)->format('Y/m/d H:i') }}</td>
                    <td>
                        <a href="{{route('user.destroy',$user->id)}}" class="btn btn-primary btn-sm">غیرفعال کردن
                            کاربر</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <!--مدیریت کاربران غیر فعال Section -->
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">ردیف</th>
                <th scope="col">نام</th>
                <th scope="col">نام کاربری</th>
                <th scope="col">رمزعبور</th>
                <th scope="col">بسته های خریداری شده</th>
                <th scope="col">نوع کاربر</th>
                <th scope="col">زمان ثبت نام</th>
                <th scope="col">عملیات کاربر</th>
            </tr>
            </thead>
            <tbody>
            @php $count = 0; @endphp
            @foreach($deletedUsers as $deletedUser)
                <tr>
                    <td>{{ ++$count }}</td>
                    <td>{{ $deletedUser->name }}</td>
                    <td>{{ $deletedUser->userName }}</td>
                    <td>{{ $deletedUser->userName }}</td>
                    <td>بسته ها</td>
                    <td>
                        @if($deletedUser->role == 0)
                            مدیر وب سایت
                        @elseif($deletedUser->role == 1)
                            ادمین وب سایت
                        @elseif($deletedUser->role == 2)
                            کاربر عادی
                        @endif
                    </td>
                    <td>{{ \Hekmatinasser\Verta\Verta::instance($user->created_at)->format('Y/m/d H:i') }}</td>
                    <td>
                        <a href="{{route('user.restore',$deletedUser->id)}}" class="btn btn-primary btn-sm">فعال کردن
                            کاربر</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
    <!--مدیریت پیام های تماس با م Section -->
    <div id="contactManagement" class="content-section" style="display: none;">

        <div class="container my-4">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <h2>مدیریت پیام های تماس با ما</h2>
                </div>
            </div>
        </div>

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">ردیف</th>
                <th scope="col">نام</th>
                <th scope="col">ایمیل</th>
                <th scope="col">موضوع</th>
                <th scope="col">متن پیام</th>
                <th scope="col">تاریخ ارسال پیام</th>
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
                    <td>{{ \Hekmatinasser\Verta\Verta::instance($contact->created_at)->format('Y/m/d H:i') }}</td>


                </tr>
            @endforeach
            </tbody>
        </table>

        <!-- مدیریت پیام های سیستم Section -->

    </div>
    <!--مدیریت پیام های سیستم Section -->
    <div id="messageManagement" class="content-section" style="display: none;">
        <!--مدیریت پیام های جاری Section -->
        <div class="container my-4">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <h2>مدیریت پیام های سیستم</h2>
                </div>
                <div class="col-auto">
                    <a href="{{route('adminCreateMessage.index')}}" class="btn btn-primary"
                       style="background-color: #009961; font-size: 15px; padding: 10px 20px;">ایجاد پیام جدید</a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">ردیف</th>
                <th scope="col">زمان</th>
                <th scope="col">موضوع</th>
                <th scope="col">متن پیام</th>
                <th scope="col">عملیات پیام</th>
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
                        <a href="{{route('adminDestroyMessage.destroy',$message->id)}}"
                           class="btn btn-primary btn-sm">غیرفعال
                            کردن پیام</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <!--مدیریت پیام های حذف شده Section -->
        <div class="container my-4">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <h2>پیام‌های حذف شده</h2>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">


            <thead>
            <tr>
                <th scope="col">ردیف</th>
                <th scope="col">زمان</th>
                <th scope="col">موضوع</th>
                <th scope="col">متن پیام</th>
                <th scope="col">عملیات پیام</th>
            </tr>
            </thead>
            <tbody>
            @php $count = 0; @endphp
            @foreach($deletedMessages as $deletedMessage)
                <tr>
                    <td>{{ ++$count }}</td>
                    <td>{{ $deletedMessage->time }}</td>
                    <td>{{ $deletedMessage->title }}</td>
                    <td>{{ $deletedMessage->body }}</td>
                    <td>
                        <a href="{{ route('adminRestoreMessage.restore', $deletedMessage->id) }}"
                           class="btn btn-primary btn-sm">فعال کردن پیام</a>
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
        console.log('Showing section:', sectionId);  // Debug log

        // Hide all sections with fade-out effect
        fadeOutSections();

        // Use a timeout to ensure the fade-out effect completes before showing the new section
        setTimeout(function () {
            // Hide all sections
            hideAllSections();

            // Show the selected section
            document.getElementById(sectionId).style.display = 'block';

            // Trigger fade-in effect
            setTimeout(function () {
                document.getElementById(sectionId).classList.add('show');
            }, 10);

            // Store the active section in session storage
            sessionStorage.setItem('activeSection', sectionId);
        }, 500); // Timeout should match the CSS transition duration
    }

    // Function to hide all sections with a fade-out effect
    function fadeOutSections() {
        document.querySelectorAll('.content-section.show').forEach(function (section) {
            section.classList.remove('show');
        });
    }

    // Function to hide all sections without animation
    function hideAllSections() {
        document.querySelectorAll('.content-section').forEach(function (section) {
            section.style.display = 'none';
        });
    }

    // Function to show the last active section on page load
    function showLastActiveSection() {
        var activeSection = sessionStorage.getItem('activeSection');

        if (activeSection) {
            showSection(activeSection);
        } else {
            // Default to userManagement section if no active section is stored
            showSection('userManagement');
        }
    }

    // Call the function to show the last active section on page load
    window.onload = function () {
        document.body.classList.add('loaded');
        showLastActiveSection();
    };

    // Attach click event listeners to navigation links
    document.querySelectorAll('#navbar a.nav-link').forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            var sectionId = this.getAttribute('data-section-id');
            showSection(sectionId);
        });
    });

</script>


</body>
</html>
