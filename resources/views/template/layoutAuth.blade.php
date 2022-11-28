<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    {{-- Izitoast --}}
    <link rel="stylesheet" href="{{ asset('izitoast/iziToast.min.css') }}">

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

    @stack('script')
</body>
</html>