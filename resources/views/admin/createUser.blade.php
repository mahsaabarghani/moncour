<!DOCTYPE html>
<html lang='fa' dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KnightOne Bootstrap Template - Index</title>

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

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Iranyekan', sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="submit"],
        button,
        a.btn {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            text-align: center;
            display: inline-block;
            text-decoration: none;
        }

        button,
        a.btn {
            background-color: #009961;
            color: #fff;
            cursor: pointer;
        }

        a.btn.cancel {
            background-color: #ef0404;
        }

        button:hover,
        a.btn:hover {
            opacity: 0.8;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
    </style>
</head>

<body>
@if(session('success'))
    <div class="alert alert-success" style="text-align: center;">
        کاربر با موفقیت ایجاد شد!
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger" style="text-align: center;">
        {{ session('error') }}
    </div>
@endif
{{$errors}}
@foreach ($errors->all() as $error)
    <div class="alert alert-danger" style="text-align: center;">
        {{ $error}}
    </div>

@endforeach
<div class="container">

    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="نام">
        <input type="text" name="userName" placeholder="شماره تماس">
        <button type="submit">ایجاد کاربر جدید</button>
    </form>
    <a href="{{ route('admin.index').'#userManagement' }}" class="btn btn-danger cancel">انصراف</a>
</div>

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
    // Your custom JavaScript here
</script>

</body>

</html>
