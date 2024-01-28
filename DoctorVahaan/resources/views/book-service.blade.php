
@extends('layouts.deafult')
@section('title', __('Vendor'))


@section('style')
@endsection


@section('content')
    <content>
        <section class="profile-section py-5 mt-75">
            <div class="container">
                <div class="row">
                    <div class="col-3 profile-left">
                        <div class="my-account-list">
                            <ul>
                                <li>
                                    <a href="/Profile" >Profile</a>
                                </li>
                                <li class="active">
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
                        <div class="card-shadow">
                            <div class="card-body order-details-wrap">
                                <div class="order-list">
                                    <div class="order-item">
                                        <a class="order-inner"
                                            href="https://www.doctorvahaan.com/booking/details/DV0000000066">
                                            <div class="order-option">
                                                <div class="item-content">
                                                    <div class="item-id">DV0000000066</div>
                                                    <div class="payment-item">
                                                        <div class="payment-title">Payment Information</div>
                                                        <div class="payment-inner">
                                                            <div class="payment-status success">COD</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="order-price">
                                                    <div class="item-status">
                                                        <span class="confirmed">
                                                            Active
                                                        </span>
                                                    </div>
                                                    <div class="item-price">₹800.00</div>
                                                </div>
                                            </div>
                                            <div class="address-inner">
                                                <div class="order-content">
                                                    <div class="date-inner">
                                                        <div class="date-name">Service Booking Date</div>
                                                        <div class="item-date">19/01/2024</div>
                                                    </div>
                                                </div>
                                                <div class="address-option">
                                                    <div class="item-name">Service Booking Time

                                                    </div>
                                                    <div class="item-address">
                                                        08:00 AM - 09:00 AM
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>



                                </div>
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

