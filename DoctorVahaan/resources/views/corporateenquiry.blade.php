
@extends('layouts.deafult')
@section('title', __('Vendor'))

@section('head')
@endsection
@section('style')
@endsection


@section('content')
<content>
    <!-- <section class="bred-come">
        <div class="container">
            <ul>
                <li><a href="assets/image">HOME</a></li>
                <li>FRANCHISE ENQUIRY</li>
            </ul>
        </div>
    </section> -->

    <section class="sec-space mt-75  servicerarea-main pb-2 wow fadeInUp"  
        style="    animation-name: fadeInUp;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="form-main">
                        <div class="section-title text-center mb-md-4">
                            <h2>FRANCHISE ENQUIRY</h2>
                        </div>
                        <form action="assets/image/enquiry-store" method="post" autocomplete="off" id="enquiryForm"
                            novalidate="novalidate">
                            <input type="hidden" name="_token" value="bgnjBa6UUB0gI5hf3ZhhzqLD1722SKgrCZ5K0Vqy"
                                autocomplete="off"> <input type="hidden" name="enquiry_type" value="corporate_enquiry">
                            <div class="form-row d-flex flex-row  flex-wrap justify-content-between">
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
                                <div class="form-group w-49 checkout-form">
                                    <label for="">Subject *</label>
                                    <input type="text" class="form-control" placeholder="Enter Subject" name="subject"
                                        value="">
                                </div>
                                <div class="form-group w-49 checkout-form">
                                    <label for="">Maximum Vehicle *</label>
                                    <input type="text" class="form-control" placeholder="Enter Maximum Vehicle"
                                        name="no_of_vehicle" value="">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="Message">Message</label>
                                    <textarea name="message" class="form-control"
                                        placeholder="Enter Message"></textarea>
                                </div>
                                <div class="form-group w-49 captcha mt-2">
                                    <span> <img src="assets/image/captcha/default?ErzInt5f"></span>
                                    <button type="button" class="btn btn-success btn-refresh btn-sm"
                                        onclick="refreshCaptcha();"><i class="fa fa-refresh"></i></button>
                                </div>
                                <div class="form-group w-49 mt-2">
                                    <input type="text" class="form-control" id="captcha" name="captcha"
                                        placeholder="Enter captcha">
                                </div>
                                <div class="form-group col-md-12 mt-lg-3 mb-0">
                                    <button class="btn button-solid w-100">SEND ENQUIRY</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="newslatter sec-space pt-4">
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content modal-style">
                <form id="msform" method="post" autocomplete="off" action="assets/image/booking-store">
                    <input type="hidden" name="_token" value="bgnjBa6UUB0gI5hf3ZhhzqLD1722SKgrCZ5K0Vqy"
                        autocomplete="off">
                    <fieldset>
                        <div class="modal-header">
                            <h2 class="modal-title" id="exampleModalLabel"> PLEASE PROVIDE YOUR CAR DETAILS TO GET AN
                                ENGINE REPORT
                            </h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="successMessageArea alert alert-success" style="display: none;">

                            </div>
                            <h4>Which vehicle type do you drive?</h4>
                            <div class="row vehicle-type mt-md-3 row-gap mb-4">
                                <div class="col">
                                    <label class="radio-box">
                                        <strong>Commercial</strong>
                                        <input type="radio" name="vehicle_type" value="1" data-name="Commercial"
                                            checked="" onchange="getVehicleCarType('1')">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col">
                                    <label class="radio-box">
                                        <strong>Private</strong>
                                        <input type="radio" name="vehicle_type" value="2" data-name="Private"
                                            onchange="getVehicleCarType('2')">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <label class="quoteformerror quoteformerror_vehicle_type col-md-12"></label>
                            </div>

                            <h4>Types of cars</h4>
                            <div class="row row-gap mt-md-3" id="typesOfcarAreaPopup">
                                <div class="col-md-3 col-lg-3 col-6">
                                    <label class="radio-box">
                                        <strong>
                                            <img src="assets/image/storage/car_type/vDuAr06705.png" alt="">
                                            <h3>Bus</h3>
                                        </strong>
                                        <input type="radio" name="car_type" value="2" data-name="Bus">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-3 col-lg-3 col-6">
                                    <label class="radio-box">
                                        <strong>
                                            <img src="assets/image/storage/car_type/r84P406605.png" alt="">
                                            <h3>Mini</h3>
                                        </strong>
                                        <input type="radio" name="car_type" value="4" data-name="Mini">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-3 col-lg-3 col-6">
                                    <label class="radio-box">
                                        <strong>
                                            <img src="assets/image/storage/car_type/LNwoU06405.png" alt="">
                                            <h3>Taxi</h3>
                                        </strong>
                                        <input type="radio" name="car_type" value="1" data-name="Taxi">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-3 col-lg-3 col-6">
                                    <label class="radio-box">
                                        <strong>
                                            <img src="assets/image/storage/car_type/XQP0006705.png" alt="">
                                            <h3>Truck</h3>
                                        </strong>
                                        <input type="radio" name="car_type" value="3" data-name="Truck">
                                        <span class="checkmark"></span>
                                    </label>
                                </div><label class="quoteformerror quoteformerror_car_type col-md-12"></label>
                            </div>

                        </div>
                        <input type="button" name="next" id="firststepquoteform" class="action-button" value="Next">
                    </fieldset>
                    <fieldset>
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <h4>Select Brand/Manufucturer</h4>
                            <div class="row row-gap mt-3 mb-4">
                                <div class="col-3 col-lg-3">
                                    <label class="radio-box carlogo-box">
                                        <strong class="carlogo"> <img src="assets/image/storage/brand/6LC9b03201.png"
                                                alt=""></strong>
                                        <input type="radio" name="brand" value="1" data-name="Tata">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-3 col-lg-3">
                                    <label class="radio-box carlogo-box">
                                        <strong class="carlogo"> <img src="assets/image/storage/brand/RjHJx03701.png"
                                                alt=""></strong>
                                        <input type="radio" name="brand" value="2" data-name="Hyundai">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-3 col-lg-3">
                                    <label class="radio-box carlogo-box">
                                        <strong class="carlogo"> <img src="assets/image/storage/brand/xNJP403201.png"
                                                alt=""></strong>
                                        <input type="radio" name="brand" value="3" data-name="TOYOTA">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-3 col-lg-3">
                                    <label class="radio-box carlogo-box">
                                        <strong class="carlogo"> <img src="assets/image/storage/brand/d7j5n03601.png"
                                                alt=""></strong>
                                        <input type="radio" name="brand" value="4" data-name="KIA">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-3 col-lg-3">
                                    <label class="radio-box carlogo-box">
                                        <strong class="carlogo"> <img src="assets/image/storage/brand/NRPkP07905.png"
                                                alt=""></strong>
                                        <input type="radio" name="brand" value="5" data-name="Land Rover">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-3 col-lg-3">
                                    <label class="radio-box carlogo-box">
                                        <strong class="carlogo"> <img src="assets/image/storage/brand/LA5qk07305.png"
                                                alt=""></strong>
                                        <input type="radio" name="brand" value="6" data-name="BYD">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-3 col-lg-3">
                                    <label class="radio-box carlogo-box">
                                        <strong class="carlogo"> <img src="assets/image/storage/brand/BMr9D07305.png"
                                                alt=""></strong>
                                        <input type="radio" name="brand" value="7" data-name="Ford">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-3 col-lg-3">
                                    <label class="radio-box carlogo-box">
                                        <strong class="carlogo"> <img src="assets/image/storage/brand/K7dcc07705.png"
                                                alt=""></strong>
                                        <input type="radio" name="brand" value="8" data-name="Ferrari">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-3 col-lg-3">
                                    <label class="radio-box carlogo-box">
                                        <strong class="carlogo"> <img src="assets/image/storage/brand/tWW9907705.png"
                                                alt=""></strong>
                                        <input type="radio" name="brand" value="9" data-name="ISUZU">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-3 col-lg-3">
                                    <label class="radio-box carlogo-box">
                                        <strong class="carlogo"> <img src="assets/image/storage/brand/NsiET07905.png"
                                                alt=""></strong>
                                        <input type="radio" name="brand" value="10" data-name="SKOZDA">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-3 col-lg-3">
                                    <label class="radio-box carlogo-box">
                                        <strong class="carlogo"> <img src="assets/image/storage/brand/AodSH07305.png"
                                                alt=""></strong>
                                        <input type="radio" name="brand" value="11" data-name="Volkswagen">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-3 col-lg-3">
                                    <label class="radio-box carlogo-box">
                                        <strong class="carlogo"> <img src="assets/image/storage/brand/jEuOp14505.png"
                                                alt=""></strong>
                                        <input type="radio" name="brand" value="12" data-name="Maruti Suzuki">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-3 col-lg-3">
                                    <label class="radio-box carlogo-box">
                                        <strong class="carlogo"> <img src="assets/image/storage/brand/0qpNE16306.png"
                                                alt=""></strong>
                                        <input type="radio" name="brand" value="14" data-name="Mahindra">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-3 col-lg-3">
                                    <label class="radio-box carlogo-box">
                                        <strong class="carlogo"> <img src="assets/image/storage/brand/bp25Q16706.jpg"
                                                alt=""></strong>
                                        <input type="radio" name="brand" value="15" data-name="Ashok Leyland">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-3 col-lg-3">
                                    <label class="radio-box carlogo-box">
                                        <strong class="carlogo"> <img src="assets/image/storage/brand/GS8GP16906.jpg"
                                                alt=""></strong>
                                        <input type="radio" name="brand" value="16" data-name="Bharat Benz">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-3 col-lg-3">
                                    <label class="radio-box carlogo-box">
                                        <strong class="carlogo"> <img
                                                src="assets/image/storage/brand/KKe6w16306.webp" alt=""></strong>
                                        <input type="radio" name="brand" value="17" data-name="Eicher">
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
                                        <strong class="fuel-type">
                                            <img src="assets/image/storage/fuel_type/6qcp006507.png" alt="Diesel">
                                            Diesel
                                        </strong>
                                        <input type="radio" name="fuel_type" value="1" data-name="Diesel">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-6 col-6 col-lg-6">
                                    <label class="radio-box">
                                        <strong class="fuel-type">
                                            <img src="assets/image/storage/fuel_type/l5r2M06107.png" alt="Petrol">
                                            Petrol
                                        </strong>
                                        <input type="radio" name="fuel_type" value="2" data-name="Petrol">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <label class="quoteformerror quoteformerror_fuel_type col-md-12"></label>
                            </div>
                        </div>
                        <input type="button" name="previous" class="previous action-button-previous" value="Back">
                        <input type="button" name="next" id="secondstepquoteform" class="action-button" value="Next">
                    </fieldset>
                    <fieldset>
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <h4>Owner Type</h4>
                            <div class="row row-gap mt-3 mb-4">
                                <div class="col-sm-4 col">
                                    <label class="radio-box"> <strong>1st Hand</strong>
                                        <input type="radio" name="owner_type" value="1" data-name="1st Hand">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-sm-4 col">
                                    <label class="radio-box"> <strong>2st Hand</strong>
                                        <input type="radio" name="owner_type" value="2" data-name="2st Hand">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-sm-4 col">
                                    <label class="radio-box"> <strong>3st Hand</strong>
                                        <input type="radio" name="owner_type" value="3" data-name="3st Hand">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <label class="quoteformerror quoteformerror_owner_type col-md-12"></label>
                            </div>
                            <h4>Vehicle Age</h4>
                            <div class="range-slider">
                                <div id="tooltip" style="left: calc(53.3333% - 1.06667px);"><span>8 <div class="pl-1">
                                            year</div> </span></div>
                                <input id="range" type="range" name="vehicle_age" step="1" min="0" max="15">
                            </div>
                            <h4>Total Kms</h4>
                            <div class="range-slider">
                                <div id="tooltip2" style="left: calc(50% + 0px);"><span>37500 <div class="pl-1">km</div>
                                    </span></div>
                                <input id="range2" type="range" name="total_kms" step="1" min="0" max="75000">
                            </div>
                            <h4>Drive\Day</h4>
                            <div class="range-slider">
                                <div id="tooltip3" style="left: calc(50% + 0px);"><span>750 <div class="pl-1">km</div>
                                    </span></div>
                                <input id="range3" type="range" name="drive_per_day" step="1" min="0" max="1500">
                            </div>
                            <h4>Current Mileage</h4>
                            <div class="range-slider">
                                <div id="tooltip4" style="left: calc(50% + 0px);"><span>50 <div class="pl-1">km</div>
                                    </span></div>
                                <input id="range4" type="range" name="current_mileage" step="1" min="0" max="100">
                            </div>
                            <label class="quoteformerror quoteformerror_point_area"></label>
                        </div>
                        <input type="button" name="next" id="thirdstepquoteform" class="action-button" value="Next">
                        <input type="button" name="previous" class="previous action-button-previous" value="Back">
                    </fieldset>
                    <fieldset>
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <div class="car-report mb-3 mb-md-4">
                                <img class="w-100" src="assets/image/frontend/images/scimg.png" alt="">
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
                                    <input type="text" class="form-control" placeholder="Enter Phone No" name="phone"
                                        id="quotePhone">
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
                    <fieldset class="pb-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <div class="modal-body p-0">
                            <div class="scorebordmain">
                                <div class="row row-gap">
                                    <div class="col-sm-6">
                                        <div class="report-box">
                                            <div id="barometer" class="meter-main"></div>
                                            <div class="mdetails">
                                                <strong class="carbonization_level_area">0%</strong> <span>Carbonization
                                                    <br>Level</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="report-box">
                                            <div id="barometer2" class="meter-main"></div>
                                            <div class="mdetails">
                                                <strong class="your_score_area"></strong> <span>Your <br>Score</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-greenmain">
                                <div class="after-details">
                                    <h2><span>AFTER DECARBONIZATION</span></h2>
                                    <h4>Expected increase in mileage <div id="tooltip5" style="left: calc(25% + 8px);">
                                            <span>20 <div class="pl-1">%</div></span>
                                        </div>
                                    </h4>
                                    <div class="range-slider">
                                        <input id="range5" class="renge-design" type="range" step="10" value="20"
                                            min="0" max="80" disabled="">
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
                    <fieldset class="pb-0">
                        <button type="button" class="close custom-clos" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <div class="modal-body p-0">
                            <div class="model-img">
                                <img src="assets/image/frontend/images/price-detsils-img.png" alt="img">
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
                        <input type="button" name="next" id="sixstepquoteform" class="action-button full-btn booknow"
                            value="BOOK NOW">
                    </fieldset>
                    <fieldset class="pb-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <div class="row no-gutters vehicledetails-main">
                            <div class="col-md-4 vehicledetails-left">
                                <h2>Vehicle details</h2>
                                <ul>
                                    <li><span>Vehicle type</span> <strong class="show_vehicle_type"></strong></li>
                                    <li><span>Types of cars</span> <strong class="show_type_of_car"></strong></li>
                                    <li><span>Brand</span> <strong class="show_brand"></strong></li>
                                    <li><span>Model</span> <strong class="show_vehicle_model"></strong></li>
                                    <li><span>Fuel type</span> <strong class="show_fuel_type"></strong></li>
                                    <li><span>Owner type</span> <strong class="show_owner_type"></strong></li>
                                    <li><span>Vehicle age</span> <strong class="show_vehicle_age"></strong></li>
                                    <li><span>Total kms</span> <strong class="show_total_kms"></strong></li>
                                    <li><span>Drive/day</span> <strong class="show_drive_per_day"></strong></li>
                                    <li><span>Current mileage</span> <strong class="show_current_mileage"></strong></li>
                                </ul>
                            </div>
                            <div class="col-md-8">
                                <div class="booking-details">
                                    <h2>Enter your booking details</h2>
                                    <div class="row checkout-form">
                                        <div class="form-group w-49">
                                            <label for="">City</label>
                                            <select class="" name="city">
                                                <option value="" data-display-text="" selected="" disabled="">Select
                                                    City</option>
                                                <option value="1" data-display-text="Kolkata">Kolkata</option>
                                                <option value="2" data-display-text="Howrah">Howrah</option>
                                            </select>
                                            <div class="dropdown " tabindex="0"><span class="current">Select City</span>
                                                <div class="list">
                                                    <ul>
                                                        <li class="option selected" data-value="" data-display-text="">
                                                            Select City</li>
                                                        <li class="option " data-value="1" data-display-text="Kolkata">
                                                            Kolkata</li>
                                                        <li class="option " data-value="2" data-display-text="Howrah">
                                                            Howrah</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <label class="quoteformerror quoteformerror_city"></label>
                                        </div>
                                        <div class="form-group w-49">
                                            <label for="">Select Date</label>
                                            <select class="" onchange="gettimeslotbookingform($(this).val())"
                                                name="booking_type">
                                                <option value="" data-display-text="" selected="" disabled="">Select
                                                    Date</option>
                                                <option value="T" data-display-text="Today">Today</option>
                                                <option value="TW" data-display-text="Tomorrow">Tomorrow</option>
                                                <option value="ATW" data-display-text="After Tomorrow">After Tomorrow
                                                </option>
                                            </select>
                                            <div class="dropdown " tabindex="0"><span class="current">Select Date</span>
                                                <div class="list">
                                                    <ul>
                                                        <li class="option selected" data-value="" data-display-text="">
                                                            Select Date</li>
                                                        <li class="option " data-value="T" data-display-text="Today">
                                                            Today</li>
                                                        <li class="option " data-value="TW"
                                                            data-display-text="Tomorrow">Tomorrow</li>
                                                        <li class="option " data-value="ATW"
                                                            data-display-text="After Tomorrow">After Tomorrow</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <label class="quoteformerror quoteformerror_booking_type"></label>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">Select Time Slot</label>
                                            <div class="form-row mt-0 mb-md-4 date_selectmain" id="serviceSlotArea">
                                            </div>
                                            <label class="quoteformerror quoteformerror_time_slot"></label>
                                        </div>
                                        <div class="form-group col-md-12 mb-0">
                                            <label for="">Address</label>
                                            <p>Please provide the address where you would like to receive this service
                                            </p>
                                            <textarea class="form-control" name="address"></textarea>
                                            <label class="quoteformerror quoteformerror_address"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="final-price">
                                    <h2>Final Price : <strong>₹ 800.00</strong></h2>
                                    <input type="hidden" class="amount" value="800.00">
                                    <button type="button" class="btn button-solid btn-white w-100"
                                        id="finalSubmitbutton">PAY NOW</button>
                                </div>
                            </div>
                        </div>
                        <!-- <input type="button" name="next" class="next action-button full-btn booknow" value="BOOK NOW" /> -->
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal End-->
    

</content>
@endsection


@section('script')
<!-- jequery -->
<script src="assets/image/frontend/js/jquery-3.4.1.min.js"></script>
    <script src="assets/image/frontend/js/bootstrap.min.js"></script>
    <script src="assets/image/frontend/js/owl.carousel.min.js"></script>
    <script src="assets/image/frontend/js/wow.min.js"></script>
    <script src="assets/image/frontend/js/barometer.js"></script>
    <script src="assets/image/frontend/js/custom.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"
        integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw=="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
    <script type="text/javascript"
        src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#enquiryForm').validate({
                ignore: [],
                rules: {
                    first_name: {
                        required: true,
                    },
                    last_name: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: true,
                        digits: true,
                        minlength: 10,
                        maxlength: 12,
                    },
                    subject: {
                        required: true,
                    },
                    no_of_vehicle: {
                        required: true,
                    },
                    captcha: {
                        required: true,
                    },

                },
            });
        })
    </script>

@endsection