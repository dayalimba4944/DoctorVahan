
@extends('layouts.deafult')
@section('title', __('Vendor'))


@section('style')
@endsection


@section('content')
<content>
    <section class="sec-space mt-75 servicerarea-main pb-2 wow fadeInUp"  
        >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="form-main">
                        <div class="section-title text-center mb-md-4">
                            <h2>QUOTE</h2>
                        </div>
                        <form action="{{('get-quote')}}" method="POST" autocomplete="off"
                            id="enquiryForm" novalidate="novalidate">
                            @csrf
                            <!-- <input type="hidden" name="_token" value="hFlGp5MdpeSPjVIsOLRZ6bBBhKDLGH55rZKUrIOH" -->
                                <!-- autocomplete="off"> <input type="hidden" name="enquiry_type" value="corporate_enquiry"> -->
                            <div class="form-row d-flex flex-row align-items-center gap-2 flex-wrap">
                                <div class="form-group w-49">
                                    <label for="">
                                        <span>Name *</span>
                                        <span>
                                            @if (isset($errorResponse['name']) && count($errorResponse['name']) > 0)
                                                <span style="color: red; margin-bottom: 10px;">
                                                        @foreach ($errorResponse['name'] as $message)
                                                                {{ ucfirst('name') }}: {{ $message }}
                                                        @endforeach
                                                </span>
                                            @endif
                                        </span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="Enter Name" name="name"
                                        value="{{ isset($old_values['name']) ? $old_values['name'] : '' }}">
                                        
                                </div>
                                <div class="form-group w-49">
                                    <label for="">
                                        <span>Email Address *</span>
                                        <span>
                                                @if (isset($errorResponse['email']) && count($errorResponse['email']) > 0)
                                                    <span style="color: red; margin-bottom: 10px;">
                                                            @foreach ($errorResponse['email'] as $message)
                                                                {{ ucfirst('email') }}: {{ $message }}
                                                            @endforeach
                                                    </span>
                                                @endif
                                            </span>
                                        </label>
                                    <input type="text" class="form-control" placeholder="Enter Email Address"
                                        name="email" value="{{ isset($old_values['email']) ? $old_values['email'] : '' }}">
                                        
                                </div>
                                <div class="form-group w-49">
                                    <label for="">
                                        <span>Phone Number *</span>
                                        <span>
                                            @if (isset($errorResponse['phone_number']) && count($errorResponse['phone_number']) > 0)
                                                <span style="color: red; margin-bottom: 10px;">
                                                        @foreach ($errorResponse['phone_number'] as $message)
                                                            {{ ucfirst('phone_number') }}: {{ $message }}
                                                        @endforeach
                                                </span>
                                            @endif
                                        </span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="Enter Phone Number"
                                    name="phone_number" value="{{ isset($old_values['phone_number']) ? $old_values['phone_number'] : '' }}">
                                    
                                </div>
                                <div class="form-group w-49 checkout-form">
                                    <label for="">
                                        <span>Subject *</span>
                                        <span>
                                            @if (isset($errorResponse['subject']) && count($errorResponse['subject']) > 0)
                                                <span style="color: red; margin-bottom: 10px;">
                                                        @foreach ($errorResponse['subject'] as $message)
                                                            {{ ucfirst('subject') }}: {{ $message }}
                                                        @endforeach
                                                </span>
                                            @endif
                                        </span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="Enter Subject" name="subject"
                                        value="{{ isset($old_values['subject']) ? $old_values['subject'] : '' }}">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="Message">Message</label>
                                    <textarea name="message" class="form-control"
                                        placeholder="Enter Message"></textarea>
                                </div>
                                <div class="form-group col-md-12 mt-lg-3 mb-0">
                                    <button class="btn button-solid w-100">SEND QUOTE</button>
                                </div>
                            </div>
                        </form>
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

    <script src="assets/js/cutom.js"></script>
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
    <title>Quote</title>
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
       
    </style>
</head> -->



</html>