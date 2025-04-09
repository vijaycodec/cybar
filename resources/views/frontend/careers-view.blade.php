@extends('frontend.layouts.app')

@section('title', $seoData['seo_title'])
@section('meta_description', $seoData['seo_description'])
@section('meta_keywords', $seoData['seo_keywords'])

@section('content')

    <body id="main-body">
        <!-- Header start -->

        @include('frontend.layouts.cvd-header')
        <!-- banner start -->
        <section class="sec_ban resource-detail-banner" id="resources-banner">
            <div class="home-ban">
                <div class="rs-img">
                    <img src="{{ asset('assets/images/resouces-bg-img.webp') }}" class="img-fluid rs-banner" alt="home banner">
                </div>

                @if (isset($careers) && $careers)
                    <div class="over-h2">
                        <h1>{{ $careers->subcategory }}</h1>

                    </div>
                @else
                    <div class="over-h2">
                        <h1>{{ $careers->subcategory }}</h1>

                    </div>
                @endif
            </div>
        </section>
        <!-- banner end -->
         <!-- Brecumb -->
         <section class="breadcromb desktop-view">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcromb-ul">
                            <li>
                                <a href="{{ route('home') }}" style="background-color: #14426e; padding: 5px 5px; display: flex; align-items: center; justify-content: center;">
                                    <img src="{{ asset('assets/images/Home-Codec-Networks.png') }}" 
                                         alt="Home Codec Networks Logo" 
                                         title="Home Codec Networks">
                                </a>
                            </li>   
                            <li><a href="{{ route('careers') }}">Career</a></li>
                            <li><a href="javascript:void(0)">{{ $category_slug }}</a></li>
                            <li><a href="javascript:void(0)">{{ $slug }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcromb end -->
        <!-- resouces details start -->
        <section class="sec_2 career-view">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 pdlr banner_sec module_content">
                        <div class="row">
                            @if (isset($careers) && $careers)
                                <div class="col-sm-12 cv-space1" id="cvd1">
                                    <h2>{{ $careers->subcategory }}</h2>
                                    <div class="job-des">
                                        <p>{!! $careers->short_desc !!}</p>

                                    </div>
                                    <div class="job-img">
                                        <img src="{{ asset('storage/uploads/backend/career/' . $careers->images) }}"
                                            alt="career Image" width="100">
                                    </div>
                                    <!--  -->
                                    <div class="job-detail">
                                        <p class="career-detail"><strong>Location :</strong> {{ $careers->location }}</p>
                                        <p class="career-detail"><strong>Educational Background :</strong>
                                            {{ $careers->educational_background }}</p>
                                        <p>{!! $careers->description !!}</p>


                                    </div>
                                    <!--  -->

                                    <div class="apply-btn">
                                        <a class="popup-form" href="#">Apply</a>
                                        <a class="appy-b" href="https://www.linkedin.com/">Apply With LinkedIn</a>
                                    </div>

                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4 forn-position">
                        <div class="form quick-form bg-scheme cv-space2 bg-scheme1" id="cvd2">
                            <h4>Apply Now</h4>
                            <p>Just submit your details and we’ll be in touch shortly.</p>
                            <form method="post" action="{{ route('job.career.store') }}">
                                @csrf
                                <input type="text" class="form-control mb-3" placeholder="Name" name="name">
                                <input type="email" class="form-control mb-3" placeholder="Email" name="email">
                                <input type="text" class="form-control mb-3" placeholder="mobile" name="phone_no">
                                <textarea type="text" class="form-control mb-3" placeholder="Message" name="message" row="3"></textarea>
                                {{-- <div class="g-recaptcha mb-3" data-sitekey="6Lc8JLcqAAAAAKTbtJ5U4xzVGiOfKEJr_xst8Cep"></div> --}}
                                <button class="btn btn-success btn-lg btn_save btn_action" id="btn_save" data-stype="back"
                                    title="Click to Submit">
                                    Submit
                                </button>
                            </form>
                        </div>


                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </section>
        <!-- resouces details end -->

    </body>

@endsection
<!-- Jquery code -->

<a href="#body-main" class="scrollToTop career-scroll-top"><i class="fa fa-arrow-up"></i></a>
@push('scripts')
    {{-- <script type="text/javascript" src="assets/js/common.js?v=1"></script>
    <script type="text/javascript" src="assets/js/mobile-menu.js"></script>
    <script type="text/javascript"> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            "use strict";
            var offSetTop = 100;
            var $scrollToTopButton = $('.scrollToTop');
            //Check to see if the window is top if not then display button
            $(window).scroll(function() {
                if ($(this).scrollTop() > offSetTop) {
                    $scrollToTopButton.fadeIn();
                } else {
                    $scrollToTopButton.fadeOut();
                }
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Include the reCAPTCHA API -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            $("#btn_save").click(function(event) {
                event.preventDefault(); // Prevent default form submission

                let isValid = true;

                // Name Validation: At least 3 characters, only letters & spaces
                let name = $("input[name='name']").val().trim();
                if (!/^[A-Za-z\s]{3,}$/.test(name)) {
                    showError("name", "Name must be at least 3 characters.");
                    isValid = false;
                } else {
                    hideError("name");
                }

                // Email Validation
                let email = $("input[name='email']").val().trim();
                let emailPattern = /^[a-zA-Z][a-zA-Z0-9._%+-]*@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                if (!emailPattern.test(email)) {
                    showError("email", "Please enter a valid email address.");
                    isValid = false;
                } else {
                    hideError("email");
                }

                // Mobile Validation: Exactly 10 digits
                let mobile = $("input[name='phone_no']").val().trim();
                if (!/^\d{10}$/.test(mobile)) {
                    showError("phone_no", "Mobile number must be exactly 10 digits.");
                    isValid = false;
                } else {
                    hideError("phone_no");
                }

                // Message Validation: Min 5 characters, Max 500 characters
                let message = $("textarea[name='message']").val().trim();
                if (message.length < 5 || message.length > 500) {
                    showError("message", "Message must be between 5 and 500 characters.");
                    isValid = false;
                } else {
                    hideError("message");
                }

                // Google reCAPTCHA validation
                // let recaptchaResponse = grecaptcha.getResponse();
                // if (recaptchaResponse.length === 0) {
                //     showError("recaptcha", "Please verify the reCAPTCHA.");
                //     isValid = false;
                // } else {
                //     hideError("recaptcha");
                // }

                // If all validations pass, submit form via AJAX
                if (isValid) {
                    $.ajax({
                        url: "{{ route('job.career.store') }}",
                        type: "POST",
                        data: $("form").serialize(),
                        success: function(response) {
                            Swal.fire({
                                title: "Success!",
                                text: "Form submitted successfully!",
                                icon: "success",
                                confirmButtonText: "OK"
                            }).then(() => {
                                $("form")[0].reset();
                                grecaptcha.reset();
                            });
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

            // Function to show error message
            function showError(fieldName, message) {
                if (!$(`.${fieldName}-error`).length) {
                    $(`input[name='${fieldName}'], textarea[name='${fieldName}']`).after(
                        `<p class="${fieldName}-error" style="color: red; font-size: 14px; margin-top: 5px;">${message}</p>`
                        );
                } else {
                    $(`.${fieldName}-error`).text(message).show();
                }
            }

            // Function to hide error message
            function hideError(fieldName) {
                $(`.${fieldName}-error`).remove();
            }
        });
    </script>



    @include('frontend.layouts.right-menu-js')
@endpush
