
@extends('layouts.deafult')
@section('title', __('Vendor'))

@section('head')
    <!-- <head>
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
        
    </head> -->
@endsection
@section('style')
    <style>
        
        body {
            background-color: #fff;
        }
    </style>
@endsection


@section('content')
    <content>
        <section class="profile-section pt-5 mt-75">
            <div class="container">
                <div class="row">
                    <div class="col-3 profile-left">
                        <div class="my-account-list">
                            <ul>
                                <li >
                                    <a href="/Profile" >Profile</a>
                                </li>
                                <li>
                                    <a href="/book-service" class="">Book Service</a>
                                </li>
                                <li class="active">
                                    <a href="/change-password" class="">Change Password</a>
                                </li>
                                <li>
                                    <a class="" href="javascript:;">LOGOUT</a>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-9 profile-right">
                        <div class="card-shadow">
                            <div class="card-body">
                                <form action="https://www.doctorvahaan.com/change/password" method="post" class="w-100"
                                    id="resetForm" novalidate="novalidate">
                                    <input type="hidden" name="_token" value="x8fPCgkAX3P1L7JzqCWmtcsBKHxgSEWKCu6YEbrG"
                                        autocomplete="off">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="theme-form-group">
                                                <label class="form-control-label">Current Password</label>
                                                <input type="password" name="old_password" value="" id="email"
                                                    placeholder="Current Password" class="form-control" required=""
                                                    autofocus="" autocomplete="username" aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="theme-form-group">
                                                <label class="form-control-label">New Password</label>
                                                <input type="password" name="password" id="pwd" placeholder="New Password"
                                                    class="form-control" required="" autocomplete="current-password"
                                                    aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="theme-form-group">
                                                <label class="form-control-label">Confirm New Password</label>
                                                <input type="password" name="password_confirmation" id="pwd_confirm"
                                                    placeholder="Confirm New Password" class="form-control" required=""
                                                    autocomplete="current-password" aria-required="true">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn button-solid mt-3 text-uppercase"
                                                type="submit">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>


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

