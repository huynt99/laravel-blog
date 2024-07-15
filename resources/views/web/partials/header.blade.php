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
                <livewire:main-menu/>

            </div>
        </div>
    </div>
</header>
