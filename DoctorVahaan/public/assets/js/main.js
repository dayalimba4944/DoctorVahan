function progressbarLoadFunction() {
    // renge piker js start
    const range = document.getElementById("range"),
        tooltip = document.getElementById("tooltip"),
        setValue1 = () => {
            const newValue = Number(((range.value - range.min) * 100) / (range.max - range.min)),
                newPosition = 16 - newValue * 0.32;
            tooltip.innerHTML = `<span>${range.value} <div class="pl-1">` + "year" + `</div> </span>`;
            tooltip.style.left = `calc(${newValue}% + (${newPosition}px))`;
            document.documentElement.style.setProperty(
                "--range-progress",
                `calc(${newValue}% + (${newPosition}px))`
            );
        };
    document.addEventListener("DOMContentLoaded", setValue1);
    range.addEventListener("input", setValue1);

    const range2 = document.getElementById("range2"),
        tooltip2 = document.getElementById("tooltip2"),
        setValue2 = () => {
            const newValue = Number(((range2.value - range2.min) * 100) / (range2.max - range2.min)),
                newPosition = 16 - newValue * 0.32;
            tooltip2.innerHTML = `<span>${range2.value} <div class="pl-1">` + "km" + `</div></span>`;
            tooltip2.style.left = `calc(${newValue}% + (${newPosition}px))`;
            document.documentElement.style.setProperty(
                "--range2-progress",
                `calc(${newValue}% + (${newPosition}px))`
            );

        };
    document.addEventListener("DOMContentLoaded", setValue2);
    range2.addEventListener("input", setValue2);

    const range3 = document.getElementById("range3"),
        tooltip3 = document.getElementById("tooltip3"),
        setValue3 = () => {
            const newValue = Number(((range3.value - range3.min) * 100) / (range3.max - range3.min)),
                newPosition = 16 - newValue * 0.32;
            tooltip3.innerHTML = `<span>${range3.value} <div class="pl-1">` + "km" + `</div></span>`;
            tooltip3.style.left = `calc(${newValue}% + (${newPosition}px))`;
            document.documentElement.style.setProperty(
                "--range3-progress",
                `calc(${newValue}% + (${newPosition}px))`
            );
        };
    document.addEventListener("DOMContentLoaded", setValue3);
    range3.addEventListener("input", setValue3);


    const range4 = document.getElementById("range4"),
        tooltip4 = document.getElementById("tooltip4"),
        setValue4 = () => {
            const newValue = Number(((range4.value - range4.min) * 100) / (range4.max - range4.min)),
                newPosition = 16 - newValue * 0.32;
            tooltip4.innerHTML = `<span>${range4.value} <div class="pl-1">` + "km" + `</div></span>`;
            tooltip4.style.left = `calc(${newValue}% + (${newPosition}px))`;
            document.documentElement.style.setProperty(
                "--range4-progress",
                `calc(${newValue}% + (${newPosition}px))`
            );
        };
    document.addEventListener("DOMContentLoaded", setValue4);
    range4.addEventListener("input", setValue4);
    // renge piker js End
}
// Step Form Start
$(document).ready(function () {
    var current_fs, next_fs, previous_fs;
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;
    setProgressBar(current);
    $('#firststepquoteform').click(function () {
        var vehicle_type = $('input[name="vehicle_type"]:checked').val();
        var car_type = $('input[name="car_type"]:checked').val();
        if (vehicle_type == '' || vehicle_type == undefined) {
            $('.quoteformerror_vehicle_type').html('Please select a vehicle type.');
            $('.quoteformerror_vehicle_type').show();
            return false;
        }
        else if (car_type == '' || car_type == undefined) {
            $('.quoteformerror_vehicle_type').html('');
            $('.quoteformerror_vehicle_type').hide();
            $('.quoteformerror_car_type').html('Please select a car type.');
            $('.quoteformerror_car_type').show();
            return false;
        }
        $('.quoteformerror_car_type').html('');
        $('.quoteformerror_car_type').hide();
        $('.quoteformerror_vehicle_type').html('');
        $('.quoteformerror_vehicle_type').hide();

        $('.show_vehicle_type').text($('input[name="vehicle_type"]:checked').attr('data-name'));
        $('.show_type_of_car').text($('input[name="car_type"]:checked').attr('data-name'));
        stepsNext($(this));
    });
    $('#secondstepquoteform').click(function () {
        var brand = $('input[name="brand"]:checked').val();
        var fuel_type = $('input[name="fuel_type"]:checked').val();
        var vehicle_model = $('input[name="vehicle_model"]').val();
        if (brand == '' || brand == undefined) {
            $('.quoteformerror_brand').html('Please select your car brand.');
            $('.quoteformerror_brand').show();
            return false;
        }
        else if (vehicle_model == '' || vehicle_model == undefined) {
            $('.quoteformerror_brand').html('');
            $('.quoteformerror_brand').hide();
            $('.quoteformerror_vehicle_model').html('Please enter a vehicle model.');
            $('.quoteformerror_vehicle_model').show();
            return false;
        }
        else if (fuel_type == '' || fuel_type == undefined) {
            $('.quoteformerror_brand').html('');
            $('.quoteformerror_brand').hide();
            $('.quoteformerror_vehicle_model').html('');
            $('.quoteformerror_vehicle_model').hide();
            $('.quoteformerror_fuel_type').html('Please select a fuel type.');
            $('.quoteformerror_fuel_type').show();
            return false;
        }
        $('.quoteformerror_brand').html('');
        $('.quoteformerror_brand').hide();
        $('.quoteformerror_vehicle_model').html('');
        $('.quoteformerror_vehicle_model').hide();
        $('.quoteformerror_fuel_type').html('');
        $('.quoteformerror_fuel_type').hide();

        $('.show_brand').text($('input[name="brand"]:checked').attr('data-name'));
        $('.show_vehicle_model').text(vehicle_model);
        $('.show_fuel_type').text($('input[name="fuel_type"]:checked').attr('data-name'));
        stepsNext($(this));
    });
    $('#thirdstepquoteform').click(function () {
        var fuel_type = $('input[name="fuel_type"]:checked').val();
        var owner_type = $('input[name="owner_type"]:checked').val();
        var vehicle_age = $('input[name="vehicle_age"]').val();
        var total_kms = $('input[name="total_kms"]').val();
        var drive_per_day = $('input[name="drive_per_day"]').val();
        var current_mileage = $('input[name="current_mileage"]').val();
        if (owner_type == '' || owner_type == undefined) {
            $('.quoteformerror_owner_type').html('Please select a owner type.');
            $('.quoteformerror_owner_type').show();
            return false;
        }
        $('.quoteformerror_owner_type').html('');
        $('.quoteformerror_owner_type').hide();
       
        $('.show_owner_type').text($('input[name="owner_type"]:checked').attr('data-name'));
        $('.show_vehicle_age').text(vehicle_age + " years");
        $('.show_total_kms').text(total_kms + " km");
        $('.show_drive_per_day').text(drive_per_day + " km");
        $('.show_current_mileage').text(current_mileage + " km");
        if (vehicle_age > 0 && total_kms > 0 && drive_per_day > 0 && current_mileage > 0) {
            stepsNext($(this));
        }
    });
    $('#forthstepquoteform').click(function () {
        var name = $('#quoteName').val();
        var phone = $('#quotePhone').val();
        var email = $('#quoteEmail').val();
        if (name == '' || name == undefined) {
            $('.quoteformerror_name').html('Please enter your name.');
            $('.quoteformerror_name').show();
            return false;
        }
        else if (validatePhone(phone) == false) {
            $('.quoteformerror_name').html('');
            $('.quoteformerror_name').hide();
            $('.quoteformerror_phone').html('Please enter a valid phone no.');
            $('.quoteformerror_phone').show();
            return false;
        }
        else if (validateEmail(email) == false) {
            $('.quoteformerror_name').html('');
            $('.quoteformerror_name').hide();
            $('.quoteformerror_phone').html('');
            $('.quoteformerror_phone').hide();
            $('.quoteformerror_email').html('Please enter a valid email.');
            $('.quoteformerror_email').show();
            return false;
        }
        $('.quoteformerror_name').html('');
        $('.quoteformerror_name').hide();
        $('.quoteformerror_phone').html('');
        $('.quoteformerror_phone').hide();
        $('.quoteformerror_email').html();
        $('.quoteformerror_email').hide();
        stepsNext($(this));
    });
    $('#fivestepquoteform').click(function () {
        stepsNext($(this));
    });
    $('#sixstepquoteform').click(function () {
        stepsNext($(this));
    });
    $(".previous").click(function () {
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({ opacity: 0 }, {
            step: function (now) {
                // for making fielset appear animation
                opacity = 1 - now;
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({ 'opacity': opacity });
            },
            duration: 500
        });
        setProgressBar(--current);
    });
    function stepsNext(this_data) {
        current_fs = $(this_data).parent();
        next_fs = $(this_data).parent().next();
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        next_fs.show();
        current_fs.animate({ opacity: 0 }, {
            step: function (now) {
                // for making fielset appear animation
                opacity = 1 - now;
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({ 'opacity': opacity });
            },
            duration: 500
        });
        setProgressBar(++current);
    }
    function setProgressBar(curStep) {
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width", percent + "%")
    }
    $(".submit").click(function () {
        return false;
    })
    function validatePhone(phone) {
        var filter = /^\d*(?:\.\d{1,2})?$/;
        if (filter.test(phone)) {
            if (phone.length == 10) {
                return true;
            } else {
                return false;
            }
        }
        else {
            return false;
        }
    }
    function validateEmail(email) {
        var testEmail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (testEmail.test(email)) {
            return true;
        }
        else {
            return false;
        }
    }

});
// Step Form End
function gettimeslotbookingform(type) {
    if (type) {
        $('.loader-off.loaderWrap').css('opacity', '1');
        $('.loader-off.loaderWrap').css('visibility', 'visible');
        $.ajax({
            url: "https://www.doctorvahaan.com/get-time-slot/" + type,
            method: "GET",
            dataType: "json",
            success: function (responce) {
                if (responce.data.status == 'success') {
                    $('#serviceSlotArea').html(responce.data.html);
                    $('.loader-off.loaderWrap').css('opacity', '0');
                    $('.loader-off.loaderWrap').css('visibility', 'hidden');
                } else {
                    $('.loader-off.loaderWrap').css('opacity', '0');
                    $('.loader-off.loaderWrap').css('visibility', 'hidden');
                }
            }
        });
    }
    else {
        $('#serviceSlotArea').html('');
    }
}
progressbarLoadFunction();
function refreshCaptcha() {
    $.ajax({
        type: 'GET',
        url: 'https://www.doctorvahaan.com/refresh_captcha',
        success: function (data) {
            $(".captcha span").html(data.captcha);
        }
    });
}
function getVehicleCarType(val) {
    if (val) {
        $('.loader-off.loaderWrap').css('opacity', '1');
        $('.loader-off.loaderWrap').css('visibility', 'visible');
        $.ajax({
            url: "https://www.doctorvahaan.com/get-vehicle-car-type/" + val,
            method: "GET",
            dataType: "json",
            success: function (responce) {
                if (responce.data.status == 'success') {
                    $('#typesOfcarAreaPopup').html(responce.data.html);
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
        $('#serviceSlotArea').html('');
    }
}
getVehicleCarType($('input[name="vehicle_type"]:checked').val());
function popuponopen() {
    next_fs = $("fieldset:first");
    $("fieldset").animate({ opacity: 0 }, {
        step: function (now) {
            // for making fielset appear animation
            opacity = 1 - now;
            $("fieldset").css({
                'display': 'none',
                'position': 'relative'
            });
            next_fs.css({ 'opacity': opacity, 'display': 'block' });
        },
        duration: 500
    });
    $('#msform')[0].reset();
    next_fs.show();

    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

    progressbarLoadFunction();
    $('select[name="city"]').prop('selectedIndex', 0).trigger('change');
    $('select[name="booking_type"]').prop('selectedIndex', 0).trigger('change');
    getVehicleCarType($('input[name="vehicle_type"]:checked').val());
    $('#exampleModal').modal('show');
}