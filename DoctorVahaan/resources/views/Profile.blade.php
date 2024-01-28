
@extends('layouts.deafult')
@section('title', __('Vendor'))


@section('style')
@endsection


@section('content')
<content>

<section class="profile-section mt-75 ">
    <div class="container">
        <div class="row">
            <div class="col-3 profile-left">
                <div class="my-account-list">
                    <ul>
                        <li class="active">
                            <a href="/Profile">Profile</a>
                        </li>
                        <li>
                            <a href="/book-service" class="">Book Service</a>
                        </li>
                        <li>
                            <a href="/change-password" class="">Change Password</a>
                        </li>
                        <li>
                            <a class="" href="javascript:;">LOGOUT</a>

                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-9 profile-right">
                <div class="card shadow">
                    <div class="card-body">
                        <form action="https://www.doctorvahaan.com/profile/update" method="post"
                            enctype="multipart/form-data" class="w-100" id="resetForm" novalidate="novalidate">
                            <input type="hidden" name="_token" value="x8fPCgkAX3P1L7JzqCWmtcsBKHxgSEWKCu6YEbrG"
                                autocomplete="off">
                            <div class="studentAvatar mb-4">
                                <div class="profile-pic">
                                    <label class="-label" for="file">
                                        <i class="fa fa-camera"></i>
                                        <span>Change Image</span>
                                    </label>
                                    <input id="file" name="file" type="file" onchange="loadFile(event)">
                                    <img src="https://www.doctorvahaan.com/frontend/images/user-img.svg" id="output"
                                        class="img-fit">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="theme-form-group">
                                        <label class="form-control-label">Name</label>
                                        <input type="text" name="name" value="mukeshksardiwal1997@gmail.com"
                                            id="name" placeholder="Name" class="form-control valid" required=""
                                            autofocus="" autocomplete="username" aria-required="true"
                                            aria-invalid="false">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="theme-form-group">
                                        <label class="form-control-label">Email</label>
                                        <input type="email" name="email" value="mukeshksardiwal1997@gmail.com"
                                            id="email" placeholder="Email" class="form-control" required=""
                                            autofocus="" autocomplete="username" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="theme-form-group">
                                        <label class="form-control-label">Phone</label>
                                        <input type="text" name="phone" value="7374908001" id="phone"
                                            placeholder="Phone" class="form-control" required="" autofocus=""
                                            autocomplete="username" aria-required="true">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="theme-form-group">
                                        <label class="form-control-label">Address</label>
                                        <input type="text" name="address" value="" id="phone" placeholder="Address"
                                            class="form-control" autofocus="" autocomplete="username">
                                    </div>
                                </div>

                                <div class="col-5 mx-auto">
                                    <button class="btn button-solid col-12 mt-3 text-uppercase"
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
</content>
@endsection


@section('script')

@endsection

<!DOCTYPE html>
<html lang="en">

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
    <style>
       

        body {
            background-color: #fff;
        }
    </style>
</head> -->



</html>