@extends('frontend.layouts.app')

@section('title', 'Resources-view')

@section('content')

    <body>
        <a id="button"></a>
        <!-- Header start -->
        <?php
        // include_once ('include/resv-header.php');
        ?>
        <!--  -->
        <!-- banner start -->
        <section class="sec_ban resource-detail-banner" id="resources-banner">
            <div class="home-ban">
                <div class="rs-img">
                    <img src="assets/images/resouces-bg-img.jpg" class="img-fluid rs-banner" alt="home banner">
                </div>
                <div class="over-h2">
                    <h1>Python</h1>
                    <p> The most effective learning system. World’s highest course completion rate.</p>

                </div>
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

                                <div class="resources-conetent rv-space" id="rv1">
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
                                <!--  -->
                                <div class="resources-conetentbg">
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
                                                <p id="name-error" style="color: red; font-size: 14px; margin-top: 5px;">
                                                </p>

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
                                                <p id="email-error" style="color: red; font-size: 14px; margin-top: 5px;">
                                                </p>

                                                <div class="comment-input">
                                                    <textarea placeholder="Message" name="comment" id="comment"></textarea>
                                                </div>

                                                <p id="comment-error" style="color: red; font-size: 14px; margin-top: 5px;">
                                                </p>
                                                <!-- Google reCAPTCHA -->
                                                <div class="g-recaptcha" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}">
                                                </div>
                                                <div class="comment-submit">
                                                    <input type="submit" value="Submit">
                                                </div>
                                            </form>
                                        </div>


                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <!--  -->

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="offer-sec-inn rv-space" id="rv4">

                            <div class="view_blog view_blog1 resouces-right">
                                <h4 class="btm-bdr blog-sideheaading">Top Trending Resources</h4>
                                <ul style="background: url('assets/images/image-bg-top.jpg') repeat fixed;">
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="resources-view.php"
                                            style="color: #000000;">python</a></li>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="resources-view.php"
                                            style="color: #000000;">WDFSDFDSFSDF</a></li>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="resources-view.php"
                                            style="color: #000000;">What is Agile and Scrum Methodology?</a></li>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="resources-view.php"
                                            style="color: #000000;">ZXCSDFS</a></li>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="resources-view.php"
                                            style="color: #000000;">What Is Agile Project Management?</a></li>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="resources-view.php"
                                            style="color: #000000;">Geolocations</a></li>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="resources-view.php"
                                            style="color: #000000;">javaaa</a></li>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="resources-view.php"
                                            style="color: #000000;">php</a></li>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="resources-view.php"
                                            style="color: #000000;">asdasdasd</a></li>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="resources-view.php"
                                            style="color: #000000;">Free eBook: Agile and Scrum Salary Report</a></li>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="resources-view.php"
                                            style="color: #000000;">richgghh</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </section>
        <!-- resouces details end -->
        <?php
        // include_once ('include/footer.php');
        ?>
        </div>
    </body>
@endsection
@push('scripts')
    <!-- Jquery code -->
    <a href="#resources-banner" class="scrollToTop" style="display: block;"><i class="fa fa-arrow-up"></i></a>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
    <!-- Include the reCAPTCHA API -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    {{-- <script src="https://www.google.com/recaptcha/enterprise.js?render=6Lcw_bYqAAAAABzx4sk7F5JhTHrLPGrNyDV8lGpj"></script> --}}
    {{-- 
<script>
    function onSubmit(event) {
        event.preventDefault(); // Prevent the form from submitting immediately

        grecaptcha.enterprise.ready(async () => {
            const token = await grecaptcha.enterprise.execute('6Lcw_bYqAAAAABzx4sk7F5JhTHrLPGrNyDV8lGpj', {action: 'submit_form'});

            // Now you can send the token along with the form data to the backend.
            const form = event.target;
            const hiddenTokenInput = document.createElement("input");
            hiddenTokenInput.type = "hidden";
            hiddenTokenInput.name = "g-recaptcha-response";
            hiddenTokenInput.value = token;
            form.appendChild(hiddenTokenInput);

            form.submit(); // Submit the form with the token
        });
    }
</script> --}}
    <script>
        function onSubmit(event) {
            event.preventDefault(); // Prevent the form from submitting immediately

            // Trigger reCAPTCHA validation before submission
            grecaptcha.execute();
        }
    </script>

    <!-- End of recaptcha -->

    <script>
        $('#comments-form').on('submit', function(e) {
            e.preventDefault();

            $('#name-error').text('');
            $('#email-error').text('');
            $('#comment-error').text('');

            // Validate the form before submitting
            var name = $('#name').val();
            var email = $('#email').val();
            var comment = $('#comment').val();
            // alert(name);
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
                                window.location.href =
                                    "{{ route('resources-category.list') }}";
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
@endpush
{{-- include_once 'include/right-menu-js.php' --}}
