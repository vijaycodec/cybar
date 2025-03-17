@extends('frontend.layouts.app')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/contact.css') }}">

@section('content')

    <body class="static-menu">
        <!-- Header start -->
        @include('frontend.layouts.header')
        <section class="sec_ban" id="resources-banner">
            <div class="home-ban">
                <div class="rs-img">
                    <img src="assets/images/contact.png" class="img-fluid rs-banner" alt="home banner">
                </div>
                <div class="over-h2">
                    <h2></h2>
                    <p></p>
                </div>
            </div>
        </section>
        <!-- Header end -->
        <!-- breadcrumbs -->

        <!-- breadcrumbs -->
        <!-- main section-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>
                        <div class="page_head">Contact Us</div>
                    </h1>
                </div>
            </div>


            <div class="con_display">

                <div class="row">

                    <div class="col-md-7">
                        <div class="con_left">
                            <ul>
                                <li>
                                    <div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="AddressMain">
                                                    <div class="CountryMapdiv">
                                                        <img src="assets/images/ind_flag.svg" alt="ind_flag" width="45"
                                                            height="30" />
                                                    </div>
                                                    <div class="AddressDiv">
                                                        <div class="CountryName">
                                                            <h2>Delhi Head Office</h2>
                                                        </div>

                                                        <div class="CompanyAddress">
                                                            <p><b>Codec Networks Pvt. Ltd.</b></p>
                                                            <p class="short">
                                                                <span>5th Floor, Office No. 507, </span>
                                                                <span>New Delhi House, </span>
                                                                <span>Near by Barakhamba Metro station 6, </span>
                                                                <span>New Delhi, Delhi - 110001 (India)</span>
                                                            </p>
                                                        </div>
                                                        <div class="CompanyContactDet">
                                                            <p>
                                                                <span>Phone</span>
                                                                <a href="tel:+919971676124"> +91 9971676124</a>
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <!--contact us form-->
                        <style type="text/css">
                            .coun_flag_form {
                                display: block;
                            }

                            #hmx_country {
                                text-indent: 35px;
                            }
                        </style>
                        <div class="con_form">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.995285398184!2d77.22301139999999!3d28.629903399999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfddfdd6c4c85%3A0xfb0032ea09ed20e7!2sCodec%20Networks!5e0!3m2!1sen!2sin!4v1741585675051!5m2!1sen!2sin"
                                width="400" height="275" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <section class="sec_ban" id="resources-banner" style="margin-top: 20px; margin-bottom: 20px;">
            <div class="home-ban">
                <div class="rs-img">
                    <img src="assets/images/contact2.png" class="img-fluid rs-banner" alt="home banner">
                </div>
                <div class="over-h2">
                    <h2></h2>
                    <p></p>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="con_display">

                <div class="row">

                    <div class="col-md-7">
                        <div class="con_left">
                            <ul>
                                <li>
                                    <div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="AddressMain">
                                                    <div class="CountryMapdiv">
                                                        <img src="assets/images/ind_flag.svg" alt="ind_flag" width="45"
                                                            height="30" />
                                                    </div>
                                                    <div class="AddressDiv">
                                                        <div class="CountryName">
                                                            <h2>Gurugram Office</h2>
                                                        </div>

                                                        <div class="CompanyAddress">
                                                            <p><b>Codec Networks Pvt. Ltd.</b></p>
                                                            <p class="short">
                                                                <span>C-217, Tower C, </span>
                                                                <span>Nirvana Courtyard Market, </span>
                                                                <span>265, Nirvana Country, </span>
                                                                <span>Sector 50, Gurugram, Haryana 122018 (India)</span>
                                                            </p>
                                                        </div>
                                                        <div class="CompanyContactDet">
                                                            <p>
                                                                <span>Phone</span>
                                                                <a href="tel:+919971676124"> +919971676124</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </li>
                                {{-- <li>
          <div class="con_box con_mail">
            <div class="add_head">Drop us a query</div>
            <div class="add_det"><a href="mailto:mktg@codecnetworks.com">mktg@codecnetworks.com</a></div>
          </div>
          </li>
          <li>
          <div class="con_box con_whatsapp">
            <div class="add_head">Chat with Us</div>
            <div class="add_det"><a href="https://wa.me/919971676124">+91 9971676124</a></div>
          </div>
          </li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <!--contact us form-->
                        <style type="text/css">
                            .coun_flag_form {
                                display: block;
                            }

                            #hmx_country {
                                text-indent: 35px;
                            }
                        </style>
                        <div class="con_form">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3509.1810414292668!2d77.0662874!3d28.413793599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d23a31e63d83b%3A0x1235445b3de3e4bf!2sNirvana%20Courtyard%20Market!5e0!3m2!1sen!2sin!4v1741596460607!5m2!1sen!2sin"
                                width="400" height="275" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                    </div>

                </div>
            </div>
            <div class="con_display">

                <div class="row">
                    <div class="col-md-7 mx-auto">
                        <div class="con_form" style="margin-bottom: 20px;">
                            <div class="form-container">
                                <div class="line left1"></div>
                                <div class="line left2"></div>
                                <div class="line left3"></div>
                                <div class="line left4"></div>
                                <div class="con_form_place">
                                    <form method="post" id="enquiry_frm"  action="{{ route('submit.enquiry') }}">
                                        @csrf
                                        <input type="hidden" id="country_id" name="country_id" value="99">
                                        <input type="hidden" id="page_nm" name="page_nm" value="">
                                        <h3 style="margin-bottom: 10px;">To Contact Us</h3>
                                        <div class="form_fileds mhmhm_frm_fld">
                                            <ul>
                                                <li class="wid_half">
                                                    <input type="text" id="txt_name" name="name"
                                                        data-validation="required"
                                                        data-validation-error-msg="Please enter your name"
                                                        placeholder="Full Name" value="">
                                                    <span id="txt_name_err" class="error" style="display:none"></span>

                                                </li>
                                                <li class="wid_half">
                                                    <input type="text" name="email" id="txt_email"
                                                        placeholder="Email Address" data-validation="required"
                                                        data-validation-error-msg="Please enter your email"
                                                        value="">
                                                    <span id="txt_email_err" class="error" style="display:none"></span>

                                                </li>

                                                <li>
                                                    <div class="hm_cn_hol home_frm_mobs">
                                                        <div class="coun_flag_form">
                                                            <img id="country_icon" src="" alt="flag">
                                                        </div>
                                                        <select id="hmx_country" class="form-control banner_country"
                                                            data-validation="required"
                                                            data-validation-error-msg="&lt;br&gt;&lt;br&gt;Please Select your country"
                                                            name="country" style="height:42px;">

                                                            <option value="" class="optionValue" data-mytag="">
                                                                --Select Country--</option>
                                                            <!-- <option  value="US"  class="optionValue" mytag='+1'>United States</option>  -->
                                                        </select>
                                                        <div class="mh_num_place">
                                                            <div class="hm_num">
                                                                <input type="hidden" id="phone_code" name="phone_code" value="+91">
                                                                <span id="countryCode" style="top:8px !important;">+91</span>
                                                                <input type="" id="banner_phone"class="form-control banner_phone hmm_nmnm" name="phone_no" type="number" placeholder="" style="width:140%;" data-validation="required"data-validation-error-msg="Please enter your phone"value="">
                                                                <span id="banner_phone_err" class="error" style="display:none"></span>
                                                              </div>
                                                            <input type="hidden" value="" id="country-code" name="country_code">
                                                        </div>
                                                        {{-- <span id="mx_Country_err" class="error" style="display:none"></span> --}}

                                                    </div>

                                                </li>

                                                <li>
                                                    <input type="text" id="txt_course" name="course"
                                                        placeholder="Course" data-validation="required"
                                                        data-validation-error-msg="Please enter your course"
                                                        value="">
                                                    <span id="txt_course_err" class="error" style="display:none"></span>

                                                </li>

                                                <li>
                                                    <textarea placeholder="Message" id="txt_message" name="message" class="" data-validation="required"
                                                        data-validation-error-msg="Please enter your message"></textarea>
                                                    <span id="txt_message_err" class="error" style="display:none"></span>

                                                </li>
                                                <!-- added new captcha-->
                                                <li>
                                                    <div class="g-recaptcha"
                                                        data-sitekey="{{ config('captcha.sitekey') }}"></div>
                                                    <span id="recaptcha-error" class="error" style="display:none"></span>
                                                </li>
                                                <li>
                                                    <input type="submit" name="btn_submit" id="btn_submit_frm"
                                                        value="Submit" class="con_sub">
                                                </li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                                <div class="line right1"></div>
                                <div class="line right2"></div>
                                <div class="line right3"></div>
                                <div class="line right4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main section end -->
    </body>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const countrySelect = document.getElementById("hmx_country");
        const countryCodeSpan = document.getElementById("countryCode");
        const phoneCodeInput = document.getElementById("phone_code");
        const countryIcon = document.getElementById("country_icon");

        // Country list with dialing codes and flag URLs
        const countries = [{
                name: "Afghanistan",
                code: "AF",
                dialCode: "+93",
                flag: "assets/images/flags/af.svg"
            },
            {
                name: "Albania",
                code: "AL",
                dialCode: "+355",
                flag: "assets/images/flags/al.svg"
            },
            {
                name: "Algeria",
                code: "DZ",
                dialCode: "+213",
                flag: "assets/images/flags/dz.svg"
            },
            {
                name: "Andorra",
                code: "AD",
                dialCode: "+376",
                flag: "assets/images/flags/ad.svg"
            },
            {
                name: "Angola",
                code: "AO",
                dialCode: "+244",
                flag: "assets/images/flags/ao.svg"
            },
            {
                name: "Argentina",
                code: "AR",
                dialCode: "+54",
                flag: "assets/images/flags/ar.svg"
            },
            {
                name: "Australia",
                code: "AU",
                dialCode: "+61",
                flag: "assets/images/flags/au.svg"
            },
            {
                name: "Austria",
                code: "AT",
                dialCode: "+43",
                flag: "assets/images/flags/at.svg"
            },
            {
                name: "Bangladesh",
                code: "BD",
                dialCode: "+880",
                flag: "assets/images/flags/bd.svg"
            },
            {
                name: "Belgium",
                code: "BE",
                dialCode: "+32",
                flag: "assets/images/flags/be.svg"
            },
            {
                name: "Brazil",
                code: "BR",
                dialCode: "+55",
                flag: "assets/images/flags/br.svg"
            },
            {
                name: "Canada",
                code: "CA",
                dialCode: "+1",
                flag: "assets/images/flags/ca.svg"
            },
            {
                name: "China",
                code: "CN",
                dialCode: "+86",
                flag: "assets/images/flags/cn.svg"
            },
            {
                name: "Denmark",
                code: "DK",
                dialCode: "+45",
                flag: "assets/images/flags/dk.svg"
            },
            {
                name: "Egypt",
                code: "EG",
                dialCode: "+20",
                flag: "assets/images/flags/eg.svg"
            },
            {
                name: "France",
                code: "FR",
                dialCode: "+33",
                flag: "assets/images/flags/fr.svg"
            },
            {
                name: "Germany",
                code: "DE",
                dialCode: "+49",
                flag: "assets/images/flags/de.svg"
            },
            {
                name: "India",
                code: "IN",
                dialCode: "+91",
                flag: "assets/images/flags/in.svg"
            },
            {
                name: "Indonesia",
                code: "ID",
                dialCode: "+62",
                flag: "assets/images/flags/id.svg"
            },
            {
                name: "Italy",
                code: "IT",
                dialCode: "+39",
                flag: "assets/images/flags/it.svg"
            },
            {
                name: "Japan",
                code: "JP",
                dialCode: "+81",
                flag: "assets/images/flags/jp.svg"
            },
            {
                name: "Malaysia",
                code: "MY",
                dialCode: "+60",
                flag: "assets/images/flags/my.svg"
            },
            {
                name: "Mexico",
                code: "MX",
                dialCode: "+52",
                flag: "assets/images/flags/mx.svg"
            },
            {
                name: "Netherlands",
                code: "NL",
                dialCode: "+31",
                flag: "assets/images/flags/nl.svg"
            },
            {
                name: "New Zealand",
                code: "NZ",
                dialCode: "+64",
                flag: "assets/images/flags/nz.svg"
            },
            {
                name: "Pakistan",
                code: "PK",
                dialCode: "+92",
                flag: "assets/images/flags/pk.svg"
            },
            {
                name: "Philippines",
                code: "PH",
                dialCode: "+63",
                flag: "assets/images/flags/ph.svg"
            },
            {
                name: "Russia",
                code: "RU",
                dialCode: "+7",
                flag: "assets/images/flags/ru.svg"
            },
            {
                name: "Saudi Arabia",
                code: "SA",
                dialCode: "+966",
                flag: "assets/images/flags/sa.svg"
            },
            {
                name: "Singapore",
                code: "SG",
                dialCode: "+65",
                flag: "assets/images/flags/sg.svg"
            },
            {
                name: "South Africa",
                code: "ZA",
                dialCode: "+27",
                flag: "assets/images/flags/za.svg"
            },
            {
                name: "South Korea",
                code: "KR",
                dialCode: "+82",
                flag: "assets/images/flags/kr.svg"
            },
            {
                name: "Spain",
                code: "ES",
                dialCode: "+34",
                flag: "assets/images/flags/es.svg"
            },
            {
                name: "Sweden",
                code: "SE",
                dialCode: "+46",
                flag: "assets/images/flags/se.svg"
            },
            {
                name: "Switzerland",
                code: "CH",
                dialCode: "+41",
                flag: "assets/images/flags/ch.svg"
            },
            {
                name: "Thailand",
                code: "TH",
                dialCode: "+66",
                flag: "assets/images/flags/th.svg"
            },
            {
                name: "Turkey",
                code: "TR",
                dialCode: "+90",
                flag: "assets/images/flags/tr.svg"
            },
            {
                name: "United Kingdom",
                code: "GB",
                dialCode: "+44",
                flag: "assets/images/flags/gb.svg"
            },
            {
                name: "United States",
                code: "US",
                dialCode: "+1",
                flag: "assets/images/flags/us.svg"
            },
            {
                name: "Vietnam",
                code: "VN",
                dialCode: "+84",
                flag: "assets/images/flags/vn.svg"
            },
            {
                name: "Zimbabwe",
                code: "ZW",
                dialCode: "+263",
                flag: "assets/images/flags/zw.svg"
            }
        ];


        // Populate country dropdown
        countries.forEach(country => {
            const option = document.createElement("option");
            option.value = country.code;
            option.textContent = `${country.name} (${country.dialCode})`;
            option.dataset.dialCode = country.dialCode;
            option.dataset.flag = country.flag;
            countrySelect.appendChild(option);
        });

        // Change country code and flag on selection
        countrySelect.addEventListener("change", function() {
            const selectedOption = countrySelect.options[countrySelect.selectedIndex];
            const dialCode = selectedOption.dataset.dialCode;
            const flag = selectedOption.dataset.flag;

            if (dialCode) {
                countryCodeSpan.textContent = dialCode;
                phoneCodeInput.value = dialCode;
            }
            if (flag) {
                countryIcon.src = flag;
                countryIcon.style.display = "inline";
            }
        });

        // Set default country to India
        countrySelect.value = "IN";
        countrySelect.dispatchEvent(new Event("change"));
    });
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $("#enquiry_frm").submit(function(event) {
            event.preventDefault(); // Prevent default form submission

            let isValid = true;

            // Name validation (Only letters, at least 3 chars)
            let name = $("#txt_name").val().trim();
            if (!/^[A-Za-z\s]{3,}$/.test(name)) {
                $("#txt_name_err").text("Name must be at least 3 characters.")
                    .show();
                isValid = false;
            } else {
                $("#txt_name_err").hide();
            }

            // Email validation
            let email = $("#txt_email").val().trim();
            let emailPattern = /^[a-zA-Z][a-zA-Z0-9._%+-]*@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

            if (!emailPattern.test(email)) {
                $("#txt_email_err").text("Please enter a valid email address.").show();
                isValid = false;
            } else {
                $("#txt_email_err").hide();
            }

            // Phone number validation (10 digits)
            let phone = $("#banner_phone").val().trim();
            if (!/^\d{10}$/.test(phone)) {
                $("#banner_phone_err").text("Phone number must be exactly 10 digits.").show();
                isValid = false;
            } else {
                $("#banner_phone_err").hide();
            }

            // Course validation
            let course = $("#txt_course").val().trim();
            if (course.length < 3 || course.length > 100) {
                $("#txt_course_err").text("Please enter your course.").show();
                isValid = false;
            } else {
                $("#txt_course_err").hide();
            }

            // Message validation
            let message = $("#txt_message").val().trim();
            if (message === "") {
                $("#txt_message_err").text("Please enter your message.").show();
                isValid = false;
            } else {
                $("#txt_message_err").hide();
            }

            // Google reCAPTCHA validation
            let recaptchaResponse = grecaptcha.getResponse();
            if (recaptchaResponse.length === 0) {
                $("#recaptcha-error").text("Please verify the captcha.").show();
                isValid = false;
            } else {
                $("#recaptcha-error").hide();
            }

            // If all validations pass, submit form via AJAX
            if (isValid) {
    $.ajax({
        url: "{{ route('submit.enquiry') }}",
        type: "POST",
        data: $("#enquiry_frm").serialize(),
        dataType: "json",
        success: function(response) {
            if (response.success) {
                Swal.fire({
                    title: "Success!",
                    text: response.message,
                    icon: "success",
                    confirmButtonText: "OK"
                }).then(() => {
                    $("#enquiry_frm")[0].reset();
                    grecaptcha.reset();
                });
            } else {
                Swal.fire({
                    title: "Error!",
                    text: "Something went wrong. Please try again.",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            }
        },
        error: function(xhr) {
            Swal.fire({
                title: "Error!",
                text: "An error occurred: " + xhr.responseText,
                icon: "error",
                confirmButtonText: "OK"
            });
        }
    });
}
        });
    });
</script>
