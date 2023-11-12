@extends('layouts.website')

@section('title', $title)


@section('css')

@endsection

@section('content')
    <!--====== Header Part Start ======-->
    <header class="header-two header-full-width sticky-header">
        <!-- ======= Start Top Bar ======== -->
        @include('layouts.common.includes.frontend.topHeader')
        <!-- ======= End Top Bar ======== -->
        <!-- ==== Start nav header ==== -->
        <div class="header-navigation">
            <div class="container-fluid d-flex align-items-center justify-content-between">
                <!-- === Start logo === -->
                <div class="header-left">
                    <div class="site-logo">
                        <a href="{{route('home') }}" data-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('assets/website/img/logo/logo.png')}}" alt="Omnivus">
                        </a>
                    </div>
                </div>
                <!-- === End logo === -->
                <!-- === Start nav bar === -->
                <div class="site-nav-menu">
                    <ul class="primary-menu">
                        <li>
                            <a href="#" data-toggle="dropdown" aria-expanded="false">{{ LaravelLocalization::getCurrentLocaleNative() }}</a>
                            <ul class="submenu">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li>
                                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        @auth('web')
                            <li>
                                <a href="#" data-toggle="dropdown" aria-expanded="false">{{get_user_data()->name}}</a>
                                <ul class="submenu">
                                    <li><a onclick="event.preventDefault(); document.getElementById('user-log-out').submit();">تسجيل الخروج</a></li>
                                    <form id="user-log-out" action="{{ route(get_guard_name().'.logout') }}" method="POST">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        @endauth
                        <li class="current">
                            <a href="#">الصفحه الرئيسيه</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">من نحن </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">شركتنا</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="dropdown" aria-expanded="false">خدماتنا</a>
                            <ul class="submenu">
                                <li><a href="#">الخدمات</a></li>
                                <li><a href="#">تفاصيل الخدمات</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" data-toggle="dropdown" aria-expanded="false"> المدونة</a>
                            <ul class="submenu">
                                <li><a href="#"> تفاصيل-المدونه</a></li>
                                <li><a href="#"> أخبار-المدونة </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" data-toggle="dropdown" aria-expanded="false"> صفحات أخؤى</a>
                            <ul class="submenu">
                                <li><a href="#"> لدينا-محفظة</a></li>
                                <li><a href="#">التعليمات</a></li>
                                <li><a href="#">الدفع</a></li>
                                <li><a href="#">فريق</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"> اتصل-بنا</a>
                        </li>
                    </ul>
                    <a href="#" class="nav-close"><i class="fal fa-times"></i></a>
                </div>
                <!-- === End nav bar === -->

                <!-- === Start login/register === -->
                @include('layouts.common.includes.frontend.login')
                <!-- === End login/register === -->
            </div>
        </div>
        <!-- ==== End nav header ==== -->
    </header>
    <!--====== Header Part End ======-->

    <!--====== Banner Slider Start ======-->
    <section class="banner-slider banner-slider-one banner-slider-active">
        <!-- Start Single Banner -->
        <div class="single-banner">
            <div class="container-fluid container-1470">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="banner-text">
                            <div class="banner-content">
                                <span data-animation="fadeInUp" data-delay="0.3s" class="title-tag">
                                    IT Business Consulting
                                </span>
                                <h1 data-animation="fadeInLeft" data-delay="0.6s" class="title">
                                    Best IT Soluations Provider Agency
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".9s">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremda
                                    tium totam rem aperiam eaque ipsa quae ab illo inventore veritatis
                                </p>
                                <a data-animation="fadeInUp" data-delay="1.1s"
                                    class="main-btn rounded-btn icon-right small-size" href="services.html">
                                    Our Services <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block positiona">
                        <div class="banner-img hexagon" data-animation="fadeInRight" data-delay="0.5s">
                            <div class="shape">
                                <img src="{{asset('assets/website/img/banner/banner-04.jpg')}}" alt="Banner">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Single Banner -->

        <!-- Start Single Banner -->
        <div class="single-banner">
            <div class="container-fluid container-1470">
                <div class="row align-items-center ">
                    <div class="col-lg-7">
                        <div class="banner-text">
                            <div class="banner-content">
                                <span data-animation="fadeInUp" data-delay="0.3s" class="title-tag">
                                    IT Business Consulting
                                </span>
                                <h1 data-animation="fadeInLeft" data-delay="0.6s" class="title">
                                    Best IT Soluations Provider Agency
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".9s">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremda
                                    tium totam rem aperiam eaque ipsa quae ab illo inventore veritatis
                                </p>
                                <a data-animation="fadeInUp" data-delay="1.1s"
                                    class="main-btn rounded-btn icon-right small-size" href="services.html">
                                    Our Services <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="banner-img hexagon" data-animation="fadeInRight" data-delay="0.5s">
                            <div class="shape">
                                <img class="" height="100%" src="{{asset('assets/website/img/banner/banner-img.png')}}" alt="Banner">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Single Banner -->
    </section>
    <!--====== Banner Slider End ======-->

    <!--====== Service Part Start ======-->
    <section class="service-section section-gap">
        <div class="container">
            <div class="section-title text-center mb-30">
                <span class="title-tag">SERVICES</span>
                <h2 class="title">What We Do</h2>
            </div>
            <div class="row service-items">
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item color-2 text-center mt-30">
                        <div class="icon hexagon">
                            <div class="shape change-1">
                                <img class="" height="100%" src="{{asset('assets/website/img/service-img/SERVICES-safe.jpg')}}" alt="Banner">
                            </div>
                        </div>
                        <h5 class="title"><a href="service-details.html">Cover a range of topics</a></h5>
                        <p>Driving encompasses various aspects, range of topics to appeal to
                            your audience. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item color-1 text-center mt-30">
                        <div class="icon hexagon">
                            <div class="shape chang">
                                <img class="" height="100%" src="{{asset('assets/website/img/service-img/adviec-safe.jpg')}}" alt="Banner">
                            </div>
                        </div>
                        <h5 class="title"><a href="service-details.html">Provide practical advice</a></h5>
                        <p>Aim to offer valuable and actionable advice that can help drivers improve their skills</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item color-3 text-center mt-30">
                        <div class="icon hexagon">
                            <div class="shape change-2">
                                <img class="" height="100%" src="{{asset('assets/website/img/service-img/post-safe.jpg')}}" alt="Banner">
                            </div>
                        </div>
                        <h5 class="title"><a href="service-details.html">Include multimedia</a></h5>
                        <p>Use visuals such as images, videos, and diagrams to enhance your blog posts
                            can make your blog more engaging</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="service-item color-4 text-center mt-30">
                        <div class="icon hexagon">
                            <div class="shape change-1">
                                <img class="" height="100%" src="{{asset('assets/website/img/service-img/control-safe.jpg')}}" alt="Banner">
                            </div>
                        </div>
                        <h5 class="title"><a href="#">Access control</a></h5>
                        <p>Implement strong access controls to restrict unauthorized access to the database. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Service Part End ======-->

    <!--====== Why Choose Us Start ======-->
    <section class="whu-section section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 order-lg-2 col-md-9">
                    <div class="tile-gallery-two">
                        <div class="img-one wow fadeInLeft" data-wow-delay="0.3s">
                            <img src="{{asset('assets/website/img/tile-gallery/tile-gallery-03.jpg')}}" alt="Image">
                        </div>
                        <div class="img-two text-right wow fadeInUp" data-wow-delay="0.4s">
                            <img src="{{asset('assets/website/img/tile-gallery/tile-gallery-04.jpg')}}" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 col-md-10">
                    <div class="mt-md-gap-60">
                        <div class="section-title mb-50 wow fadeInUp" data-wow-delay="0.3s">
                            <span class="title-tag">Who we are</span>
                            <h2 class="title">Why Choose Us</h2>
                        </div>
                        <ul class="feature-list">
                            <li class="wow fadeInUp" data-wow-delay="0.5s">
                                <h4>Information Technology</h4>
                                <p>
                                    Many aspects of computing and technology and the term is more recognizable than
                                    before.
                                </p>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="0.6s">
                                <h4>Easy To Edit Process</h4>
                                <p>
                                    Many aspects of computing and technology and the term is more recognizable than
                                    before.
                                </p>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="0.7s">
                                <h4>Wordpress Capitable Design</h4>
                                <p>
                                    Many aspects of computing and technology and the term is more recognizable than
                                    before.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Why Choose Us End ======-->

    <!--====== Feature Sectioin Start ======-->
    <section class="feature-section section-gap soft-blue-bg">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-10">
                    <div class="tile-gallery-one wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="img-one">
                            <img src="{{asset('assets/website/img/tile-gallery/tile-gallery-01.jpg')}}" alt="Image">
                        </div>
                        <div class="img-two text-right wow fadeInUp" data-wow-delay="0.5s">
                            <img src="{{asset('assets/website/img/tile-gallery/tile-gallery-02.jpg')}}" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="feature-text-block mt-md-gap-60 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="section-title mb-20">
                            <span class="title-tag">CORE FEATURES</span>
                            <h2 class="title dirctionsaboutus">Get More Good Experience.</h2>
                        </div>
                        <p class="big-text mb-30"> Our knowledge of computers will help us </p>
                        <p>
                            Does any industry face a more complex audience journey and marketing sales process than B2B
                            technology? Consider the number of people who influence a sale, the length of the
                            decision-making cycle, the competing interests of the people who purchase, implement,
                            manage, and use the technology. It’s a lot meaningful content here.
                        </p>
                        <ul class="feature-btn mt-30">
                            <li>
                                <a class="main-btn" href="#">Learn More</a>
                            </li>
                            <li>
                                <a class="main-btn main-btn-2" href="#"><i class="fal fa-video"></i> Intro
                                    Video</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Feature Sectioin End ======-->

    <!--====== Service Section Start ======-->
    <section class="service-section-two section-gap">
        <div class="container">
            <div class="section-title text-center mb-30 wow fadeInUp" data-wow-delay="0.3s">
                <span class="title-tag">OUR LATEST SERVICES</span>
                <h2 class="title fontstyle">We offer a better solution <br>
                    For a safe and enjoyable trip of your own</h2>
            </div>
            <div class="row service-items justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item-two color-1 mt-30">
                        <div class="icon">
                            <img src="{{asset('assets/website/img/icon/solutions-1.jpg')}}" alt="">
                        </div>
                        <h3 class="title"><a href="#">Employee registration and communication</a>
                        </h3>
                        <p>SEmployees should be able to register for the trip through the system</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item-two color-2 mt-30">
                        <div class="icon">
                            <img src="{{asset('assets/website/img/icon/solutions-2.jpg')}}" alt="">
                        </div>
                        <h3 class="title style-titel"><a href="#">Travel and accommodation
                                management</a></h3>
                        <p>The system should integrate with travel booking platforms It should track and consolidate
                            travel details for participants </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item-two color-3 mt-30 systems">
                        <div class="icon">
                            <img src="{{asset('assets/website/img/icon/solutions-3.jpg')}}" alt="">
                        </div>
                        <h3 class="title"><a href="#">Expense management</a></h3>
                        <p>The system should support the tracking and management of trip-related expenses
                            submit expense claims, and streamline the approval process.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item-two color-3 mt-30">
                        <div class="icon">
                            <img src="{{asset('assets/website/img/icon/solutions-4.jpg')}}" alt="">
                        </div>
                        <h3 class="title titel-style"><a href="#">Planning and coordination</a></h3>
                        <p>The system should provide tools for trip organizers to plan and coordinate trip details</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item-two color-1 mt-30">
                        <div class="icon">
                            <img src="{{asset('assets/website/img/icon/solutions-5.jpg')}}" alt="">
                        </div>
                        <h3 class="title titel-style"><a href="#">Activity and Itinerary
                                Management</a></h3>
                        <p>The system should allow organizers to create and manage an itinerary</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item-two color-4 mt-30">
                        <div class="icon">
                            <img src="{{asset('assets/website/img/icon/solutions-6.jpg')}}" alt="">
                        </div>
                        <h3 class="title Titel-pad"><a href="#">Sharing documents and resources</a>
                        </h3>
                        <p>he system can serve as a central platform for sharing important documents</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Service Section End ======-->

    <!--====== Portfolio Section Start ======-->
    <section class="portfolio-area portfolio-area-shape primary-bg section-gap">
        <div class="container">
            <div class="portfolio-top-title mb-60">
                <div class="row align-items-center justify-content-between dirctionsaboutus">
                    <div class="col-lg-6 col-md-8">
                        <div class="section-title white-color mb-md-gap-30">
                            <span class="title-tag">Latest Case Studies</span>
                            <h2 class="title">Reads Our Recent Case Studies </h2>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="portfolio-arrow"></div>
                    </div>
                </div>
            </div>
            <div class="portfolio-items portfolio-slider-one row ">

                <div class="col-lg-4">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img src="{{asset('assets/website/img/portfolio/01.jpg')}}" alt="Image">
                        </div>
                        <div class="portfolio-content">
                            <div class="item textalignr">
                                <span class="category">IT / Solutions </span>
                                <h5 class="title">How To Improve <br> IT knowledge</h5>
                            </div>
                            <a href="#" class="portfolio-link"><i
                                    class="fal fa-long-arrow-right 👉"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img src="{{asset('assets/website/img/portfolio/02.jpg')}}" alt="Image">
                        </div>
                        <div class="portfolio-content">
                            <div class="item textalignr">
                                <span class="category">IT / Solutions </span>
                                <h5 class="title">How To Improve <br> IT knowledge</h5>
                            </div>
                            <a href="#" class="portfolio-link"><i
                                    class="fal fa-long-arrow-right 👉"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img src="{{asset('assets/website/img/portfolio/03.jpg')}}" alt="Image">
                        </div>
                        <div class="portfolio-content">
                            <div class="item textalignr">
                                <span class="category">IT / Solutions </span>
                                <h5 class="title">How To Improve <br> IT knowledge</h5>
                            </div>
                            <a href="#" class="portfolio-link"><i
                                    class="fal fa-long-arrow-right 👉"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img src="{{asset('assets/website/img/portfolio/01.jpg')}}" alt="Image">
                        </div>
                        <div class="portfolio-content">
                            <div class="item textalignr">
                                <span class="category">IT / Solutions </span>
                                <h5 class="title">How To Improve <br> IT knowledge</h5>
                            </div>
                            <a href="#" class="portfolio-link"><i
                                    class="fal fa-long-arrow-right 👉"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img src="{{asset('assets/website/img/portfolio/02.jpg')}}" alt="Image">
                        </div>
                        <div class="portfolio-content">
                            <div class="item textalignr">
                                <span class="category">IT / Solutions </span>
                                <h5 class="title">How To Improve <br> IT knowledge</h5>
                            </div>
                            <a href="#" class="portfolio-link"><i
                                    class="fal fa-long-arrow-right 👉"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img src="{{asset('assets/website/img/portfolio/03.jpg')}}" alt="Image">
                        </div>
                        <div class="portfolio-content">
                            <div class="item textalignr">
                                <span class="category">IT / Solutions </span>
                                <h5 class="title">How To Improve <br> IT knowledge</h5>
                            </div>
                            <a href="#" class="portfolio-link"><i
                                    class="fal fa-long-arrow-right 👉"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--====== Portfolio Section Ends ======-->

    <!--====== Service Area Start ======-->
    <section class="service-section service-with-shape-two section-gap">
        <div class="square-shape"></div>
        <div class="square-shape-two"></div>
        <div class="container">
            <div class="section-title white-color text-center mb-10">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <span class="title-tag">Our latest services</span>
                        <h2 class="title">We Offer Better Soluation In order to serve the user</h2>
                    </div>
                </div>
                <div class="ring-shape"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-9 wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="service-item-four no-border mt-50">
                        <div class="services-thumb">
                            <img src="{{asset('assets/website/img/service-img/13.jpg')}}" alt="Service-Image">
                        </div>
                        <div class="services-content">
                            <div class="icon">
                                <img src="{{asset('assets/website/img/icon/settings.png')}}" alt="Icon">
                            </div>

                            <h4 class="title">Desktop Computing</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantiuto-tam rem aperiam eaque ipsa quae inventore</p>
                            <a href="services-details.html" class="service-link">
                                Read More <i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item-four no-border mt-50">
                        <div class="services-thumb">
                            <img src="{{asset('assets/website/img/service-img/14.jpg')}}" alt="Service-Image">
                        </div>
                        <div class="services-content">
                            <div class="icon">
                                <img src="{{asset('assets/website/img/icon/microchip.png')}}" alt="Icon">
                            </div>

                            <h4 class="title">Infrastructure Planning</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantiuto-tam rem aperiam eaque ipsa quae inventore</p>
                            <a href="#" class="service-link">
                                Read More <i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="service-item-four no-border mt-50">
                        <div class="services-thumb">
                            <img src="{{asset('assets/website/img/service-img/15.jpg')}}" alt="Service-Image">
                        </div>
                        <div class="services-content">
                            <div class="icon">
                                <img src="{{asset('assets/website/img/icon/press.png')}}" alt="Icon">
                            </div>

                            <h4 class="title">Big Data & Analytics</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantiuto-tam rem aperiam eaque ipsa quae inventore</p>
                            <a href="#" class="service-link">
                                Read More <i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Service Area End ======-->

    <!--====== Counter Part Start ======-->
    <section class="counter-section secondary-bg pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="counter-box color-1">
                        <div class="icon"><i class="fal fa-comment-dots"></i></div>
                        <span class="counter">280</span>
                        <h6 class="title">Our Branchs</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="counter-box color-2 mt-40 mb-xs-gap-40">
                        <div class="icon"><i class="fal fa-comment-dots"></i></div>
                        <span class="counter">782</span>
                        <h6 class="title">Projects Done</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="counter-box color-3">
                        <div class="icon"><i class="fal fa-comment-dots"></i></div>
                        <span class="counter">1M</span>
                        <h6 class="title">Happy Users</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="counter-box mt-40">
                        <div class="icon"><i class="fal fa-comment-dots"></i></div>
                        <span class="counter">100</span>
                        <h6 class="title">Awards</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Counter Part End ======-->

    <!--====== Testimonials Section Start ======-->
    <section class="testimonials-section section-gap-bottom">
        <div class="container">

            <div class="testimonials-top mb-80">
                <div class="row align-items-center justify-content-between dirctionsaboutus">
                    <div class="col-lg-6">
                        <div class="section-title mb-md-gap-30">
                            <span class="title-tag">Client Testimonials</span>
                            <h2 class="title">What our clients say </h2>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="testimonials-arrow"></div>
                    </div>
                </div>
            </div>

            <div class="row testimonials-slider-two">
                <div class="col-lg-6">
                    <div class="testimonial-box-two mb-30 directionslider">
                        <div class="testimonial-inner">
                            <div class="testimonial-img">
                                <img src="{{asset('assets/website/img/testimonial-one.jpg')}}" alt="Image">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <div class="content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at est id leo luctus
                                    gravida a in ipsum.
                                </p>
                                <div class="author">
                                    <h6 class="name">Eugene Freeman</h6>
                                    <span class="position">Tincidunt</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-box-two mb-30 directionslider">
                        <div class="testimonial-inner">
                            <div class="testimonial-img">
                                <img src="{{asset('assets/website/img/testimonial-two.jpg')}}" alt="Image">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <div class="content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at est id leo luctus
                                    gravida a in ipsum.
                                </p>
                                <div class="author">
                                    <h6 class="name">Eugene Freeman</h6>
                                    <span class="position">Tincidunt</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-box-two mb-30 directionslider">
                        <div class="testimonial-inner">
                            <div class="testimonial-img">
                                <img src="{{asset('assets/website/img/testimonial-one.jpg')}}" alt="Image">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <div class="content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at est id leo luctus
                                    gravida a in ipsum.
                                </p>
                                <div class="author">
                                    <h6 class="name">Eugene Freeman</h6>
                                    <span class="position">Tincidunt</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-box-two mb-30 directionslider">
                        <div class="testimonial-inner">
                            <div class="testimonial-img">
                                <img src="{{asset('assets/website/img/testimonial-two.jpg')}}" alt="Image">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <div class="content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at est id leo luctus
                                    gravida a in ipsum.
                                </p>
                                <div class="author">
                                    <h6 class="name">Eugene Freeman</h6>
                                    <span class="position">Tincidunt</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Testimonials Section Ends ======-->

    <!--====== Call to action Start ======-->
    <section class="call-to-action" style="background-image: url({{asset('assets/website/img/cta-bg/cta-bg.jpg')}});">
        <div class="container">
            <div class="row align-items-center justify-content-between arabicstyle">
                <div class="col-lg-7 col-md-8">
                    <div class="section-title white-color">
                        <span class="title-tag">CALL TO ACTION</span>
                        <h2 class="title">
                            Let’s Discuss With Us Your Estimate.
                        </h2>
                    </div>
                </div>
                <div class="col-auto">
                    <a href="#" class="main-btn main-btn-3 rounded-btn mt-md-gap-30"> <i class="fal fa-comments"></i>
                        Contact Us</a>
                </div>
            </div>
        </div>
    </section>
    <!--====== Call to action End ======-->

    <!--====== Latest News Start ======-->
    <section class="latest-news section-gap">
        <div class="container">
            <div class="section-title text-center mb-30 wow fadeInUp" data-wow-delay="0.3s">
                <span class="title-tag">Latest News</span>
                <h2 class="title"> Read Our Latest <br> News & Blog </h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="latest-news-box mt-30">
                        <div class="post-thumb">
                            <img src="{{asset('assets/website/img/latest-news/01.jpg')}}" alt="Image">
                        </div>
                        <div class="post-content">
                            <ul class="post-meta">
                                <li><a href="#">By Admin,</a></li>
                                <li><a href="#">05 Aug 2019</a></li>
                            </ul>
                            <h4 class="title">
                                <a href="#">Monthly Web Development Update Design Ethics & Clarity Over Solution</a>
                            </h4>
                            <a href="#" class="read-more-btn">Read More <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="latest-news-box mt-30">
                        <div class="post-thumb">
                            <img src="{{asset('assets/website/img/latest-news/02.jpg')}}" alt="Image">
                        </div>
                        <div class="post-content">
                            <ul class="post-meta">
                                <li><a href="#">By Admin,</a></li>
                                <li><a href="#">05 Aug 2019</a></li>
                            </ul>
                            <h4 class="title">
                                <a href="#">Design System: What It And How To Create One Using Indigo Design Sence</a>
                            </h4>
                            <a href="#" class="read-more-btn">Read More <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="latest-news-box mt-30">
                        <div class="post-thumb">
                            <img src="{{asset('assets/website/img/latest-news/03.jpg')}}" alt="Image">
                        </div>
                        <div class="post-content">
                            <ul class="post-meta">
                                <li><a href="#">By Admin,</a></li>
                                <li><a href="#">05 Aug 2019</a></li>
                            </ul>
                            <h4 class="title">
                                <a href="#">How We Used WebAssembly To Speed Up Our Web App By Omnivus</a>
                            </h4>
                            <a href="#" class="read-more-btn">Read More <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Latest News End ======-->

    <!--====== Back to top start ======-->
    <div class="back-to-top">
        <a href="#"> <i class="fas fa-arrow-up"></i> </a>
    </div>
    <!--====== Back to top start ======-->
@endsection

@section('js')

@endsection