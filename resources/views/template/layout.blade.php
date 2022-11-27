<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/css/all.min.css') }}">

    {{-- DataTables --}}
    <link rel="stylesheet" href="{{ asset('datatables/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('datatables/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('datatables/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/modules/css/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/css/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/css/owl.theme.default.min.css') }}">

    {{-- FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    {{-- Izitoast --}}
    <link rel="stylesheet" href="{{ asset('/izitoast/iziToast.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            @include('template.navbar')
            
            @include('template.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>

            @include('template.footer')
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/modules/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/modules/js/popper.js') }}"></script>
    <script src="{{ asset('assets/modules/js/tooltip.js') }}"></script>
    <script src="{{ asset('assets/modules/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/modules/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/modules/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('assets/modules/js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/modules/js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/modules/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/modules/js/summernote-bs4.js') }}"></script>
    <script src="{{ asset('assets/modules/js/jquery.chocolat.min.js') }}"></script>

    {{-- DataTables --}}
    <script src="{{ asset('datatables/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('datatables/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('datatables/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('datatables/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/index.js') }}"></script>

    {{-- Izitoast --}}
    <script src="{{ asset('/izitoast/iziToast.min.js') }}"></script>
    
    {{-- SweetAlert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    @stack('script')
</body>

</html>