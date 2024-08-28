<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href='{{asset("assets/vendor/bootstrap/css/bootstrap.min.css")}}' rel="stylesheet">
    <link href='{{asset("assets/vendor/bootstrap-icons/bootstrap-icons.css")}}' rel="stylesheet">
    <link href='{{asset("assets/vendor/boxicons/css/boxicons.min.css")}}' rel="stylesheet">
    <link href='{{asset("assets/vendor/glightbox/css/glightbox.min.css")}}' rel="stylesheet">
    <link href='{{asset("assets/vendor/remixicon/remixicon.css")}}' rel="stylesheet">
    <link href='{{asset("assets/vendor/swiper/swiper-bundle.min.css")}}' rel="stylesheet">

    <style>
        .full-height {
            height: 75vh; /* Adjusted height */
        }
        .centered-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            margin-top: 3vh; /* Reduced space from top */
        }
        .form-container, .image-container {
            padding: 15px; /* Reduced padding */
            box-sizing: border-box;
            height: 100%;
        }
        .image-container img {
            width: 100%;
            height: auto;
            object-fit: contain; /* Ensures the image fits within the container */
        }
        .spacing {
            margin-right: 20px; /* Reduced spacing */
        }
        .form-container .mb-3 {
            margin-bottom: 1.5rem; /* Reduced bottom margin */
        }
        .form-container button {
            margin-top: 1.5rem; /* Reduced top margin */
        }
        .page-title {
            text-align: center;
            margin-top: 50px; /* Reduced space from top */
            color: #009961; /* Choose your preferred color */
            font-weight: 900; /* Bolder text */
            font-size: 4rem; /* Adjusted font size */
        }
    </style>
</head>
<body>
<h2 class="page-title">صفحه ی ورود</h2>

<div class="container full-height">
    <div class="row centered-container g-5">
        <!-- First Form -->
        <div class="col-md-6 form-container d-flex align-items-center justify-content-center">
            <form method="POST" action="{{ route('login') }}" class="w-100">
            @csrf

            <!-- User Name -->
                <div class="mb-4">
                    <label for="userName" class="form-label">{{ __('نام کاربری') }}</label>
                    <input type="text" id="userName" name="userName" class="form-control" value="{{ old('userName') }}" required autofocus autocomplete="username">
                    @error('userName')
                    <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="form-label">{{ __('رمز عبور') }}</label>
                    <input type="password" id="password" name="password" class="form-control" required autocomplete="current-password">
                    @error('password')
                    <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Actions -->
                <div dir="ltr" class="d-flex justify-content-between align-items-center mb-4">
                    @if (Route::has('password.request'))
                        <a class="text-decoration-none" style="color:#051b11;" href="{{ route('password.request') }}">{{ __('رمز عبور خود را فراموش کرده اید؟') }}</a>
                    @endif
                </div>

                <button type="submit" class="btn w-100" style="background-color: #009961; color: white">{{ __('ورود') }}</button>
            </form>
        </div>

        <!-- Second Form -->
        <div class="col-md-6 image-container d-flex align-items-center justify-content-center">
            <img src="{{asset('assets/img/undraw_file_sync_ot38.svg')}}" alt="Illustration" class="img-fluid">
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
