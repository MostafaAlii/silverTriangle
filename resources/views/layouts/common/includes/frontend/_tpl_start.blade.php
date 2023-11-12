<!DOCTYPE html>
<html lang="zxx" dir="rtl">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--====== Title ======-->
    <title>@yield('title')</title>
    <!--====== Favicon Icon ======-->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/website/img/logo/logo.png')}}"/>
    <!-- ====== font googel ===== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('assets/website/css/bootstrap.min.css')}}" />
    <!--====== Slick Slider ======-->
    <link rel="stylesheet" href="{{asset('assets/website/css/slick.css')}}" />
    <!--====== Magnific ======-->
    <link rel="stylesheet" href="{{asset('assets/website/css/magnific-popup.css')}}" />
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/website/css/animate.min.css')}}" />
    <!--====== Font Awesome ======-->
    <link rel="stylesheet" href="{{asset('assets/website/css/font-awesome.min.css')}}" />
    <!--====== Main Css ======-->
    <link rel="stylesheet" href="{{asset('assets/website/css/style.css')}}" />
    <!--====== Arabic Css ======-->
    <link rel="stylesheet" href="{{asset('assets/website/css/arabic.css')}}" />
    <!--====== Jquery ======-->
    <script src="{{asset('assets/website/js/jquery-1.12.4.min.js')}}"></script>
    @yield('css')
</head>

<body>
    <!--====== Preloader Start ======-->
    <div id="preloader">
        <div class="loader-cubes">
            <div class="loader-cube1 loader-cube"></div>
            <div class="loader-cube2 loader-cube"></div>
            <div class="loader-cube4 loader-cube"></div>
            <div class="loader-cube3 loader-cube"></div>
        </div>
    </div>
    <!--====== Preloader End ======-->