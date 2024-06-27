@extends('layouts.template_page')

@section('content')

<section class="pledge-banner">

    <img src="./assets/images/registration-banner.jpg" alt=""  class="mobilenone" />
    <img src="./assets/images/register-mobile.jpg" alt="" class="mobileshow"/>

</section>

<section class="registrationsec">

    <div class="mcontainer">

        <div class="w90 margin-center">

            <div class="pledge-form-content">

                <div class="common-headings center-text margin-center">

                    <p class="common-title">Register Now</p>

                    <p class="common-subtext">

                        Gear up for the ultimate eco-adventure with the <br><b>Gen G Campaign 2024!</b>

                    </p>

                </div>

            </div>



            <div class="registrationtab">

                <ul class="nav nav-tabs" id="myTab" role="tablist">

                    <li class="nav-item" role="presentation">

                        <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">Intern</button>

                    </li>

                    <li class="nav-item" role="presentation">

                        <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">Institute/School</button>

                    </li>

                </ul>

                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">

                        <div class="interndetail">

                            <h3><strong>Make Your Mark!</strong></h3>

                            <h3>Register Now for the Internship and contribute to bring the change!</h3>



                            <p>Welcome to our internship program! We're excited to have you on board. To officially

                                register, please head over to the AICTE website using the link below.</p>

                            <a href="" target="_blank">Website Link</a>

                            <p>Follow the instructions to complete your registration and start your journey with us.</p>



                        </div>

                    </div>

                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">

                        <div class="institutedetail">

                            <h3>Join the Generation Green Campaign To<br>

                                Build A Cleaner And Healthier India.</h3>

                            <p>Register Now For Exciting Challenges</p>



                            <div class="registrationform">

                                <img src="assets/images/register-form.png" alt="" class="w-100">

                                <form name="registerForm" id="registerForm" method="post" action="<?php echo url('save-registration-form'); ?>">

                                    <div class="row">

                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">

                                            <input type="text" id="institute_name" name="institute_name" placeholder="Name*(Institute/School)" onkeypress="return isAlphaKey(event)" onKeyUp="Remove('registerForm','institute_name')" maxlength="50" />

                                            <div class="error" id="error_institute_name"></div>

                                        </div>



                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">

                                            <input type="text" id="institute_address" name="institute_address" placeholder="Address*" onKeyUp="Remove('registerForm','institute_address')" />

                                            <div class="error" id="error_institute_address"></div>

                                        </div>

                                    </div>



                                    <div class="row">

                                        <h4>Contact Details</h4>

                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">

                                            <input type="text" id="institute_mobile" name="institute_mobile" maxlength="10" placeholder="Phone no*" onkeypress="return isNumberKey(event)" onKeyUp="Remove('registerForm','institute_mobile')" />

                                            <div class="error" id="error_institute_mobile"></div>

                                        </div>



                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">

                                            <input type="text" id="institute_email" name="institute_email" placeholder="Email ID*" onKeyUp="Remove('registerForm','institute_email')" />

                                            <div class="error" id="error_institute_email"></div>

                                        </div>



                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">

                                            <input type="text" id="total_student" name="total_student" maxlength="6" placeholder="Number of students in the school*" onkeypress="return isNumberKey(event)" onKeyUp="Remove('registerForm','total_student')" />

                                            <div class="error" id="error_total_student"></div>

                                        </div>

                                    </div>



                                    <div class="row">

                                        <h4>Principal Details</h4>

                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">

                                            <input type="text" id="principal_name" name="principal_name" placeholder="Name*" onKeyUp="Remove('registerForm','principal_name')" onkeypress="return isAlphaKey(event)" maxlength="50" />

                                            <div class="error" id="error_principal_name"></div>

                                        </div>



                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">

                                            <input type="text" id="principal_mobile" onkeypress="return isNumberKey(event)" maxlength="10" name="principal_mobile" placeholder="Contact*" onKeyUp="Remove('registerForm','principal_mobile')" />

                                            <div class="error" id="error_principal_mobile"></div>

                                        </div>



                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">

                                            <input type="text" id="principal_email" name="principal_email" placeholder="Email ID*" onKeyUp="Remove('registerForm','principal_email')" />

                                            <div class="error" id="error_principal_email"></div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <h4>Teacher Co-ordinator-1</h4>

                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">

                                            <input type="text" id="teacher_name1" name="teacher_name1" placeholder="Name*" onKeyUp="Remove('registerForm','teacher_name1')" onkeypress="return isAlphaKey(event)" maxlength="50" />

                                            <div class="error" id="error_teacher_name1"></div>

                                        </div>



                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">

                                            <input type="text" id="teacher_mobile1" maxlength="10" onkeypress="return isNumberKey(event)" name="teacher_mobile1" placeholder="Contact*" onKeyUp="Remove('registerForm','teacher_mobile1')" />

                                            <div class="error" id="error_teacher_mobile1"></div>

                                        </div>



                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">

                                            <input type="text" id="teacher_email1" name="teacher_email1" placeholder="Email ID*" onKeyUp="Remove('registerForm','teacher_email1')" />

                                            <div class="error" id="error_teacher_email1"></div>

                                        </div>

                                    </div>



                                    <div class="row">

                                        <h4>Teacher Co-ordinator-2</h4>

                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">

                                            <input type="text" id="teacher_name2" name="teacher_name2" placeholder="Name*" onKeyUp="Remove('registerForm','teacher_name2')" onkeypress="return isAlphaKey(event)" maxlength="50" />

                                            <div class="error" id="error_teacher_name2"></div>

                                        </div>



                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">

                                            <input type="text" id="teacher_mobile2" maxlength="10" onkeypress="return isNumberKey(event)" name="teacher_mobile2" placeholder="Contact*" onKeyUp="Remove('registerForm','teacher_mobile2')" />

                                            <div class="error" id="error_teacher_mobile2"></div>

                                        </div>



                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">

                                            <input type="text" id="teacher_email2" name="teacher_email2" placeholder="Email ID*" onKeyUp="Remove('registerForm','teacher_email2')" />

                                            <div class="error" id="error_teacher_email2"></div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                                            <div class="form-check mt-4 p-0 mb-3">

                                                <input type="checkbox" class="" name="agree_checkbox" id="agree_checkbox">

                                                <label class="form-check-label" for="agree_checkbox">I agree to submit my

                                                    information to Generation Green Campaign.</label>

                                                <div class="error" id="error_agree_checkbox"></div>

                                            </div>

                                        </div>


                                        <div class="captcha">
                                            <div class="input g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_SITEKEY')}}"></div>
                                        </div>

                                        <div class="error" id="error_recaptcha"></div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-start">

                                            <input type="submit" value="Submit" id="submit-btn-registerForm" />

                                        </div>

                                        <div class="message-box message-box-registerForm" style="display:none;"></div>

                                    </div>

                                </form>



                            </div>



                        </div>

                    </div>



                </div>

            </div>



        </div>

    </div>

</section>

@endsection

@push('footer_script')

<script type="text/javascript">
    jQuery(function() {

        jQuery("#registerForm").on("submit", function(r) {

            var form_id = "registerForm";

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

            var institute_name = jQuery("#" + form_id + " #institute_name").val().trim();

            if (institute_name == '') {

                jQuery("#" + form_id + " #error_" + "institute_name").html(

                    "Please enter institute name").show();

                setTimeout(function() {

                    jQuery("#" + form_id + " #error_" + "institute_name").hide();

                }, 5000);

                if (validation_field == '') {

                    validation_field = 'institute_name';

                }

            }

            var institute_address = jQuery("#" + form_id + " #institute_address").val().trim();

            if (institute_address == '') {

                jQuery("#" + form_id + " #error_" + "institute_address").html(

                    "Please enter institute address").show();

                setTimeout(function() {

                    jQuery("#" + form_id + " #error_" + "institute_address").hide();

                }, 5000);

                if (validation_field == '') {

                    validation_field = 'institute_address';

                }

            }



            var institute_mobile = jQuery("#" + form_id + " #institute_mobile").val().trim();

            if (institute_mobile == '') {

                jQuery("#" + form_id + " #error_" + "institute_mobile").html(

                    "Please enter institute mobile").show();

                setTimeout(function() {

                    jQuery("#" + form_id + " #error_" + "institute_mobile").hide();

                }, 5000);

                if (validation_field == '') {

                    validation_field = 'institute_mobile';

                }

            }





            var institute_email = jQuery("#" + form_id + " #institute_email").val().trim();;

            if (institute_email == '') {

                jQuery("#" + form_id + " #error_" + "institute_email").html(

                    "Please enter institute_email").show();

                setTimeout(function() {

                    jQuery("#" + form_id + " #error_" + "institute_email").hide();

                }, 5000);

                if (validation_field == '') {

                    validation_field = 'institute_email';

                }

            }

            if (institute_email && IsEmail(institute_email) == false) {

                jQuery("#" + form_id + " #error_" + "institute_email").html(

                        "Please enter valid institute email ")

                    .show();

                setTimeout(function() {

                    jQuery("#" + form_id + " #error_" + "institute_email").hide();

                }, 5000);

                if (validation_field == '') {

                    validation_field = 'institute_email';

                }

            }

            var total_student = jQuery("#" + form_id + " #total_student").val().trim();

            if (total_student == '') {

                jQuery("#" + form_id + " #error_" + "total_student").html("Please enter	total student ")

                    .show();

                setTimeout(function() {

                    jQuery("#" + form_id + " #error_" + "total_student").hide();

                }, 5000);

                if (validation_field == '') {

                    validation_field = 'total_student';

                }

            }

            var principal_name = jQuery("#" + form_id + " #principal_name").val().trim();

            if (principal_name == '') {

                jQuery("#" + form_id + " #error_" + "principal_name").html(

                    "Please enter principal name ").show();

                setTimeout(function() {

                    jQuery("#" + form_id + " #error_" + "principal_name").hide();

                }, 5000);

                if (validation_field == '') {

                    validation_field = 'principal_name';

                }

            }

            var principal_mobile = jQuery("#" + form_id + " #principal_mobile").val().trim();

            if (principal_mobile == '') {

                jQuery("#" + form_id + " #error_" + "principal_mobile").html(

                    "Please enter principal mobile no.").show();

                setTimeout(function() {

                    jQuery("#" + form_id + " #error_" + "principal_mobile").hide();

                }, 5000);

                if (validation_field == '') {

                    validation_field = 'principal_mobile';

                }

            }

            if (principal_mobile && IsMobile(principal_mobile) == false) {

                jQuery("#" + form_id + " #error_" + "principal_mobile").html(

                        "Please enter valid principal mobile no.")

                    .show();

                setTimeout(function() {

                    jQuery("#" + form_id + " #error_" + "principal_mobile").hide();

                }, 5000);

                if (validation_field == '') {

                    validation_field = 'principal_mobile';

                }

            }

            var principal_email = jQuery("#" + form_id + " #principal_email").val().trim();

            if (principal_email == '') {

                jQuery("#" + form_id + " #error_" + "principal_email").html(

                    "Please enter principal email").show();

                setTimeout(function() {

                    jQuery("#" + form_id + " #error_" + "principal_email").hide();

                }, 5000);

                if (validation_field == '') {

                    validation_field = 'principal_email';

                }

            }

            if (principal_email && IsEmail(principal_email) == false) {

                jQuery("#" + form_id + " #error_" + "principal_email").html(

                        "Please enter valid principal email ")

                    .show();

                setTimeout(function() {

                    jQuery("#" + form_id + " #error_" + "principal_email").hide();

                }, 5000);

                if (validation_field == '') {

                    validation_field = 'principal_email';

                }

            }

            var teacher_name1 = jQuery("#" + form_id + " #teacher_name1").val().trim();

            if (teacher_name1 == '') {

                jQuery("#" + form_id + " #error_" + "teacher_name1").html(

                    "Please enter teacher name").show();

                setTimeout(function() {

                    jQuery("#" + form_id + " #error_" + "teacher_name1").hide();

                }, 5000);

                if (validation_field == '') {

                    validation_field = 'teacher_name1';

                }

            }

            var teacher_mobile1 = jQuery("#" + form_id + " #teacher_mobile1").val().trim();

            if (teacher_mobile1 == '') {

                jQuery("#" + form_id + " #error_" + "teacher_mobile1").html(

                    "Please enter teacher mobile no.").show();

                setTimeout(function() {

                    jQuery("#" + form_id + " #error_" + "teacher_mobile1").hide();

                }, 5000);

                if (validation_field == '') {

                    validation_field = 'teacher_mobile1';

                }

            }

            if (teacher_mobile1 && IsMobile(teacher_mobile1) == false) {

                jQuery("#" + form_id + " #error_" + "teacher_mobile1").html(

                        "Please enter valid teacher mobile no.")

                    .show();

                setTimeout(function() {

                    jQuery("#" + form_id + " #error_" + "teacher_mobile1").hide();

                }, 5000);

                if (validation_field == '') {

                    validation_field = 'teacher_mobile1';

                }

            }

            var teacher_email1 = jQuery("#" + form_id + " #teacher_email1").val().trim();

            if (teacher_email1 == '') {

                jQuery("#" + form_id + " #error_" + "teacher_email1").html(

                    "Please enter teacher email").show();

                setTimeout(function() {

                    jQuery("#" + form_id + " #error_" + "teacher_email1").hide();

                }, 5000);

                if (validation_field == '') {

                    validation_field = 'teacher_email1';

                }

            }

            if (teacher_email1 && IsEmail(teacher_email1) == false) {

                jQuery("#" + form_id + " #error_" + "teacher_email1").html(

                        "Please enter valid teacher email ")

                    .show();

                setTimeout(function() {

                    jQuery("#" + form_id + " #error_" + "teacher_email1").hide();

                }, 5000);

                if (validation_field == '') {

                    validation_field = 'teacher_email1';

                }

            }

            var teacher_name2 = jQuery("#" + form_id + " #teacher_name2").val().trim();

            if (teacher_name2 == '') {

                jQuery("#" + form_id + " #error_" + "teacher_name2").html(

                    "Please enter teacher name").show();

                setTimeout(function() {

                    jQuery("#" + form_id + " #error_" + "teacher_name2").hide();

                }, 5000);

                if (validation_field == '') {

                    validation_field = 'teacher_name2';

                }

            }

            var teacher_mobile2 = jQuery("#" + form_id + " #teacher_mobile2").val().trim();

            if (teacher_mobile2 == '') {

                jQuery("#" + form_id + " #error_" + "teacher_mobile2").html(

                    "Please enter teacher mobile no.").show();

                setTimeout(function() {

                    jQuery("#" + form_id + " #error_" + "teacher_mobile2").hide();

                }, 5000);

                if (validation_field == '') {

                    validation_field = 'teacher_mobile2';

                }

            }

            if (teacher_mobile2 && IsMobile(teacher_mobile2) == false) {

                jQuery("#" + form_id + " #error_" + "teacher_mobile2").html(

                        "Please enter valid teacher mobile no.")

                    .show();

                setTimeout(function() {

                    jQuery("#" + form_id + " #error_" + "teacher_mobile2").hide();

                }, 5000);

                if (validation_field == '') {

                    validation_field = 'teacher_mobile2';

                }

            }

            var teacher_email2 = jQuery("#" + form_id + " #teacher_email2").val().trim();

            if (teacher_email2 == '') {

                jQuery("#" + form_id + " #error_" + "teacher_email2").html(

                    "Please enter teacher email").show();

                setTimeout(function() {

                    jQuery("#" + form_id + " #error_" + "teacher_email2").hide();

                }, 5000);

                if (validation_field == '') {

                    validation_field = 'teacher_email2';

                }

            }

            if (teacher_email2 && IsEmail(teacher_email2) == false) {

                jQuery("#" + form_id + " #error_" + "teacher_email2").html(

                        "Please enter valid teacher email ")

                    .show();

                setTimeout(function() {

                    jQuery("#" + form_id + " #error_" + "teacher_email2").hide();

                }, 5000);

                if (validation_field == '') {

                    validation_field = 'teacher_email2';

                }

            }

            if (!$("#agree_checkbox").prop("checked")) {

                jQuery("#" + form_id + " #error_" + "agree_checkbox").html(

                    "Can't proceed as you didn't agree to the terms!").show();

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

                        //alert("a");

                        jQuery(".message-box-" + form_id).show();

                        jQuery(".message-box-" + form_id).addClass("success");

                        jQuery(".message-box-" + form_id).removeClass("error");

                        jQuery(".message-box-registerForm").html(response.message);
                        setTimeout(function() {

                            jQuery(".message-box-registerForm").html('');

                        }, 5000);
                        // window.location.href = base_url + "thank-you";

                        jQuery("#" + form_id).trigger("reset");


                    } else {

                        if (response.message == 'NoAge') {

                            $('.oopsPopup ').fadeIn();

                            $("body").addClass("bodyhidden");

                        } else {

                            jQuery(".message-box-" + form_id).show();

                            jQuery(".message-box-" + form_id).removeClass("success");

                            jQuery(".message-box-" + form_id).addClass("error");

                            jQuery(".message-box-registerForm").html(response.message);

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
                    // grecaptcha.reset();
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

@endpush