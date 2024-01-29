
@extends('layouts.deafult')
@section('title', __('Home'))


@section('style')
@endsection


@section('content')
@if(session()->has('user_id'))
    <{{ session('user_id') }}
@endif
<content>
    <div class="header_banner_wrapper">
        <div class="col-12">
            <div class="bannerVideo">
                <div id="slider-container">
                    <video id="slider" autoplay loop muted>
                        <source src="assets/image/exael.mp4" type="video/mp4">
                    </video>
                </div>

                <div class="customcontainer mx-auto">
                    <div class="banner_text  col-md-8 col-lg-6 col-11">
                        <h3>Protect Your
                            Investment
                            <p>
                                
                            </p></h3>
                        <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                            nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        <button class="mt-lg-4 mt-2">Get a Quote</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="What_We_do py-md-5 py-2">
        <div class="container-xl">
            <h3 class="my-0 ">What We Do</h3>
            <h4 class="my-0">We offer full service auto repair & maintenance</h4>
            <div class="my-4 flex-row d-flex justify-content-center align-items-center gap-1">
                <div class="underlineBox"></div>
                <div class="underlineBox2"></div>
                <div class="underlineBox3"></div>
            </div>
            <div class="grid-wrap">
                <div class="items-1">
                    <h3 class="text-white">Preventative <br>
                        Maintenance</h3>
                    <p class="text-white">The best way to minimize breakdowns is
                        doing routine maintenance</p>
                    <h1 class="card_bottom_text">Maintenance</h1>
                </div>
                <div class="items-2">
                    <img src="assets/image/service-2-bg-1.jpg.png" alt="">
                </div>
                <div class="items-3">
                    <h3 class="text-black">Most Common
                        <br>
                        Repairs
                    </h3>
                    <p class="text-black">We have over 30 common car repairs
                        and the list is growing</p>
                    <h1 class="card_bottom_text2">Common</h1>
                </div>
                <div class="items-4">
                    <img src="assets/image/service-6-bg-1.jpg.png" alt="">
                </div>
                <div class="items-5">
                    <h3 class="text-black">Brake
                        <br>
                        Repair & Service
                    </h3>
                    <p class="text-black">Brake maintenance is important in helping
                        ensure the safety of you and your
                        passengers</p>
                    <h1 class="card_bottom_text3">Brake</h1>
                </div>
                <div class="items-6">
                    <img src="assets/image/service-6-bg-1.jpg-1.png" alt="">
                </div>
            </div>
        </div>
    </section>


    <section class="sec-space advantage text-dark">
        <div class="container">
            <div class="section-title text-center mb-md-4 mb-3 mb-lg-5 wow fadeInUp" data-wow-delay="0.2s"
                
                >
                <h4><span>ADVANTAGE</span></h4>
                <h2 class="mb-2">OUR ADVANTAGES</h2>
                <p>We believe in providing you the world-class service that leaves a positive impact on the
                    environment</p>
            </div>
            <div class="care-advantages">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <ul>
                            <li>
                                <div class="listbox wow  shake" data-wow-delay="0.2s" 
                                    style="   animation-name: pulse;">
                                    <span>01</span>
                                    <h4>INCREASE MILEAGE11</h4>
                                </div>

                            </li>
                            <li>
                                <div class="listbox wow shake" data-wow-delay="0.2s" 
                                    style="   animation-name: pulse;">
                                    <span>02</span>
                                    <h4>INCREASE ACCELERATION</h4>
                                </div>
                            </li>
                            <li>
                                <div class="listbox wow shake" data-wow-delay="0.2s" 
                                    style="   animation-name: pulse;">
                                    <span>03</span>
                                    <h4>BETTER SMOOTHNESS</h4>
                                </div>
                            </li>
                            <li>
                                <div class="listbox wow shake" data-wow-delay="0.2s" 
                                    style="   animation-name: pulse;">
                                    <span>04</span>
                                    <h4>CLEAN COMBUTION CHAMBER</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-4">
                        <div class="text-left ">
                            <div class="listbox mx-auto wow">
                                <span>05</span>
                                <h4>REDUCE POLLUTION UPTO 80%</h4>
                            </div>
                        </div>
                        <div class="advimage wow fadeInUp" data-wow-delay="0.2s" 
                            >
                            <img src="assets/image/deSz310906.webp" class="imageSaturate" alt="OUR ADVANTAGES">
                        </div>
                        <div class="text-center wow fadeInUp mb-3 mb-sm-0" data-wow-delay="0.2s" 
                            >
                            <a class="btn  btn-dark" type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">BOOK
                                NOW</a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3">
                        <ul>
                            <li>
                                <div class="listbox wow shake" data-wow-delay="0.2s" 
                                    style="   animation-name: pulse;">
                                    <span>06</span>
                                    <h4>REDUCE ENGINE NOISE/VIBRATION</h4>
                                </div>
                            </li>
                            <li>
                                <div class="listbox wow shake" data-wow-delay="0.2s" 
                                    style="   animation-name: pulse;">
                                    <span>07</span>
                                    <h4>CLEAN EGR/ VALVE/PISTON</h4>
                                </div>
                            </li>
                            <li>
                                <div class="listbox wow shake" data-wow-delay="0.2s" 
                                    style="   animation-name: pulse;">
                                    <span>08</span>
                                    <h4>REDUCE BLACK SMOKE</h4>
                                </div>
                            </li>
                            <li>
                                <div class="listbox wow shake" data-wow-delay="0.2s" 
                                    style="   animation-name: pulse;">
                                    <span>09</span>
                                    <h4>LOWER EMMISSION</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service_Sect py-xl-5 py-2 my-xl-5 my-2">
        <div class="container my-3">
            <div class="grid-servie2">
                <div class="image_Servie position-relative">
                    <div class="upper_image">
                        <img src="assets/image/img-parallax01-img01-1.jpg.png" alt="">
                    </div>
                    <div
                        class="d-md-flex d-none flex-column justify-content-center align-items-center under_bottom_box">
                        <div class="green_box"></div>
                        <div class="black_box"></div>
                    </div>
                </div>
                <div class="service_right">
                    <h3>Quality Service and
                        Customer</h3>
                    <h2>Satisfaction!</h2>
                    <div
                        class="my-2 flex-row d-flex justify-content-lg-start justify-content-center align-items-center gap-1">
                        <div class="underlineBox"></div>
                        <div class="underlineBox2"></div>
                        <div class="underlineBox3"></div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur beatae tempore vel sed, culpa
                        reiciendis eaque
                        repudiandae nemo ipsum. Ipsa adipisci necessitatibus vero cumque at assumenda similique, tempora
                        reprehenderit quibusdam
                        blanditiis sit! Perspiciatis quisquam, facilis dolorum facere minima distinctio placeat
                        repudiandae! Beatae minima
                        impedit, at dignissimos ad voluptatum consectetur.</p>
                    <div
                        class="list_custom d-flex flex-column justify-content-center align-items-lg-start align-items-center gap-lg-3 gap-1">
                        <div class="d-flex flex-row gap-2">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <span>24 Month / 24,000km Nationwide Warranty</span>
                        </div>
                        <div class="d-flex flex-row gap-2">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <span>Courtesy Local Shuttle Service</span>
                        </div>
                        <div class="d-flex flex-row gap-2">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <span>Customer Rewards Program</span>
                        </div>
                        <div class="d-flex flex-row gap-2">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <span>ASE Certified Technicians</span>
                        </div>
                        <div class="d-flex flex-row gap-2">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <span>24-Hour Roadside Assistance</span>
                        </div>
                        <div class="d-flex flex-row gap-2">
                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <span>Courtesy Loaner Vehicle</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about_mech">
        <div class="bg-mechanical">
            <div class="mx-auto person_image mb-2">
                <img src="assets/image/person.jpg" alt="">
            </div>
            <div class="col-8 d-flex justify-content-end mb-2">
                <div class="green_circle">
                    <span>“</span>
                </div>
            </div>
            <div class="col-lg-7 col-12 mx-auto">
                <h1 class="text-center text-white mechanical_text">I took my car there to get fixed after I was hit and
                    my rear upper controler arm was
                    bent. They gave me the best estimate, and had the work done super quick! The
                    customer service was amazing, and they were very polite and knowledgable!</h1>
                <p class="my-2 text-center"><span class="mech_name">Silvia R. Brown </span><span
                        class="mech_post">Manager</span></p>
            </div>
        </div>
    </section>
    <section class="statics_wrap ">
        <div class="container">
            <div class="grid-servie py-lg-5 py-2 my-lg-5 my-2">
                <div class="statics_left">
                    <h3>The Car Repair Statistics</h3>
                    <p>Auto repair technical statistics you must to know. Whether you're coming in for a
                        routine inspection, oil change or a repair service, we promise that you will be
                        completely satisfied with our work.</p>
                    <div class="inernal_grid mt-xl-4 mt-lg-2 mt-2">
                        <div class="d-flex flex-row gap-4 justify-content-center align-items-center">
                            <span class="number_big">20</span>
                            <span class="vertical_line"></span>
                            <span class="internal_left">Years of <br>
                                experience</span>
                        </div>
                        <div class="d-flex flex-row gap-4 justify-content-center align-items-center">
                            <span class="number_big">2.9K</span>
                            <span class="vertical_line"></span>
                            <span class="internal_left">Vehicle <br>
                                Repaired</span>
                        </div>
                        <div class="d-flex flex-row gap-4 justify-content-center align-items-center">
                            <span class="number_big">32</span>
                            <span class="vertical_line"></span>
                            <span class="internal_left">Technicians & <br>
                                Workers</span>
                        </div>
                        <div class="d-flex flex-row gap-4 justify-content-center align-items-center">
                            <span class="number_big">100%</span>
                            <span class="vertical_line"></span>
                            <span class="internal_left">Satisfied <br>
                                Customers</span>
                        </div>
                    </div>
                </div>
                <div class="statics_right">
                    <img src="assets/image/Sectionpng.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="Decarbon_Wrap">
        <div class="container">
            <div class="grid-decarb">
                <div class="decar_left">
                    <h3>Are You Looking for Decarbonizing?</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore
                        magna aliquyam erat, se</p>
                    <button class="get_quote_btn mt-4 mx-auto">
                        Get Quote
                    </button>
                </div>
                <div class="decar_right ">
                    <img src="assets/image/wepik-export-202401231239213wcZ 1.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="map_section position-relative">
        <div class="col-12 wow fadeInRight">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.986418870181!2d88.42969967606334!3d22.616982331340793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89e28c3e0a499%3A0x87f30fa2646b7a0!2s52%2F6%2C%20VIP%20Rd%2C%20Sahabagan%2C%20Raghunathpur%2C%20Jyangra%2C%20Baguiati%2C%20Kolkata%2C%20West%20Bengal%20700059!5e0!3m2!1sen!2sin!4v1698650270796!5m2!1sen!2sin"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact_info_card">
            <h3>Contact Info</h3>
            <div class="map_contact_info">
                <ul class="d-flex flex-column justify-content-start p-0 gap-2">
                    <li>
                        <img src="assets/image/call-i.png" alt="" width="20" height="20">
                        <a href="tel:8777659552">+91-8777659552</a> /
                        <a href="tel:9875418488">9875418488</a>
                    </li>
                    <li>
                        <img src="assets/image/location-i.png" alt="" width="20" height="20">
                        <a href="#">
                            Parvati
                            Vihar,
                            52/6, VIP Rd, Raghunathpur, Kolkata,
                            West Bengal 700059
                        </a>

                    </li>
                    <li>
                        <img src="assets/image/mail-i.png" alt="" width="20" height="20"> <a
                            href="mailto:doctorvahaan003@gmail.com">doctorvahaan003@gmail.com</a>
                    </li>
                </ul>
            </div>
            <div class="horzontal_line"></div>
            <div class="sochal-icon2">
                <ul>
                    <li class=""><a href="https://www.instagram.com/" target="_blank" style="text-decoration: none;"><i
                                class="fa fa-instagram"></i></a></li>
                    <li class=""><a href="https://www.facebook.com/" target="_blank" style="text-decoration: none;"><i
                                class="fa fa-facebook"></i></a></li>
                    <li class=""><a href="https://in.linkedin.com/" target="_blank" style="text-decoration: none;"><i
                                class="fa fa-linkedin"></i></a>
                    </li>
                    <li class=""><a href="https://twitter.com/" target="_blank" style="text-decoration: none;"><i
                                class="fa fa-twitter"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content modal-style">
                    <form id="msform" method="post" autocomplete="off"
                        action="https://www.doctorvahaan.com/booking-store">
                        <input type="hidden" name="_token" value="x8fPCgkAX3P1L7JzqCWmtcsBKHxgSEWKCu6YEbrG"
                            autocomplete="off">
                        <fieldset style="position: relative; opacity: 1;">
                            <div class="modal-header">
                                <h2 class="modal-title text-white" id="exampleModalLabel"> PLEASE PROVIDE YOUR CAR
                                    DETAILS TO GET
                                    AN ENGINE
                                    REPORT
                                </h2>
                            </div>
                            <div class="modal-body">
                                <div class="successMessageArea alert alert-success" style="display: none;">

                                </div>
                                <h4>Which vehicle type do you drive?</h4>
                                <div class="row vehicle-type mt-md-3 row-gap mb-4">
                                    <div class="col">
                                        <label class="radio-box">

                                            <input type="radio" name="vehicle_type" value="1" data-name="Commercial"
                                                checked="" onchange="getVehicleCarType('1')">
                                            <strong>Commercial</strong>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label class="radio-box">

                                            <input type="radio" name="vehicle_type" value="2" data-name="Private"
                                                onchange="getVehicleCarType('2')">
                                            <strong>Private</strong>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <label class="quoteformerror quoteformerror_vehicle_type col-md-12"
                                        style="display: none;"></label>
                                </div>

                                <h4>Types of cars</h4>
                                <div class="row row-gap mt-md-3" id="typesOfcarAreaPopup">
                                    <div class="col-md-3 col-lg-3 col-6">
                                        <label class="radio-box">
                                            <input type="radio" name="car_type" value="2" data-name="Bus">
                                            <strong>
                                                <img src="https://www.doctorvahaan.com/storage/car_type/vDuAr06705.png"
                                                    alt="">
                                                <h3>Bus</h3>
                                            </strong>

                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-6">

                                        <label class="radio-box">
                                            <input type="radio" name="car_type" value="4" data-name="Mini">
                                            <strong>
                                                <img src="https://www.doctorvahaan.com/storage/car_type/r84P406605.png"
                                                    alt="">
                                                <h3>Mini</h3>
                                            </strong>

                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-6">

                                        <label class="radio-box">
                                            <input type="radio" name="car_type" value="1" data-name="Taxi">
                                            <strong>
                                                <img src="https://www.doctorvahaan.com/storage/car_type/LNwoU06405.png"
                                                    alt="">
                                                <h3>Taxi</h3>
                                            </strong>

                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-6">
                                        <label class="radio-box">
                                            <input type="radio" name="car_type" value="3" data-name="Truck">
                                            <strong>
                                                <img src="https://www.doctorvahaan.com/storage/car_type/XQP0006705.png"
                                                    alt="">
                                                <h3>Truck</h3>
                                            </strong>

                                            <span class="checkmark"></span>
                                        </label>
                                    </div><label class="quoteformerror quoteformerror_car_type col-md-12"
                                        style="display: none;"></label>
                                </div>

                            </div>
                            <input type="button" name="next" id="firststepquoteform" class="action-button" value="Next">
                        </fieldset>
                        <fieldset style="position: relative; opacity: 0; display: none;">
                            <div class="modal-body">

                                <h4>Select Brand/Manufucturer</h4>
                                <div class="row row-gap mt-3 mb-4">
                                    <div class="col-3 col-lg-3">
                                        <label class="radio-box carlogo-box">
                                            <input type="radio" name="brand" value="1" data-name="Tata">
                                            <strong class="carlogo"> <img
                                                    src="https://www.doctorvahaan.com/storage/brand/6LC9b03201.png"
                                                    alt=""></strong>

                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-3 col-lg-3">
                                        <label class="radio-box carlogo-box">
                                            <input type="radio" name="brand" value="2" data-name="Hyundai">
                                            <strong class="carlogo"> <img
                                                    src="https://www.doctorvahaan.com/storage/brand/RjHJx03701.png"
                                                    alt=""></strong>

                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-3 col-lg-3">
                                        <label class="radio-box carlogo-box">
                                            <input type="radio" name="brand" value="3" data-name="TOYOTA">
                                            <strong class="carlogo"> <img
                                                    src="https://www.doctorvahaan.com/storage/brand/xNJP403201.png"
                                                    alt=""></strong>

                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-3 col-lg-3">
                                        <label class="radio-box carlogo-box">
                                            <input type="radio" name="brand" value="4" data-name="KIA">
                                            <strong class="carlogo"> <img
                                                    src="https://www.doctorvahaan.com/storage/brand/d7j5n03601.png"
                                                    alt=""></strong>

                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-3 col-lg-3">

                                        <label class="radio-box carlogo-box">
                                            <input type="radio" name="brand" value="5" data-name="Land Rover">
                                            <strong class="carlogo"> <img
                                                    src="https://www.doctorvahaan.com/storage/brand/NRPkP07905.png"
                                                    alt=""></strong>

                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-3 col-lg-3">
                                        <label class="radio-box carlogo-box">
                                            <input type="radio" name="brand" value="6" data-name="BYD">
                                            <strong class="carlogo"> <img
                                                    src="https://www.doctorvahaan.com/storage/brand/LA5qk07305.png"
                                                    alt=""></strong>

                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-3 col-lg-3">
                                        <label class="radio-box carlogo-box">
                                            <input type="radio" name="brand" value="7" data-name="Ford">
                                            <strong class="carlogo"> <img
                                                    src="https://www.doctorvahaan.com/storage/brand/BMr9D07305.png"
                                                    alt=""></strong>

                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-3 col-lg-3">
                                        <label class="radio-box carlogo-box">
                                            <input type="radio" name="brand" value="8" data-name="Ferrari">
                                            <strong class="carlogo"> <img
                                                    src="https://www.doctorvahaan.com/storage/brand/K7dcc07705.png"
                                                    alt=""></strong>

                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-3 col-lg-3">
                                        <label class="radio-box carlogo-box">
                                            <input type="radio" name="brand" value="9" data-name="ISUZU">
                                            <strong class="carlogo"> <img
                                                    src="https://www.doctorvahaan.com/storage/brand/tWW9907705.png"
                                                    alt=""></strong>

                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-3 col-lg-3">
                                        <label class="radio-box carlogo-box">
                                            <input type="radio" name="brand" value="10" data-name="SKOZDA">
                                            <strong class="carlogo"> <img
                                                    src="https://www.doctorvahaan.com/storage/brand/NsiET07905.png"
                                                    alt=""></strong>

                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-3 col-lg-3">
                                        <label class="radio-box carlogo-box">
                                            <input type="radio" name="brand" value="11" data-name="Volkswagen">
                                            <strong class="carlogo"> <img
                                                    src="https://www.doctorvahaan.com/storage/brand/AodSH07305.png"
                                                    alt=""></strong>

                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-3 col-lg-3">
                                        <label class="radio-box carlogo-box">
                                            <input type="radio" name="brand" value="12" data-name="Maruti Suzuki">
                                            <strong class="carlogo"> <img
                                                    src="https://www.doctorvahaan.com/storage/brand/jEuOp14505.png"
                                                    alt=""></strong>

                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-3 col-lg-3">
                                        <label class="radio-box carlogo-box">
                                            <input type="radio" name="brand" value="14" data-name="Mahindra">
                                            <strong class="carlogo"> <img
                                                    src="https://www.doctorvahaan.com/storage/brand/0qpNE16306.png"
                                                    alt=""></strong>

                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-3 col-lg-3">
                                        <label class="radio-box carlogo-box">
                                            <input type="radio" name="brand" value="15" data-name="Ashok Leyland">
                                            <strong class="carlogo"> <img
                                                    src="https://www.doctorvahaan.com/storage/brand/bp25Q16706.jpg"
                                                    alt=""></strong>

                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-3 col-lg-3">
                                        <label class="radio-box carlogo-box">
                                            <input type="radio" name="brand" value="16" data-name="Bharat Benz">
                                            <strong class="carlogo"> <img
                                                    src="https://www.doctorvahaan.com/storage/brand/GS8GP16906.jpg"
                                                    alt=""></strong>

                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-3 col-lg-3">
                                        <label class="radio-box carlogo-box">
                                            <input type="radio" name="brand" value="17" data-name="Eicher">
                                            <strong class="carlogo"> <img
                                                    src="https://www.doctorvahaan.com/storage/brand/KKe6w16306.webp"
                                                    alt=""></strong>

                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <label class="quoteformerror quoteformerror_brand col-md-12"></label>
                                </div>
                                <h4>Your Vehicle Model</h4>
                                <div class="mt-md-3 mb-4 form-group">
                                    <input type="text" class="form-control" placeholder="Enter Vehicle Model"
                                        name="vehicle_model">
                                    <label class="quoteformerror quoteformerror_vehicle_model"></label>
                                </div>
                                <h4>Select Fuel Type</h4>
                                <div class="row row-gap mt-3">
                                    <div class="col-md-6 col-6 col-lg-6">
                                        <label class="radio-box">
                                            <input type="radio" name="fuel_type" value="1" data-name="Diesel">
                                            <strong class="fuel-type">
                                                <img src="https://www.doctorvahaan.com/storage/fuel_type/6qcp006507.png"
                                                    alt="Diesel">
                                                Diesel
                                            </strong>

                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-6 col-6 col-lg-6">
                                        <label class="radio-box">
                                            <input type="radio" name="fuel_type" value="2" data-name="Petrol">
                                            <strong class="fuel-type">
                                                <img src="https://www.doctorvahaan.com/storage/fuel_type/l5r2M06107.png"
                                                    alt="Petrol">
                                                Petrol
                                            </strong>

                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <label class="quoteformerror quoteformerror_fuel_type col-md-12"></label>
                                </div>
                            </div>
                            <input type="button" name="previous" class="previous action-button-previous" value="Back">
                            <input type="button" name="next" id="secondstepquoteform" class="action-button"
                                value="Next">
                        </fieldset>
                        <fieldset style="display: none; position: relative; opacity: 0;">
                            <div class="modal-body">

                                <h4>Owner Type</h4>
                                <div class="row row-gap mt-3 mb-4">
                                    <div class="col-sm-4 col">
                                        <label class="radio-box">
                                            <input type="radio" name="owner_type" value="1" data-name="1st Hand">
                                            <strong>1st Hand</strong>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-sm-4 col">
                                        <label class="radio-box">
                                            <input type="radio" name="owner_type" value="2" data-name="2st Hand">
                                            <strong>2st Hand</strong>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-sm-4 col">
                                        <label class="radio-box">
                                            <input type="radio" name="owner_type" value="3" data-name="3st Hand">
                                            <strong>3st Hand</strong>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <label class="quoteformerror quoteformerror_owner_type col-md-12"></label>
                                </div>
                                <h4>Vehicle Age</h4>
                                <div class="range-slider">
                                    <div id="tooltip" style="left: calc(53.3333% - 1.06667px);"><span>8 <div
                                                class="pl-1">year</div>
                                        </span></div>
                                    <input id="range" type="range" name="vehicle_age" step="1" min="0" max="15">
                                </div>
                                <h4>Total Kms</h4>
                                <div class="range-slider">
                                    <div id="tooltip2" style="left: calc(50% + 0px);"><span>37500 <div class="pl-1">km
                                            </div></span>
                                    </div>
                                    <input id="range2" type="range" name="total_kms" step="1" min="0" max="75000">
                                </div>
                                <h4>Drive\Day</h4>
                                <div class="range-slider">
                                    <div id="tooltip3" style="left: calc(50% + 0px);"><span>750 <div class="pl-1">km
                                            </div></span>
                                    </div>
                                    <input id="range3" type="range" name="drive_per_day" step="1" min="0" max="1500">
                                </div>
                                <h4>Current Mileage</h4>
                                <div class="range-slider">
                                    <div id="tooltip4" style="left: calc(50% + 0px);"><span>50 <div class="pl-1">km
                                            </div></span>
                                    </div>
                                    <input id="range4" type="range" name="current_mileage" step="1" min="0" max="100">
                                </div>
                                <label class="quoteformerror quoteformerror_point_area"></label>
                            </div>
                            <input type="button" name="next" id="thirdstepquoteform" class="action-button" value="Next">
                            <input type="button" name="previous" class="previous action-button-previous" value="Back">
                        </fieldset>
                        <fieldset style="display: none; position: relative; opacity: 0;">
                            <div class="modal-body">
                                <div class="car-report mb-3 mb-md-4">
                                    <img class="w-100" src="assets/image/3432.jpg" alt="">
                                </div>
                                <h4>Enter your details</h4>
                                <div class="row">
                                    <div class="col-md-12 mt-md-3 mb-3 form-group">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Name" name="name"
                                            id="quoteName">
                                        <label class="quoteformerror quoteformerror_name"></label>
                                    </div>
                                    <div class="col-md-6 mt-0 mb-3 form-group">
                                        <label for="">Phone Number</label>
                                        <input type="text" class="form-control" placeholder="Enter Phone No"
                                            name="phone" id="quotePhone">
                                        <label class="quoteformerror quoteformerror_phone"></label>
                                    </div>
                                    <div class="col-md-6 mt-0 mb-md-3 mb-0 form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" placeholder="Enter Email" name="email"
                                            id="quoteEmail">
                                        <label class="quoteformerror quoteformerror_email"></label>
                                    </div>
                                </div>
                            </div>
                            <input type="button" name="next" id="forthstepquoteform" class="action-button full-btn"
                                value="VIEW REPORT">
                        </fieldset>
                        <fieldset class="pb-0" style="display: none; position: relative; opacity: 0;">
                            <div class="modal-body p-0">
                                <div class="scorebordmain">
                                    <div class="row row-gap">
                                        <div class="col-sm-6">
                                            <div class="report-box">
                                                <!-- <div id="barometer" class="meter-main"></div> -->
                                                <div class="mdetails">
                                                    <strong class="carbonization_level_area">0%</strong>
                                                    <span>Carbonization
                                                        <br>Level</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="report-box">
                                                <!-- <div id="barometer2" class="meter-main"></div> -->
                                                <div class="mdetails">
                                                    <strong class="your_score_area">10%</strong> <span>Your
                                                        <br>Score</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-greenmain">
                                    <div class="after-details">
                                        <h2><span>AFTER DECARBONIZATION</span></h2>
                                        <h4>Expected increase in mileage <div id="tooltip5"
                                                style="left: calc(25% + 8px);"><span>20
                                                    <div class="pl-1">%</div>
                                                </span></div>
                                        </h4>
                                        <div class="range-slider">
                                            <input id="range5" class="renge-design bg-white" type="range" step="10"
                                                value="20" min="0" max="80" disabled="">
                                        </div>
                                        <ul class="rengeline d-flex justify-content-between">
                                            <li>0</li>
                                            <li>10</li>
                                            <li>20</li>
                                            <li>30</li>
                                            <li>40</li>
                                            <li>50</li>
                                            <li>60</li>
                                            <li>70</li>
                                            <li>80</li>
                                        </ul>
                                        <h3>Expected Savings this year</h3>
                                        <h5 class="saving_price_area"></h5>
                                    </div>
                                </div>
                            </div>
                            <input type="button" name="next" id="fivestepquoteform"
                                class="next action-button full-btn checkcost-btn" value="CHECK COST OF DECARBONIZATION">
                        </fieldset>
                        <fieldset class="pb-0" style="display: none; position: relative; opacity: 0;">

                            <div class="modal-body p-0">
                                <div class="model-img">
                                    <img src="https://www.doctorvahaan.com/frontend/images/price-detsils-img.png"
                                        alt="img">
                                </div>
                                <div class="price-details">
                                    PRICE DETAILS
                                </div>
                                <div class="price-list">
                                    <div class="pr-d">
                                        <span>Service Fees</span> <strong>₹ 1000.00</strong>
                                    </div>
                                    <div class="pr-d discount">
                                        <span>Discount</span> <strong>- ₹ 200.00</strong>
                                    </div>
                                    <div class="total-price pr-d">
                                        <span>Total</span> <strong>₹ 800.00</strong>
                                    </div>
                                </div>
                            </div>
                            <input type="button" name="next" id="sixstepquoteform"
                                class="action-button full-btn booknow" value="BOOK NOW">
                        </fieldset>
                        <fieldset class="pb-0" style="display: none; position: relative; opacity: 0;">
                            <div class="d-flex flex-row gap-2no-gutters vehicledetails-main">
                                <div class="col-md-4 vehicledetails-left">
                                    <h2>Vehicle details</h2>
                                    <ul class="pl-0 m-0 ps-0">
                                        <li><span>Vehicle type</span> <strong
                                                class="show_vehicle_type">Commercial</strong></li>
                                        <li><span>Types of cars</span> <strong class="show_type_of_car">Bus</strong>
                                        </li>
                                        <li><span>Brand</span> <strong class="show_brand"></strong></li>
                                        <li><span>Model</span> <strong class="show_vehicle_model"></strong></li>
                                        <li><span>Fuel type</span> <strong class="show_fuel_type"></strong></li>
                                        <li><span>Owner type</span> <strong class="show_owner_type"></strong></li>
                                        <li><span>Vehicle age</span> <strong class="show_vehicle_age"></strong></li>
                                        <li><span>Total kms</span> <strong class="show_total_kms"></strong></li>
                                        <li><span>Drive/day</span> <strong class="show_drive_per_day"></strong></li>
                                        <li><span>Current mileage</span> <strong class="show_current_mileage"></strong>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-8">
                                    <div class="booking-details">
                                        <h2>Enter your booking details</h2>
                                        <div class="row checkout-form">
                                            <div class="form-group col-md-6">
                                                <label for="">City</label>
                                                <select class="" name="city">
                                                    <option value="" data-display-text="" selected="" disabled="">Select
                                                        City
                                                    </option>
                                                    <option value="1" data-display-text="Kolkata">Kolkata</option>
                                                    <option value="2" data-display-text="Howrah">Howrah</option>
                                                </select>
                                                <!-- <div class="dropdown" tabindex="0"><span class="current">Select
                                                        City</span>
                                                    <div class="list">
                                                        <ul>
                                                            <li class="option selected" data-value=""
                                                                data-display-text="">Select
                                                                City</li>
                                                            <li class="option " data-value="1"
                                                                data-display-text="Kolkata">Kolkata
                                                            </li>
                                                            <li class="option " data-value="2"
                                                                data-display-text="Howrah">Howrah
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div> -->
                                                <label class="quoteformerror quoteformerror_city"></label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Select Date</label>
                                                <select class="" onchange="gettimeslotbookingform($(this).val())"
                                                    name="booking_type">
                                                    <option value="" data-display-text="" selected="" disabled="">Select
                                                        Date
                                                    </option>
                                                    <option value="T" data-display-text="Today">Today</option>
                                                    <option value="TW" data-display-text="Tomorrow">Tomorrow</option>
                                                    <option value="ATW" data-display-text="After Tomorrow">After
                                                        Tomorrow</option>
                                                </select>
                                                <!-- <div class="dropdown" tabindex="0"><span class="current">Select
                                                        Date</span>
                                                    <div class="list">
                                                        <ul>
                                                            <li class="option selected" data-value=""
                                                                data-display-text="">Select
                                                                Date</li>
                                                            <li class="option " data-value="T"
                                                                data-display-text="Today">Today</li>
                                                            <li class="option " data-value="TW"
                                                                data-display-text="Tomorrow">
                                                                Tomorrow</li>
                                                            <li class="option " data-value="ATW"
                                                                data-display-text="After Tomorrow">
                                                                After Tomorrow</li>
                                                        </ul>
                                                    </div>
                                                </div> -->
                                                <label class="quoteformerror quoteformerror_booking_type"></label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="">Select Time Slot</label>
                                                <div class="form-row d-flex flex-wrap gap-2 mt-0 mb-md-4 date_selectmain"
                                                    id="serviceSlotArea">
                                                    <div class="col-md-4">
                                                        <label class="radio-box">
                                                            <input type="radio" name="booking_time_slot" value="1">
                                                            <strong>08:00 AM - 09:00 AM</strong>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="radio-box">
                                                            <input type="radio" name="booking_time_slot" value="2">
                                                            <strong>09:00 AM - 10:00 AM</strong>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="radio-box">
                                                            <input type="radio" name="booking_time_slot" value="3">
                                                            <strong>10:00 AM - 11:00 AM</strong>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="radio-box">
                                                            <input type="radio" name="booking_time_slot" value="4">
                                                            <strong>11:00 AM - 12:00 PM</strong>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="radio-box">
                                                            <input type="radio" name="booking_time_slot" value="5">
                                                            <strong>12:00 PM - 13:00 PM</strong>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="radio-box">
                                                            <input type="radio" name="booking_time_slot" value="10">
                                                            <strong>16:00 PM - 17:00 PM</strong>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <label class="quoteformerror quoteformerror_time_slot"></label>
                                            </div>
                                            <div class="form-group col-md-12 mb-0">
                                                <label for="">Address</label>
                                                <p>Please provide the address where you would like to receive this
                                                    service</p>
                                                <textarea class="form-control" name="address"></textarea>
                                                <label class="quoteformerror quoteformerror_address"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="final-price">
                                        <h2>Final Price : <strong>₹ 800.00</strong></h2>
                                        <input type="hidden" class="amount" value="800.00">
                                        <button type="button" class="btn button-solid btn-white w-100">PAY
                                            NOW</button>
                                    </div>
                                </div>
                            </div>
                            <!-- <input type="button" name="next" class="next action-button full-btn booknow" value="BOOK NOW" /> -->
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- <script>
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
    </script> -->
  
</content>
@endsection


@section('script')
<script src="assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/wow.js"></script>
    <script src="assets/js/barometer.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script>


        function getVehicleCarType(val) {
            if (val) {
                $('.loader-off.loaderWrap').css('opacity', '1');
                $('.loader-off.loaderWrap').css('visibility', 'visible');
                $.ajax({
                    url: "assets/image/get-vehicle-car-type/" + val,
                    method: "GET",
                    dataType: "json",
                    success: function (responce) {
                        if (responce.data.status == 'success') {
                            $('#typesOfcarAreaPopup')(responce.data);
                            $('.loader-off.loaderWrap').css('opacity', '0');
                            $('.loader-off.loaderWrap').css('visibility', 'hidden');
                            if (responce.data.count > 0) {
                                $('#firststepquoteform').removeAttr('disabled');
                            }
                            else {
                                $('#firststepquoteform').attr('disabled', 'true');
                            }
                        } else {
                            $('.loader-off.loaderWrap').css('opacity', '0');
                            $('.loader-off.loaderWrap').css('visibility', 'hidden');
                            $('#firststepquoteform').attr('disabled', 'true');
                        }
                    }
                });
            }
            else {
                $('#serviceSlotArea')('');
            }
        }

        $(document).ready(function () {
            $(".testimonials-slide").owlCarousel({
                margin: 20,
                smartSpeed: 500,
                navText: ['<i class="fa fa-long-arrow-left"></i>', '<i class="fa fa-long-arrow-right"></i>'],
                nav: true,
                dots: false,
                center: true,
                autoplay: false,
                autoplayHoverPause: true,
                loop: true,
                touchDrag: true,
                mouseDrag: true,
                center: true,
                autoplayTimeout: 1000,
                responsive: {
                    0: { items: 1 },
                    480: { items: 1 },
                    576: { items: 2 },
                    768: { items: 2 },
                    992: { items: 3 },
                    1200: { items: 3 }
                }
            });
        });

    </script>
    <script src="assets/js/main.js"></script>
@endsection
