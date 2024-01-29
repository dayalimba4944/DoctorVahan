<!-- @if(session()->has('user_id'))
    <{{ session('user_id') }}
@endif -->
<header id="myHeader" class="animate__animated animate__fadeInDown">

<div class="menumain">

    <div class="container-xl container-lg-fluid">

        <nav class="navbar navbar-expand-lg gap-2 px-1">

            <a class="brand-logo" href="{{asset('Home')}}">

                <img src="/assets/image/logo.webp" alt="logo">

            </a>

            <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo01">

                <ul class="navbar-nav ml-auto align-items-center">

                    <li><a class="" href="{{asset('Home')}}">HOME</a></li>

                    <li><a class="" href="{{asset('AboutUs')}}">ABOUT US</a></li>

                    <li><a class="" href="{{asset('Services')}}">SERVICES</a></li>

                    <li><a class="" href="{{asset('ServiceArea')}}">SERVICES AREA</a>
                    </li>

                    <li><a class="" href="{{asset('corporateenquiry')}}">FRANCHISE
                            ENQUIRY</a></li>
                    <li><a class="" href="{{asset('Contact')}}">CONTACT US</a></li>
                    <li><a class="" href="{{asset('Profile')}}">PROFILE</a></li>

                </ul>

            </div>
            <div class="d-flex flex-row gap-2">
                @if(session()->has('user_id') && session('user_id') !== null)
                    <a href="{{asset('log-out')}}" class="newLoginBtn d-none d-md-block">
                        Logout
                    </a>
                @else
                    <a href="{{asset('Login')}}" class="newLoginBtn d-none d-md-block">
                        Login
                    </a>
                @endif
                <a href="{{asset('getQuate')}}" class="get-quote d-none d-md-block">

                    GET QUOTE

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <div class="menu btn15" data-menu="15">

                        <div class="icon"></div>

                    </div>
                </button>
            </div>



        </nav>

    </div>

</div>

</header>