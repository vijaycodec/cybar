@extends('frontend.layouts.app')

@section('title', $seoData['seo_title'])
@section('meta_description', $seoData['seo_description'])
@section('meta_keywords', $seoData['seo_keywords'])
@section('content')

    <body>
        <a id="body-main"></a>
        <!-- Header start -->
        @include('frontend.layouts.blogv-header')

        <!-- banner start -->
        <section class="sec_ban resource-detail-banner" id="resources-banner">
            <div class="home-ban">
                <div class="rs-img">
                    <img src="{{ asset('assets/images/resouces-bg-img.webp') }}" class="img-fluid rs-banner"
                        alt="home banner">
                </div>
                @if (isset($resource) && $resource)
                    <div class="over-h2">
                        <h1>{{ $resource->category->name }}</h1>
                        <p>{{ $resource->category->title }}</p>
                    </div>
                @else
                    <div class="over-h2">
                        <h1>{{ $category->name }}</h1>
                        <p>{{ $category->title }}</p>
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
                            {{-- <li><a href="{{ route('home') }}">Codec Networks</a></li> --}}
                            <li>
                                <a href="{{ route('home') }}" style="background-color: #14426e; padding: 0px 6px; display: inline-block;">
                                    <img src="{{ asset('assets/images/Home-Codec-Networks.png') }}" alt="Home Codec Networks Logo" title="Home Codec Networks">
                                </a>
                            </li>                                                   
                            <li><a href="{{ route('blogs') }}">Blog</a></li>
                            <li><a href="javascript:void(0)">{{ $category_slug }}</a></li>
                            <li><a href="javascript:void(0)">{{ $slug }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcromb end -->
        <!-- resouces details start -->
        <section class="sec_2 resources-sec resources-view">
            <div class="container">

                <div class="row">
                    <div class="col-sm-8 pdlr banner_sec module_content">
                        <div class="row">
                            <div class="col-sm-12">
                                @if (isset($resource) && $resource)
                                    <div class="resources-conetent rv-space custom-margin-leftabove" id="rv1">
                                        {!! $resource->description !!}
                                    </div>
                                @else
                                    <div class="resources-conetent rv-space custom-margin-leftabove" id="rv1">
                                        <h2>Data Not Found</h2>
                                        <p></p>
                                    </div>
                                @endif

                                <div class="resources-conetentbg  custom-margin-left">
                                    <div class="resources-conetent2">
                                        <p>Opinions expressed by Entrepreneur contributors are their own.</p>
                                        <div class="copy-right">
                                            <ul class="social-network">
                                                <li><a href="https://www.facebook.com/" rel="nofollow" class="icoFacebook"
                                                        target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li><a href="https://twitter.com/" rel="nofollow" class="icoTwitter"
                                                        target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li><a href="https://www.instagram.com//" rel="nofollow" class="icoInsta"
                                                        target="_blank" title="Instagram"><i
                                                            class="fa fa-instagram"></i></a></li>
                                                <li><a href="https://www.linkedin.com/company/" rel="nofollow"
                                                        class="icoLinkedin" target="_blank" title="linkedin"><i
                                                            class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="resources-conetent3 rv-space" id="rv3">
                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <h3>
                                            <!-- Your choice of data platform is critical. It will serve as the foundation

                                                                                    for your digital transformation, enabling you to gain actionable insight and
                                                                                    drive immense and measurable value back to the business. This white paper
                                                                                    highlights why Cloudera Enterprise is uniquely suited to the task. -->

                                            Comments
                                        </h3>
                                        <div class="comment-form">
                                            <form id="comments-form" method="POST"
                                                action="{{ route('resources-comment.store') }}">
                                                @csrf <!-- Add CSRF token for security -->
                                                <div class="comment-input">
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="Full Name" id="name">
                                                </div>
                                                <span id="name-error" style="color: red; font-size: 14px; margin-top: 5px;">
                                                </span>

                                                @if (isset($resource) && $resource)
                                                    <input type="hidden" class="form-control" name="resource_id"
                                                        value="{{ $resource->category->id }}">
                                                @else
                                                    <input type="hidden" class="form-control" name="resource_id"
                                                        value="{{ $category->id }}">
                                                @endif

                                                <div class="comment-input">
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="Email" id="email">
                                                </div>
                                                <span id="email-error"
                                                    style="color: red; font-size: 14px; margin-top: 5px;">
                                                </span>
                                                <div class="comment-input">
                                                    <textarea placeholder="Message" name="message" id="comment"></textarea>
                                                </div>
                                                <span id="comment-error"
                                                    style="color: red; font-size: 14px; margin-top: 5px;">
                                                </span>
                                                {{-- <div class="g-recaptcha" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}">
                                                </div>
                                                <span id="recaptcha-error"
                                                    style="color: red; font-size: 14px; margin-top: 5px;">
                                                </span> --}}

                                                <div class="comment-submit  custom-submit-style">
                                                    <input type="submit" value="Submit">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                {{-- <div class="blog-view">
                                    <a href="javascript:history.back()">Go Back</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4" id="rv4">
                        <div class="mb-4">
                            <h4>Trending Blogs</h4>
                        </div>
                        @php
                            $heights = ['400px', '300px', '200px', '300px'];
                            $totalHeights = count($heights);
                         @endphp
                        @foreach ($trendings as $index => $resource)
                            <div class="test_mob_app custom-box" style="height: {{ $heights[$index % $totalHeights] }}">
                                <h2 class="custom-heading">
                                    {{ $resource->sub_category }} {{ $resource->category->$slug }}
                                </h2>
                                <a href="{{ route('blog-view', ['category_slug' => $resource->category->slug, 'blog_slug' => $resource->slug]) }}" class="test_mob_app_btn">
                                    Know more
                                </a>
                                <img src="{{ asset('assets/images/vapt-services.webp') }}" class="custom-image">

                            </div>
                        @endforeach

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </section>
        <!-- resouces details end -->
        {{-- @include('frontend.layouts.footer') --}}
        </div>
        <a href="#body-main" class="scrollToTop"><i class="fa fa-arrow-up"></i></a>
    </body>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Jquery code -->
    <script type="text/javascript">
        $(document).ready(function () {
            "use strict";
            var offSetTop = 100;
            var $scrollToTopButton = $('.scrollToTop');
            //Check to see if the window is top if not then display button
            $(window).scroll(function () {
                if ($(this).scrollTop() > offSetTop) {
                    $scrollToTopButton.fadeIn();
                } else {
                    $scrollToTopButton.fadeOut();
                }
            });
        });
    </script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function () {
            $("#comments-form").submit(function (event) {
                event.preventDefault(); // Prevent default form submission

                let isValid = true;

                // Name validation (Only letters, at least 3 chars)
                let name = $("#name").val().trim();
                if (!/^[A-Za-z\s]{3,}$/.test(name)) {
                    $("#name-error").text("Full Name must be at least 3 characters.").show();
                    isValid = false;
                } else {
                    $("#name-error").hide();
                }

                // Email validation
                let email = $("#email").val().trim();
                let emailPattern = /^[a-zA-Z][a-zA-Z0-9._%+-]*@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                if (!emailPattern.test(email)) {
                    $("#email-error").text("Please enter a valid email address.").show();
                    isValid = false;
                } else {
                    $("#email-error").hide();
                }

                // Message validation
                let message = $("#comment").val().trim();
                if (message.length < 50 || message.length > 500) {
                    $("#comment-error").text("Message must be at least 50 characters.").show();
                    isValid = false;
                } else {
                    $("#comment-error").hide();
                }

                // Google reCAPTCHA validation
                // let recaptchaResponse = grecaptcha.getResponse();
                // if (recaptchaResponse.length === 0) {
                //     $("#recaptcha-error").text("Please verify the captcha.").show();
                //     isValid = false;
                // } else {
                //     $("#recaptcha-error").hide();
                // }

                // If all validations pass, submit form via AJAX
                if (isValid) {
                    $.ajax({
                        url: "{{ route('resources-comment.store') }}",
                        type: "POST",
                        data: $("#comments-form").serialize(),
                        dataType: "json",
                        success: function (response) {
                            if (response.success) {
                                Swal.fire({
                                    title: "Success!",
                                    text: response.message,
                                    icon: "success",
                                    confirmButtonText: "OK"
                                }).then(() => {
                                    $("#comments-form")[0].reset();
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
                        error: function (xhr) {
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

    @include('frontend.layouts.right-menu-js')


@endpush