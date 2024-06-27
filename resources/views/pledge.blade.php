@extends('layouts.template_page')

@section('content')

<section class="pledge-banner">

    <img src="./assets/images/pledge-banner.jpg" alt="" class="mobilenone" />
    <img src="./assets/images/pledge-mobile.png" alt="" class="mobileshow" />

</section>

<section class="pledge-form">

    <div class="mcontainer">

        <div class="w90 margin-center pledge-flex">

            <div class="pledge-form-content">

                <div class="common-headings center-text margin-center">

                    <p class="common-title">

                        <span>Join us in making a <br />difference for our planet! </span>

                    </p>

                    <p class="common-subtext">

                        Take the pledge to embrace a greener lifestyle, including responsible e-waste management, and contribute to a sustainable future. Together, we can conserve resources by recycling electronic devices and protect our environment for generations to come. Let's commit to positive action everyday!

                    </p>

                </div>

            </div>



            <div class="pledge-form">

                <img src="./assets/images/pledge-form.png" alt="" />

                <form name="pledgeForm" id="pledgeForm" method="post" action="<?php echo url('save-pledge-form'); ?>">

                    @csrf
                    <div class="form-group">

                        <input type="text" id="name" name="name" placeholder="Full Name*" onkeypress="return isAlphaKey(event)" onKeyUp="Remove('pledgeForm','name')" maxlength="50" />

                        <div class="error" id="error_name"></div>
                    </div>


                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Email ID*" onKeyUp="Remove('pledgeForm','email')" maxlength="50" />

                        <div class="error" id="error_email"></div>
                    </div>


                    <div class="form-group">
                        <input type="text" id="institute" name="institute" placeholder="Institute Name" onKeyUp="Remove('pledgeForm','institute')" />
                        <span data-toggle="tooltip" data-placement="top" title="Only, if you are student"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M8 10.8V8M8 5.2H8.007M15 8C15 11.866 11.866 15 8 15C4.13401 15 1 11.866 1 8C1 4.13401 4.13401 1 8 1C11.866 1 15 4.13401 15 8Z" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg></span>

                        <div class="error" id="error_institute"></div>
                    </div>

                    <div class="form-group">
                        <select id="gender" name="gender" onchange="Remove('pledgeForm','gender')">

                            <option value="">Gender*</option>

                            <option value="Male">Male</option>

                            <option value="Female">Female</option>

                        </select>

                        <div class="error" id="error_gender"></div>
                    </div>


                    <div class="form-group">
                        <select name="state" id="state" onchange="Remove('pledgeForm','state')">

                            <option value="">Select State*</option>

                            @foreach ($states as $row)

                            <option value="{{ ucfirst(strtolower($row->province_title)) }}" data-prvncid="{{ $row->province_id }}">

                                {{ ucfirst(strtolower($row->province_title)) }}

                            </option>

                            @endforeach

                        </select>

                        <div class="error" id="error_state"></div>

                    </div>


                    <div class="form-group">
                        <select name="city" id="city" onchange="Remove('pledgeForm','city')">

                            <option value="">Select City*</option>

                        </select>

                        <div class="error" id="error_city"></div>
                    </div>


                    <div class="w-100">
                        <label>

                            <input type="checkbox" name="agree_checkbox" id="agree_checkbox" />

                            I agree to submit my information to Generation Green Campaign.

                        </label>

                        <div class="error" id="error_agree_checkbox"></div>
                    </div>

                    <div class="captcha">
                        <div class="input g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_SITEKEY')}}"></div>
                    </div>

                    <div class="error" id="error_recaptcha"></div>

                    <button class="common-btn" id="submit-btn-pledgeForm">Pledge</button>

                    <div class="message-box message-box-pledgeForm" style="display:none;"></div>

                </form>

            </div>

        </div>

    </div>

</section>

<section class="know-boxes">

    <div class="mcontainer">

        <div class="w90 margin-center">

            <div class="common-headings center-text margin-center">

                <p class="common-title">

                    Did you know?

                </p>

            </div>

            <div class="know-box-container">

                <div class="know-box" style="background: #0C8CAF;">

                    <p>

                        Globally around <span>50 million</span> tons of electronic waste is produced each year!

                    </p>

                </div>

                <div class="know-box" style="background: #C8A558;">

                    <p>

                        India is the <span>3rd Largest</span> producer of e-waste in the world.

                    </p>

                </div>

                <div class="know-box" style="background: #582F3B;">

                    <p>

                        Approximately

                        <span>2 Million </span>

                        tons of e-waste are generated annually.

                    </p>

                </div>

                <div class="know-box" style="background: #5273A7;">

                    <p>

                        <span>E-waste</span> exposure leads to a number of severe diseases

                    </p>

                </div>

            </div>

            <div class="common-headings center-text margin-center commonbelow">

                <!-- <p class="common-subtext">

                    It is up to us to take action and protect people and the planet from the harmful effects of e-waste.

                </p> -->

            </div>

        </div>

    </div>

</section>

<section class="steps">

    <div class="mcontainer">

        <div class="w90 margin-center">

            <div class="pledge-title">

                <p class="pledge-m-title">

                    Pledge to be a Generation Green Champion and protect our environment through simple everyday action.

                </p>

                <p>

                    As a Generation Green Champion, I pledge to:

                </p>

            </div>

            <div class="pledge-steps">

                <div class="step-box">

                    <img src="./assets/images/step1.png" alt="" class="img-fluid" />

                    <div class="pledge-ste-text">

                        <div class="ct">1</div>

                        <p>

                            I shall reduce energy use with efficient lightbulbs and by turning off unused electronics

                        </p>

                    </div>

                </div>

                <div class="step-box">

                    <img src="./assets/images/step2.png" alt="" class="img-fluid" />

                    <div class="pledge-ste-text">

                        <div class="ct">2</div>

                        <p>

                            I shall reuse, recycle, and repurpose electronics by selling or trading old items through authorised refurbishers.

                        </p>

                    </div>

                </div>

                <div class="step-box">

                    <img src="./assets/images/step3.png" alt="" class="img-fluid" />

                    <div class="pledge-ste-text">

                        <div class="ct">3</div>

                        <p>

                            I shall commit to disposing of e-waste through certified e-waste recyclers.

                        </p>

                    </div>

                </div>

                <div class="step-box">

                    <img src="./assets/images/step4.png" alt="" class="img-fluid" />

                    <div class="pledge-ste-text">

                        <div class="ct">4</div>

                        <p>

                            I shall properly discard hazardous materials and raise awareness through campaigns and seminars.

                        </p>

                    </div>

                </div>

                <div class="step-box">

                    <img src="./assets/images/step5.png" alt="" class="img-fluid" />

                    <div class="pledge-ste-text">

                        <div class="ct">5</div>

                        <p>

                            I will actively participate in e-waste collection drives organized by local authorities or community groups

                        </p>

                    </div>

                </div>

                <div class="step-box">

                    <img src="./assets/images/step6.png" alt="" class="img-fluid" />

                    <div class="pledge-ste-text">

                        <div class="ct">6</div>

                        <p>

                            I will spread awareness among my friends and family about the importance of e-waste management and recycling.

                        </p>

                    </div>

                </div>



            </div>

        </div>

    </div>

</section>

<section class="pledge-bottom">

    <div class="container">

        <h6>I, ___________________, pledge to reduce waste, conserve energy, and promote sustainability to protect our environment.</h6>



    </div>

    <div class="pledge-bottomimg">

        <img src="./assets/images/pledge-bottom.png" alt="" class="w-100">

    </div>

</section>

@endsection

@push('footer_script')

<script type="text/javascript">
    jQuery(function() {



        $('#state').on('change', function() {

            $('#error_state:visible').hide();

            var state_id = $(this).find(':selected').data('prvncid');

            $.ajax({

                url: "{{ url('/get-city-by-state') }}",

                type: "GET",

                data: {

                    state_id: state_id,

                    _token: '{{ csrf_token() }}'

                },

                dataType: 'json',

                success: function(data) {

                    // remove old options #city

                    $('#city').find('option').remove().end();

                    $('#city').append($('<option>', {

                        value: '',

                        text: 'Select City*'

                    }));

                    $.each(data, function(key, value) {

                        $('#city').append($('<option>', {

                            value: value.name,

                            text: value.name

                        }));

                    });



                }

            });

        });



        jQuery("#pledgeForm").on("submit", function(r) {

            var form_id = "pledgeForm";

            jQuery(".message-box-" + form_id).hide();

            jQuery("#" + form_id + " .error").html(" ");

            var s = jQuery(this);

            r.preventDefault();

            $.ajaxSetup({

                headers: {

                    "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr("content")

                }

            });

            var validation_field = '';

            var name = jQuery("#" + form_id + " #name").val().trim();

            if (name == '') {

                jQuery("#" + form_id + " #error_" + "name").html("Please enter name").show();
                setTimeout(function() {
                    jQuery("#" + form_id + " #error_" + "name").hide();
                }, 5000);

                if (validation_field == '') {

                    validation_field = 'name';

                }

            }

            var email = jQuery("#" + form_id + " #email").val();

            if (email == '') {

                jQuery("#" + form_id + " #error_" + "email").html("Please enter email").show();
                setTimeout(function() {
                    jQuery("#" + form_id + " #error_" + "email").hide();
                }, 5000);

                if (validation_field == '') {

                    validation_field = 'email';

                }

            }

            if (email && IsEmail(email) == false) {

                jQuery("#" + form_id + " #error_" + "email").html("Please enter valid email address")

                    .show();
                setTimeout(function() {
                    jQuery("#" + form_id + " #error_" + "email").hide();
                }, 5000);

                if (validation_field == '') {

                    validation_field = 'email';

                }

            }



            // var institute = jQuery("#" + form_id + " #institute").val();

            // if (institute == '') {

            //     jQuery("#" + form_id + " #error_" + "institute").html("Please enter institute name").show();

            //     if (validation_field == '') {

            //         validation_field = 'institute';

            //     }

            // }





            var gender = jQuery("#" + form_id + " #gender").val();
            setTimeout(function() {
                jQuery("#" + form_id + " #error_" + "gender").hide();
            }, 5000);

            if (gender == '') {

                jQuery("#" + form_id + " #error_" + "gender").html("Please select gender").show();

                if (validation_field == '') {

                    validation_field = 'gender';

                }

            }



            var state = jQuery("#" + form_id + " #state").val();

            if (state == '') {

                jQuery("#" + form_id + " #error_" + "state").html("Please select state").show();
                setTimeout(function() {
                    jQuery("#" + form_id + " #error_" + "state").hide();
                }, 5000);

                if (validation_field == '') {

                    validation_field = 'state';

                }

            }

            var city = jQuery("#" + form_id + " #city").val();

            if (city == '') {

                jQuery("#" + form_id + " #error_" + "city").html("Please select city").show();
                setTimeout(function() {
                    jQuery("#" + form_id + " #error_" + "city").hide();
                }, 5000);

                if (validation_field == '') {

                    validation_field = 'city';

                }

            }



            if (!$("#agree_checkbox").prop("checked")) {

                jQuery("#" + form_id + " #error_" + "agree_checkbox").html("Can't proceed as you didn't agree to the terms!").show();
                setTimeout(function() {
                    jQuery("#" + form_id + " #error_" + "agree_checkbox").hide();
                }, 5000);
                if (validation_field == '') {

                    validation_field = 'agree_checkbox';

                }

            }



            if (validation_field) {

                jQuery("#" + form_id + " #" + validation_field).focus();

                return false;

            }

            var submit_btn_text = jQuery("#submit-btn-" + form_id).val();

            //alert(submit_btn_text);

            var formData = new FormData(this);

            jQuery.ajax({

                url: jQuery("#" + form_id).attr("action"),

                type: 'POST',

                data: new FormData(this),

                contentType: false,

                cache: false,

                processData: false,

                beforeSend: function() {

                    jQuery("#submit-btn-" + form_id).prop("disabled", true);;

                    jQuery("#submit-btn-" + form_id).val('Please wait...');

                },

                success: function(response) {

                    //jsonObj = JSON.parse(response);

                    if (response.status == 1) {

                        const encodedName = encodeURIComponent(name);
                        const encodeEmail = encodeURIComponent(email)
                        jQuery(".message-box-" + form_id).show();

                        jQuery(".message-box-" + form_id).addClass("success");

                        jQuery(".message-box-" + form_id).removeClass("error");

                        jQuery(".message-box-pledgeForm").html(response.message);
                        setTimeout(function() {

                            jQuery(".message-box-pledgeForm").html('');

                        }, 5000);
                        jQuery("#" + form_id).trigger("reset");

                        window.location.href = base_url + `certificate-download?name=${encodedName}&email=${encodeEmail}`;
                        grecaptcha.reset();


                    } else {

                        if (response.message == 'NoAge') {

                            $('.oopsPopup ').fadeIn();

                            $("body").addClass("bodyhidden");

                        } else {

                            jQuery(".message-box-" + form_id).show();

                            jQuery(".message-box-" + form_id).removeClass("success");

                            jQuery(".message-box-" + form_id).addClass("error");

                            jQuery(".message-box-pledgeForm").html(response.message);

                        }

                    }
                    grecaptcha.reset();
                },

                error: function(e) {

                    var r = JSON.parse(e.responseText);

                    var validation_field = Object.values(r)[1];

                    jQuery.each(validation_field, function(e, a) {

                        jQuery("#" + form_id + " #error_" + e).html(a);

                        jQuery("#" + form_id + " #" + e).addClass('fld-error');

                        jQuery("#" + form_id + " #" + e).focus();

                    })

                },

                complete: function() {

                    jQuery("#submit-btn-" + form_id).removeAttr("disabled"), jQuery(

                        "#submit-btn-" + form_id).val(submit_btn_text);

                }

            });

            //grecaptcha.reset();

            return false;

        });

    });

    function resetRecaptcha() {
        if (typeof grecaptcha !== 'undefined' && grecaptcha.reset) {
            grecaptcha.reset();
        } else {
            console.error('grecaptcha is not defined or reset function is not available.');
        }
    }
</script>
<script type="text/javascript">
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

@endpush