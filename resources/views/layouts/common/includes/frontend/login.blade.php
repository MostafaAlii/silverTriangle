<div class="header-extra d-flex align-items-center">
    <!-- === button header === -->
    <div class="nav-toggler">
        <span></span><span></span><span></span>
    </div>

    @guest
        <!-- === box login / register === -->
        <div class="navbar-btn hoverstyle">
            <a type="button" class="main-btn rounded-btn icon-right small-size lgri"
                data-animation="fadeInUp" data-toggle="modal" data-target="#loginForm"
                data-whatever="@mdo">تسجيل-دخول / تسجيل عضويه<i
                    class="fal fa-long-arrow-right transformrotate"></i></a>

            <a type="button" class="d-none main-btn rounded-btn icon-right small-size neww"
                data-animation="fadeInUp" data-toggle="modal" data-target="#loginForm" data-whatever="@mdo">
                <i class="fas fa-user cdnfont"></i></a>

            <div class="modal fade model-lg" id="loginForm" style="top: 8%;" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">

                <div class="modal-dialog">

                    <div class="modal-content" style="border-radius: 1%;">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                        <main class="login-main">
                            <div class="box">
                                <div class="inner-box">
                                    <div class="forms-wrap">
                                        <!-- === box login === -->
                                        @include('frontend.auth.login')
                                        @include('frontend.auth.register')
                                    </div>
                                    <!-- === box image === -->
                                    <div class="carousel">

                                        <div class="images-wrapper">
                                            <img src="{{asset('assets/website/img/inside/image1.png')}}" class="image img-1 show" alt="" />
                                            <img src="{{asset('assets/website/img/inside/image2.png')}}" class="image img-2" alt="" />
                                            <img src="{{asset('assets/website/img/inside/image3.png')}}" class="image img-3" alt="" />
                                        </div>

                                        <div class="text-slider">

                                            <div class="text-wrap">
                                                <div class="text-group">
                                                    <h2> إنشاء الدورات الخاصة بك </h2>
                                                    <h2> تخصيص كما تريد </h2>
                                                    <h2> قم بدعوة أصدقائك هنا </h2>
                                                </div>
                                            </div>

                                            <div class="bullets">
                                                <span class="active" data-value="1"></span>
                                                <span data-value="2"></span>
                                                <span data-value="3"></span>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </main>

                    </div>

                </div>

            </div>

        </div>
        <!-- === End box login / register === -->
    @endguest
</div>