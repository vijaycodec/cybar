@extends('frontend.layouts.app')

@section('title', 'Resources-view')

@section('content')

    <body>
        <a id="body-main"></a>
        <!-- Header start -->
        @include('frontend.layouts.blogv-header')

        <!-- banner start -->
        <section class="sec_ban resource-detail-banner" id="resources-banner">
            <div class="home-ban">
                <div class="rs-img">
                    <img src="{{ asset('assets/images/resouces-bg-img.jpg') }}" class="img-fluid rs-banner" alt="home banner">
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
                                        <h2>What is Python ?</h2>
                                        <p>Python is a programming language. Which can be used in any operating system,
                                            Python is having wide range of application from web development,
                                            scientific and mathematical computing to graphical
                                            interface.</p>
                                        <p>Python was discovered by Guido Van Rossum
                                            in 1980s and it was first announced in
                                            1994it was named Python from the series of comedy
                                            Monty Python’s Flying Circus.</p>
                                        <h2>There are many features of Python such as:</h2>
                                        <ul>
                                            <li>Easy to learn</li>
                                            <li>Free and open source</li>
                                            <li>Portable</li>
                                            <li>High level Interpreted language</li>
                                            <li>Large standard library to solve common task</li>
                                            <li>Structured language</li>
                                            <li>Object oriented</li>
                                        </ul>
                                        <h2>Easy to learn :</h2>
                                        <p>Python is easy to learn as compared to other language like Java, C, C++,
                                            Javascript it is very easy to code in Python.
                                        </p>
                                        <h2>Free and open source :</h2>
                                        <p>Python is
                                            open source language, which means its source code is available to
                                            everyone, anyone can download it, change it, or use it. Python is
                                            free to download from its official website
                                            www.python.org</p>
                                        <h2>Portable :</h2>
                                        <p>There is no need to
                                            write one code to different machine, you can write code in Linux,
                                            Windows or Mac and you can easily run your written code in Linux,
                                            Windows or Mac.</p>
                                        <h2>High level Interpreted language
                                            :</h2>
                                        <p>High level languages
                                            are easy to understandable and user friendly, it is portable across
                                            various platform.</p>
                                        <h2>Large standard library to solve common task
                                            :</h2>
                                        <p>In Python libraries
                                            are use for solve common task so you don’t need to write code for
                                            every single thing.</p>
                                        <h2>Structured language :</h2>
                                        <p>This makes python
                                            more easy it comes with structured language so there is no need to
                                            make any structured language.</p>
                                        <h2>Object oriented :</h2>
                                        <p>
                                            In object oriented,
                                            structured language is fully supported. There is no need to define
                                            class variable.</p>
                                        <p>
                                            Programmers love
                                            Python Training&nbsp; because of how fast and easy
                                            it is to use. Python cuts development time in half with its simple
                                            to read syntax and easy compilation feature. Debugging your programs
                                            is a breeze in Python with its built in debugger. Using Python makes
                                            programmers more productive and their programs ultimately
                                            better.</p>
                                        <p>
                                            We are Best Institute
                                            for Python Training in Delhi NCR . CYBARWIND
                                            provides<a
                                                href="https://www.codecnetworks.com/Trainings/Application-Development/Python-Programming-Training-Course.php">
                                            </a>
                                            Python Training in Delhi,
                                            with Lab Facility. Python Training must be focused on providing
                                            practical knowledge about the development and programming tools and
                                            their implementation on a real time basis along with the theoretical
                                            awareness.</p>
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
                                            <form id="comments-form" method="POST" action="">
                                                @csrf <!-- Add CSRF token for security -->
                                                <div class="comment-input">
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="Full Name" id="name">
                                                </div>
                                              

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
                                                <div class="comment-input">
                                                    <textarea placeholder="Message" name="message" id="comment"></textarea>
                                                </div>
                                                <div class="g-recaptcha" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}">
                                                </div>

                                                <div class="comment-submit  custom-submit-style">
                                                    <input type="submit" value="Submit">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

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
                            @foreach ($trendings as  $index =>$resource)
                            <div class="test_mob_app custom-box" style="height: {{ $heights[$index % $totalHeights] }}">
                                <h2 class="custom-heading">
                                    {{ $resource->name }}
                                </h2>
                                <a href="{{ route('blog-view-trending', $resource->id) }}{{ $resource->name }}" class="test_mob_app_btn">
                                    Know more
                                </a>
                                <img src="{{ asset('assets/images/vapt-services.jpg') }}" class="custom-image">
    
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
{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Jquery code -->
    <script type="text/javascript">
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
    <script>
        $('#comments-form').on('submit', function(e) {
            e.preventDefault();

            $('#name-error').text('');
            $('#email-error').text('');
            $('#comment-error').text('');
            $('#recaptcha-error').text('');
            // Validate the form before submitting
            var name = $('#name').val();
            var email = $('#email').val();
            var comment = $('#comment').val();
            var recaptchaResponse = grecaptcha.getResponse(); // Get reCAPTCHA token
             //alert(recaptchaResponse);
            // console.log(name); // Log the name to debug
            var hasError = false;

            if (!name) {
                $('#name-error').text('Name is required.');
                hasError = true;
            }

            if (!email) {
                $('#email-error').text('email is required.');
                hasError = true;
            }

            if (!comment) {
                $('#comment-error').text('comment is required.');
                hasError = true;
            }



            if (!recaptchaResponse) {
                $('#recaptcha-error').text('Please complete the reCAPTCHA verification.');
                hasError = true;
            }

            if (hasError) return; // Stop if validation fails

            // Show confirmation alert
            Swal.fire({
                title: 'Are you sure?',
                text: "You are about to update this category!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, submit it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    var formData = $('#comments-form').serialize();
                    formData += &g-recaptcha-response=${recaptchaResponse}; // Append reCAPTCHA token
                    $.ajax({
                        url: "{{ route('resources-comment.store') }}",
                        method: "POST",
                        data: formData,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                'content') // Add CSRF token
                        },
                        // processData: false, // Important for file upload
                        // contentType: false, // Important for file upload
                        success: function(response) {
                            Swal.fire('Success!', response.message, 'success').then(() => {
                                // window.location.href =
                                //     "{{ route('resources-category.list') }}";
                                location.reload(); // Reload the page
                            });
                        },
                        error: function(xhr) {
                            if (xhr.status === 422) {
                                $('#name-error').text(xhr.responseJSON.errors.name[0]);
                                Swal.fire('Error!', 'Please fix validation errors.', 'error');
                            } else {
                                Swal.fire('Error!', 'Something went wrong. Try again later.',
                                    'error');
                            }
                        }
                    });
                }
            });
        });
    </script>
        @include('frontend.layouts.right-menu-js')
    <!-- Include the reCAPTCHA API -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        function onSubmit(event) {
            event.preventDefault(); // Prevent the form from submitting immediately

            // Trigger reCAPTCHA validation before submission
            grecaptcha.execute();
        }
    </script>
    <!-- End of recaptcha -->
@endpush
