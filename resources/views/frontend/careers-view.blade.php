@extends('frontend.layouts.app')

@section('title', 'Careers')

@section('content')

    <body id="main-body">
        <!-- Header start -->

        @include('frontend.layouts.cvd-header')
        <!-- banner start -->
        <section class="sec_ban resource-detail-banner" id="resources-banner">
            <div class="home-ban">
                <div class="rs-img">
                    <img src="{{ asset('assets/images/resouces-bg-img.jpg') }}" class="img-fluid rs-banner" alt="home banner">
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
                                        <p class="career-detail"><strong>Educational Background :</strong> {{ $careers->educational_background }}</p>
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
                            <form method="post" action="http://codecnetworks.in/codec/careers/sendapplymail">
                                <input type="text" class="form-control mb-3" placeholder="Name" name="name"
                                    required="">
                                <input type="email" class="form-control mb-3" placeholder="Email" name="email"
                                    required="">
                                <input type="text" class="form-control mb-3" placeholder="mobile" name="number"
                                    required="">
                                <textarea type="text" class="form-control mb-3" placeholder="Message" name="message" row="3"></textarea>
                                <div class="g-recaptcha mb-3" data-sitekey="6Lc8JLcqAAAAAKTbtJ5U4xzVGiOfKEJr_xst8Cep"></div>
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
    <script type="text/javascript" src="assets/js/common.js?v=1"></script>
    <script type="text/javascript" src="assets/js/mobile-menu.js"></script>
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
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6Lcw_bYqAAAAABzx4sk7F5JhTHrLPGrNyDV8lGpj"></script>

    <script>
        function onSubmit(event) {
            event.preventDefault(); // Prevent the form from submitting immediately

            grecaptcha.enterprise.ready(async () => {
                const token = await grecaptcha.enterprise.execute('6Lcw_bYqAAAAABzx4sk7F5JhTHrLPGrNyDV8lGpj', {
                    action: 'submit_form'
                });

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
    </script>
    <script>
        function onSubmit(event) {
            event.preventDefault(); // Prevent the form from submitting immediately

            // Trigger reCAPTCHA validation before submission
            grecaptcha.execute();
        }
    </script>

    <!-- End of recaptcha -->

    <script type="text/javascript">
        function addVersionToFiles() {
            var version = new Date().getTime();
            var links = document.getElementsByTagName('link');
            var scripts = document.getElementsByTagName('script');
            // Add version to CSS files
            for (var i = 0; i < links.length; i++) {
                var href = links[i].getAttribute('href');
                if (href && href.endsWith('.css')) {
                    links[i].setAttribute('href', href + '?v=' + version);
                }
            }
            // Add version to script files
            for (var i = 0; i < scripts.length; i++) {
                var src = scripts[i].getAttribute('src');
                if (src) {
                    scripts[i].setAttribute('src', src + '?v=' + version);
                }
            }
        }
        window.onload = function() {
            addVersionToFiles();
        };
    </script>
    @include('frontend.layouts.right-menu-js')
@endpush
