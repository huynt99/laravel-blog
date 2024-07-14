<header>
    <!-- Header -->
    <div class="container-menu-desktop">
        <!--        -->
        <div class="topbar">
            <div class="content-topbar container h-100">
                <div class="left-topbar">
                    <a href="{{route('panel.home')}}" class="left-topbar-item" target="_blank">
                        Panel
                    </a>

                    @auth
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button type="submit"  class="left-topbar-item">
                                {{__('values.logout')}}
                            </button>
                        </form>
                    @endauth
                    @guest
                        <a href="{{route('register')}}" class="left-topbar-item">
                            {{__('values.register')}}
                        </a>

                        <a href="{{route('login')}}" class="left-topbar-item">
                            {{__('values.login')}}
                        </a>
                    @endguest

                </div>

                <div class="right-topbar">
                    <a href="https://www.facebook.com/lay.tu.157/" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                        <span class="fab fa-facebook-f"></span>
                    </a>
                    <a href="https://www.linkedin.com/in/huynguyen157/" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                        <span class="fab fa-linkedin"></span>
                    </a>
                </div>
            </div>
        </div>

        <!--        -->
        <div class="wrap-logo container">
            <!-- Logo -->
            <div class="logo" style="display: flex; justify-content: center; align-items: center;">
                <a href="{{ route('home') }}"><img style="height: 120px; width: 120px" src="{{asset('web/images/icons/logo.png')}}" alt="IMG-LOGO"></a>
            </div>

            <!-- Banner -->
            <div class="banner-header">
                <a href="#"><img src="{{asset('web/images/banner-01.jpg')}}" alt="IMG"></a>
            </div>
        </div>

        <!--        -->
        <div class="wrap-main-nav">
            <div class="main-nav">
                <!-- Menu desktop -->
                <nav class="menu-desktop">
                    <a class="logo-stick" href="index.html">
                        <img src="web/images/icons/logo-01.png" alt="LOGO">
                    </a>

                    <ul class="main-menu">
                        <li class="main-menu-active">
                            <a href="{{route('home')}}">Home</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('home')}}">Homepage v1</a></li>
                                <li><a href="{{route('home')}}">Homepage v2</a></li>
                                <li><a href="{{route('home')}}">Homepage v3</a></li>
                            </ul>
                        </li>

                        <li class="mega-menu-item">
                            <a href="category-01.html">News</a>

                            <div class="sub-mega-menu">
                                <div class="nav flex-column nav-pills" role="tablist">
                                    <a class="nav-link active" data-toggle="pill" href="#news-0" role="tab">All</a>
                                    <a class="nav-link" data-toggle="pill" href="#news-1" role="tab">Fashion</a>
                                    <a class="nav-link" data-toggle="pill" href="#news-2" role="tab">Technology</a>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane show active" id="news-0" role="tabpanel">
                                        <div class="row">
                                            <div class="col-3">
                                                <!-- Item post -->
                                                <div>
                                                    <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                        <img src="web/images/post-05.jpg" alt="IMG">
                                                    </a>

                                                    <div class="p-t-10">
                                                        <h5 class="p-b-5">
                                                            <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                Donec metus orci, malesuada et lectus vitae
                                                            </a>
                                                        </h5>

                                                        <span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 18
																</span>
															</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <!-- Item post -->
                                                <div>
                                                    <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                        <img src="web/images/post-10.jpg" alt="IMG">
                                                    </a>

                                                    <div class="p-t-10">
                                                        <h5 class="p-b-5">
                                                            <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                Donec metus orci, malesuada et lectus vitae
                                                            </a>
                                                        </h5>

                                                        <span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Finance
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 15
																</span>
															</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <!-- Item post -->
                                                <div>
                                                    <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                        <img src="web/images/post-14.jpg" alt="IMG">
                                                    </a>

                                                    <div class="p-t-10">
                                                        <h5 class="p-b-5">
                                                            <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                Donec metus orci, malesuada et lectus vitae
                                                            </a>
                                                        </h5>

                                                        <span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Beach
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 12
																</span>
															</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <!-- Item post -->
                                                <div>
                                                    <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                        <img src="web/images/post-36.jpg" alt="IMG">
                                                    </a>

                                                    <div class="p-t-10">
                                                        <h5 class="p-b-5">
                                                            <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                Donec metus orci, malesuada et lectus vitae
                                                            </a>
                                                        </h5>

                                                        <span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Technology
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 20
																</span>
															</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="news-1" role="tabpanel">
                                        <div class="row">
                                            <div class="col-3">
                                                <!-- Item post -->
                                                <div>
                                                    <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                        <img src="web/images/post-21.jpg" alt="IMG">
                                                    </a>

                                                    <div class="p-t-10">
                                                        <h5 class="p-b-5">
                                                            <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                Donec metus orci, malesuada et lectus vitae
                                                            </a>
                                                        </h5>

                                                        <span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 18
																</span>
															</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <!-- Item post -->
                                                <div>
                                                    <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                        <img src="web/images/post-24.jpg" alt="IMG">
                                                    </a>

                                                    <div class="p-t-10">
                                                        <h5 class="p-b-5">
                                                            <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                Donec metus orci, malesuada et lectus vitae
                                                            </a>
                                                        </h5>

                                                        <span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 15
																</span>
															</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <!-- Item post -->
                                                <div>
                                                    <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                        <img src="web/images/post-22.jpg" alt="IMG">
                                                    </a>

                                                    <div class="p-t-10">
                                                        <h5 class="p-b-5">
                                                            <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                Donec metus orci, malesuada et lectus vitae
                                                            </a>
                                                        </h5>

                                                        <span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 12
																</span>
															</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <!-- Item post -->
                                                <div>
                                                    <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                        <img src="web/images/post-23.jpg" alt="IMG">
                                                    </a>

                                                    <div class="p-t-10">
                                                        <h5 class="p-b-5">
                                                            <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                Donec metus orci, malesuada et lectus vitae
                                                            </a>
                                                        </h5>

                                                        <span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 20
																</span>
															</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="news-2" role="tabpanel">
                                        <div class="row">
                                            <div class="col-3">
                                                <!-- Item post -->
                                                <div>
                                                    <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                        <img src="web/images/post-35.jpg" alt="IMG">
                                                    </a>

                                                    <div class="p-t-10">
                                                        <h5 class="p-b-5">
                                                            <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                Donec metus orci, malesuada et lectus vitae
                                                            </a>
                                                        </h5>

                                                        <span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 18
																</span>
															</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <!-- Item post -->
                                                <div>
                                                    <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                        <img src="web/images/post-36.jpg" alt="IMG">
                                                    </a>

                                                    <div class="p-t-10">
                                                        <h5 class="p-b-5">
                                                            <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                Donec metus orci, malesuada et lectus vitae
                                                            </a>
                                                        </h5>

                                                        <span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 12
																</span>
															</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <!-- Item post -->
                                                <div>
                                                    <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                        <img src="web/images/post-37.jpg" alt="IMG">
                                                    </a>

                                                    <div class="p-t-10">
                                                        <h5 class="p-b-5">
                                                            <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                Donec metus orci, malesuada et lectus vitae
                                                            </a>
                                                        </h5>

                                                        <span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 20
																</span>
															</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <!-- Item post -->
                                                <div>
                                                    <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                        <img src="web/images/post-38.jpg" alt="IMG">
                                                    </a>

                                                    <div class="p-t-10">
                                                        <h5 class="p-b-5">
                                                            <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                Donec metus orci, malesuada et lectus vitae
                                                            </a>
                                                        </h5>

                                                        <span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 15
																</span>
															</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
