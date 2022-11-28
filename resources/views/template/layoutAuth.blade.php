<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    {{-- Izitoast --}}
    <link rel="stylesheet" href="{{ asset('izitoast/iziToast.min.css') }}">

    <link rel="stylesheet" href="{{ asset('authPageTemplate/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('authPageTemplate/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('authPageTemplate/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('authPageTemplate/css/style.css') }}">

    @stack('stylesheet')
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>

        </div>
    </div>

    {{-- Izitoast --}}
    <script src="{{ asset('izitoast/iziToast.min.js') }}"></script>

    <script src="{{ asset('authPageTemplate/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('authPageTemplate/js/popper.min.js') }}"></script>
    <script src="{{ asset('authPageTemplate/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('authPageTemplate/js/main.js') }}"></script>

    @stack('script')
</body>
</html>