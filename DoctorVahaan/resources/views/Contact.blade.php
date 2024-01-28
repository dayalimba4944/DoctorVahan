
@extends('layouts.deafult')
@section('title', __('Vendor'))


@section('style')
@endsection


@section('content')
<content>
    <!-- <section class="bred-come">
        <div class="container">
            <ul>
                <li><a href="assets/image">HOME</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section> -->

    <section class="sec-space contact-usmain pb-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title mb-4 pb-md-3 wow fadeInUp"  
                        >
                        <h2>Contact Us</h2>
                        <p></p>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invido
                            sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor</p>
                        <p></p>
                    </div>
                    <div class="contactus-dtls wow fadeInUp"  
                        >
                        <img src="assets/image/loaction.webp" alt="">
                        <h4>Address</h4>
                        <p>Parvati Vihar, 52/6, VIP Rd, Raghunathpur, Kolkata,
                            West Bengal 700059</p>
                    </div>
                    <div class="contactus-dtls wow fadeInUp"  
                        >
                        <img src="assets/image/mail-i.png" alt="">
                        <h4>Email</h4>
                        <p><a href="mailto:doctorvahaan003@gmail.com">webarion@gmail.com</a></p>
                    </div>
                    <div class="contactus-dtls wow fadeInUp"  
                        >
                        <img src="assets/image/call.png" alt="">
                        <h4>Phone</h4>
                        <p><a href="tel:8777659552">+91-7*******01</a>/<a href="tel:9875418488">7004908001</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contactform wow fadeInUp"  
                        >
                        <div class="section-title text-center mb-4">
                            <h3>REQUEST A QUOTE</h3>
                            <p>Have any Questions? We' love to hear from you.</p>
                        </div>
                        <form action="assets/image/enquiry-store" method="post" autocomplete="off"
                            id="contactForm" novalidate="novalidate">
                            <input type="hidden" name="_token" value="bgnjBa6UUB0gI5hf3ZhhzqLD1722SKgrCZ5K0Vqy"
                                autocomplete="off"> <input type="hidden" name="enquiry_type" value="contact">
                            <div class="form-row d-flex flex-wrap flex-row gap-2">
                                <div class="form-group w-49">
                                    <label for="">First Name *</label>
                                    <input type="text" class="form-control" placeholder="Enter First Name"
                                        name="first_name" value="">
                                </div>
                                <div class="form-group w-49">
                                    <label for="">Last Name *</label>
                                    <input type="text" class="form-control" placeholder="Enter Last Name"
                                        name="last_name" value="">
                                </div>
                                <div class="form-group w-49">
                                    <label for="">Email Address *</label>
                                    <input type="text" class="form-control" placeholder="Enter Email Address"
                                        name="email" value="">
                                </div>
                                <div class="form-group w-49">
                                    <label for="">Phone Number *</label>
                                    <input type="text" class="form-control" placeholder="Enter Phone Number"
                                        name="phone" value="">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="Message">Message</label>
                                    <textarea name="message" class="form-control"
                                        placeholder="Enter Message"></textarea>
                                </div>
                                <div class="form-group w-49 captcha">
                                    <!-- <span> <img src="assets/image/C6P4pCKW"></span> -->
                                    <button type="button" class="btn btn-success btn-refresh btn-sm"
                                        onclick="refreshCaptcha();"><i class="fa fa-refresh"></i></button>
                                </div>
                                <div class="form-group w-49">
                                    <input type="text" class="form-control" id="captcha" name="captcha"
                                        placeholder="Enter captcha">
                                </div>
                                <div class="col-md-12 form-group text-center mt-2 mb-0">
                                    <button class="btn button-solid">SUBMIT NOW</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="newslatter sec-space pt-0">
        <div class="container">
            <div class="greenbg wow fadeInUp"  
                >
                <div class="row align-items-center justify-content-between">
                    <div class="section-title col-lg-7 col-md-8 mb-md-0 mb-3">
                        <h2>ARE YOU LOOKING FOR DECARBONIZING?</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, se</p>
                    </div>
                    <div class="div col-md-3 ml-auto">
                        <a href="/getQuate" class="get-quote">
                        
                            GET QUOTE
                        
                        </a>
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


@endsection
