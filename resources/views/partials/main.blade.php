<!DOCTYPE html>
<html lang="en">

<head>

    {{-- meta tags --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Teknik Informatika Politeknik Negeri Banyuwangi">
    <meta name="author" content="Himpunan Mahasiswa Teknik Informatika">
    {{-- end meta tags --}}

    {{-- title --}}
    <title>TI Poliwangi || {{ $title }}</title>
    {{-- end title --}}

    {{-- icon --}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('asset/images/logo.png') }}">
    {{-- end icon --}}

    {{-- font --}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900"
        rel="stylesheet">
    {{-- end font --}}

    {{-- Bootstrap core CSS --}}
    <link href="{{ asset('asset/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- Additional CSS Files --}}
    <link rel="stylesheet" href="{{ asset('asset/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/templatemo-grad-school.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">
    {{-- end additional css files --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/feather-icons">
</head>

<body>

    <!--header-->
    @section('navbar')
    @include('layout.navbar')
    @show
    {{-- end header --}}

    {{-- content --}}
    @yield('content')
    {{-- end content --}}

    {{-- footer --}}
    @section('footer')
    @include('layout.footer')
    @show
    {{-- end footer --}}

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('asset/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- end bootstrap core JavaScript --}}

    {{-- javascript --}}
    <script src="{{ asset('asset/js/isotope.min.js') }}"></script>
    <script src="{{ asset('asset/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('asset/js/lightbox.js') }}"></script>
    <script src="{{ asset('asset/js/tabs.js') }}"></script>
    <script src="{{ asset('asset/js/video.js') }}"></script>
    <script src="{{ asset('asset/js/slick-slider.js') }}"></script>
    <script src="{{ asset('asset/js/custom.js') }}"></script>
    <script src="{{ asset('asset/js/app.js') }}"></script>
    {{-- end javascript --}}
</body>

</html>