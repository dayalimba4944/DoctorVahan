
@extends('layouts.deafult')
@section('title', __('Vendor'))


@section('style')
@endsection


@section('content')
<content>
    <header id="myHeader" class="animate__animated animate__fadeInDown">

        <div class="menumain">

            <div class="container-xl container-lg-fluid">

                <nav class="navbar navbar-expand-lg gap-2 px-1">

                    <a class="brand-logo" href="/Home">

                        <img src="assets/image/logo.webp" alt="logo">

                    </a>

                    <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo01">

                        <ul class="navbar-nav ml-auto align-items-center">

                            <li><a class="" href="/Home">HOME</a></li>

                            <li><a class="" href="/AboutUs">ABOUT US</a></li>

                            <li><a class="" href="/Services">SERVICES</a></li>

                            <li><a class="" href="/ServiceArea">SERVICES AREA</a>
                            </li>

                            <li><a class="" href="/corporateenquiry">FRANCHISE
                                    ENQUIRY</a></li>
                            <li><a class="" href="/Contact">CONTACT US</a></li>
                            <li><a class="" href="/Profile">PROFILE</a></li>

                        </ul>

                    </div>
                    <div class="d-flex flex-row gap-2">
                        <a href="/Login" class="newLoginBtn d-none d-md-block">

                            Login

                        </a>
                        <a href="/getQuate" class="get-quote d-none d-md-block">

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
    <div class="mt-75">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10 col-sm-12 login_form p-md-5 p-2">
                    <form action="{{('sign-up')}}" method="POST" class="w-100">
                    @csrf
                        <!-- @if (isset($errorResponse) && count($errorResponse) > 0)
                            <div style="color: red; margin-bottom: 10px;">
                                <strong>Please fix the following errors:</strong>
                                <ul>
                                    @foreach ($errorResponse as $field => $messages)
                                        @foreach ($messages as $message)
                                            <li>{{ ucfirst($field) }}: {{ $message }}</li>
                                        @endforeach
                                    @endforeach
                                </ul>
                            </div>
                        @endif -->
                        <!-- @if (isset($errorResponse) && count($errorResponse) > 0)
                            <div style="color: red; margin-bottom: 10px;">
                                <strong>Please fix the following errors:</strong>
                                <ul>
                                    @foreach ($errorResponse as $field => $messages)
                                        @foreach ($messages as $message)
                                            <li>{{ ucfirst($field) }}: {{ $message }}</li>
                                        @endforeach
                                    @endforeach
                                </ul>
                            </div>
                        @endif -->
                        <!-- <input type="hidden" name="_token" value="ogpmyYjsQTQY6ELpOcdGwSkwuIAhNqrt2ksOKx8u"
                            autocomplete="off"> -->
                        <div class="">
                            <div class="log-in-bg login-left p-1">
                                <div class="login-text d-flex flex-column justify-content-center">
                                    <h1 class="title text-center">Sign Up</h1>
                                </div>
                            </div>
                            <div class="login-right">
                                <div class="login-form col-lg-10 col-12 mx-auto">
                                    <!-- <h5 class="login_title text-center">Login</h5> -->
                                    <div class="form-group mb-3">
                                        <input type="" name="name" value="{{ isset($old_values['name']) ? $old_values['name'] : '' }}" id="name" placeholder="Name" class="form-control f-s-13" 
                                            autofocus="" autocomplete="username" aria-required="true">
                                            <span>
                                                @if (isset($errorResponse['name']) && count($errorResponse['name']) > 0)
                                                    <div style="color: red; margin-bottom: 10px;">
                                                        <ul>
                                                            @foreach ($errorResponse['name'] as $message)
                                                                <li>{{ ucfirst('name') }}: {{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            </span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="" name="email" value="{{ isset($old_values['email']) ? $old_values['email'] : '' }}" id="email" placeholder="Email"
                                            class="form-control f-s-13"  autofocus="" autocomplete="username"
                                            aria-required="true">
                                            <span>
                                                @if (isset($errorResponse['email']) && count($errorResponse['email']) > 0)
                                                    <div style="color: red; margin-bottom: 10px;">
                                                        <ul>
                                                            @foreach ($errorResponse['email'] as $message)
                                                                <li>{{ ucfirst('email') }}: {{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            </span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="" name="phone_number" value="{{ isset($old_values['phone_number']) ? $old_values['phone_number'] : '' }}" id="phone_number" placeholder="Phone Number" class="form-control f-s-13" 
                                            autofocus="" autocomplete="user number" aria-required="true">
                                            <span>
                                            @if (isset($errorResponse['phone_number']) && count($errorResponse['phone_number']) > 0)
                                                <div style="color: red; margin-bottom: 10px;">
                                                    <ul>
                                                        @foreach ($errorResponse['phone_number'] as $message)
                                                            <li>{{ ucfirst('phone_number') }}: {{ $message }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                          </span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="" name="password" value="{{ isset($old_values['password']) ? $old_values['password'] : '' }}" id="pwd" placeholder="Password"
                                            class="form-control f-s-13"  autocomplete="current-password"
                                            aria-required="true">
                                       
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="" name="password_confirmation" value="{{ isset($old_values['password_confirmation']) ? $old_values['password_confirmation'] : '' }}" id="pwd" placeholder="Confirm password" class="form-control f-s-13" 
                                            autocomplete="confirm-password" aria-required="true">
                                            <span>
                                                @if (isset($errorResponse['password']) && count($errorResponse['password']) > 0)
                                                    <div style="color: red; margin-bottom: 10px;">
                                                        <ul>
                                                            @foreach ($errorResponse['password'] as $message)
                                                                <li>{{ ucfirst('password') }}: {{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            </span>
                                    
                                    </div>
                                    <div class="text-center">
                                        <button class="btn button-solid text-uppercase col-12">Sign Up</button>

                                    </div>

                                    <div class="social_login justify-content-center mx-auto mt-3">
                                        <p class="text-center">Sign Up with social media</p>
                                        <div class="d-flex gap-2 justify-content-center">
                                            <a href="#!">
                                                <img src="https://www.doctorvahaan.com/frontend/images/fb-social.svg"
                                                    alt="">
                                            </a>
                                            <a href="#!">
                                                <img src="https://www.doctorvahaan.com/frontend/images/google-social.svg"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</content>

@endsection


@section('script')

<script src="assets/js/bootstrap.min.js"></script>
    <script>
        window.addEventListener('scroll', function () {
            var header = document.getElementById('myHeader');
            var menumain = document.querySelector('.menumain');
            var navActiveLinks = document.querySelectorAll('.navbar .navbar-collapse ul li a.nav-active');

            if (window.scrollY > 50) {
                header.classList.add('sticky', 'animate__fadeInDown');
                menumain.classList.add('sticky');

                navActiveLinks.forEach(function (link) {
                    link.classList.add('sticky');
                });
            } else {
                header.classList.remove('sticky', 'animate__fadeInDown');
                menumain.classList.remove('sticky');

                navActiveLinks.forEach(function (link) {
                    link.classList.remove('sticky');
                });
            }
        });
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/wow.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"
        integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw=="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
    <script type="text/javascript"
        src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js"></script>

    <script type="text/javascript">
        function locateLocation(key, link) {
            $('.loader-off.loaderWrap').css('opacity', '1');
            $('.loader-off.loaderWrap').css('visibility', 'visible');
            $('iframe').attr('src', link);
            $('.loader-off.loaderWrap').css('opacity', '0');
            $('.loader-off.loaderWrap').css('visibility', 'hidden');
            $('.all_li_service').removeClass('active_service_area_li');
            $('.servicearea_li_' + key).addClass('active_service_area_li');
        }
    </script>
@endsection
