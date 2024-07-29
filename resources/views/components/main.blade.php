<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <link rel="icon" type="image/png" href="{{ asset('asset/img/favicon.png') }}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @php
        $seo = $seos->first();
    @endphp

    @if ($seo && $seo->title)
        <title>{{ $seo->title }}</title>
    @endif

    @if ($seo && $seo->description)
        <meta name="description" content="{{ $seo->description }}">
    @endif

    {{--    @if ($seo && $seo->canonical) --}}
    {{--        <link rel="canonical" href="{{ $seo->canonical }}"> --}}
    {{--    @endif --}}

    <!-- Open Graph data -->
    @if ($seo && $seo->og_title)
        <meta property="og:title" content="{{ $seo->og_title }}">
    @endif

    @if ($seo && $seo->og_description)
        <meta property="og:description" content="{{ $seo->og_description }}">
    @endif

    @if ($seo && $seo->og_type)
        <meta property="og:type" content="{{ $seo->og_type }}">
    @endif

    @if ($seo && $seo->og_url)
        <meta property="og:url" content="{{ $seo->og_url }}">
    @endif

    @if ($seo && $seo->og_image)
        <meta property="og:image" content="{{ $seo->og_image }}">
    @endif

    @if ($seo && $seo->og_site_name)
        <meta property="og:site_name" content="{{ $seo->og_site_name }}">
    @endif

    @if ($seo && $seo->og_locale)
        <meta property="og:locale" content="{{ $seo->og_locale }}">
    @endif

    <!-- Twitter data -->
    @if ($seo && $seo->og_title)
        <meta name="twitter:title" content="{{ $seo->og_title }}">
    @endif

    @if ($seo && $seo->og_description)
        <meta name="twitter:description" content="{{ $seo->og_description }}">
    @endif

    @if ($seo && $seo->og_image)
        <meta name="twitter:image" content="{{ $seo->og_image }}">
    @endif

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('asset/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
</head>

<body>


    @include('components.top')

    <!-- Navbar & Hero Start -->
    @include('components.header')

    @yield('content')

    <!-- Footer Start -->
    @include('components.footer')
    <!-- Footer End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('asset/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('asset/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('asset/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('asset/lib/lightbox/js/lightbox.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('asset/js/main.js') }}"></script>
</body>

</html>
