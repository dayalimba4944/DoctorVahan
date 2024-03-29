
@extends('layouts.deafult')
@section('title', __('Vendor'))


@section('head')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="shortcut icon" href="assets/image/logo (1).png" type="image/x-icon">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/full.css">
        <link rel="stylesheet" href="assets/css/resp.css">
        <script src="https://kit.fontawesome.com/bc862f33b5.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <style>
        

            body {
                background-color: #fff;
            }
        </style>
    </head>
@endsection
@section('style')
@endsection


@section('content')
    
<content>
    <div class="mt-75">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10 col-sm-12 login_form p-md-5 p-2">
                    <form action="" method="POST" class="w-100">
                        <!-- <input type="hidden" name="_token" value="ogpmyYjsQTQY6ELpOcdGwSkwuIAhNqrt2ksOKx8u"
                            autocomplete="off"> -->
                        <div class="">
                            <div class="log-in-bg login-left p-2">
                                <div class="login-text mb-2 d-flex flex-column justify-content-center">
                                    <h1 class="title text-center mb-0">Forgot Password</h1>
                                </div>
                            </div>
                            <div class="login-right">
                                <div class="login-form col-lg-8 col-12 mx-auto">

                                    <div class="form-group mb-3">
                                        <input type="email" name="email" value="" id="email" placeholder="Email"
                                            class="form-control f-s-13" required="" autofocus="" autocomplete="username"
                                            aria-required="true">
                                    </div>
                                    <div class="text-center">
                                        <button class="btn button-solid text-uppercase col-5">Submit</button>

                                    </div>

                                    <p class="mt-2 mb-4 login-text text-center">
                                        Don't have an Account? <a href=""
                                            class="text-theme-primary bg-transparent border-0"><u>Sign Up</u></a>
                                    </p>
                                    <div class="social_login justify-content-center mx-auto">
                                        <p class="text-center">Login with social media</p>
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
