@extends('frontend.layouts.app')

@section('title', 'NewsLetter-view')

@section('content')

    <body>
        <a id="body-main"></a>
        <!-- Header start -->
        @include('frontend.layouts.header')
        <!-- Header end -->
        <!-- banner start -->
        <section class="sec_ban resource-detail-banner" id="resources-banner">
            <div class="home-ban">
                <div class="rs-img">
                    <img src="{{ asset('assets/images/resouces-bg-img.jpg') }}" class="img-fluid rs-banner"
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
                                @endif
                                <div class="blog-view">
                                    <a href="javascript:history.back()">Go Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4" id="rv4">
                        <div class="mb-4">
                            <h4>Trending Newsletters</h4>
                        </div>
                        @php
                        $heights = ['400px', '300px', '200px', '300px'];
                        $totalHeights = count($heights);
                        @endphp
                        @foreach ($trendings as $index =>$resource)
                        <div class="test_mob_app custom-box" style="height: {{ $heights[$index % $totalHeights] }}">
                            <h2 class="custom-heading">
                              {{ $resource->name }}
                            </h2>
                            <a href="{{ route('newsletter-view-trending', $resource->id) }}" class="test_mob_app_btn">
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
    {{--
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
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
    <script>
        $('#comments-form').on('submit', function (e) {
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
                    formData += & g - recaptcha - response=${ recaptchaResponse }; // Append reCAPTCHA token
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
                        success: function (response) {
                            Swal.fire('Success!', response.message, 'success').then(() => {
                                // window.location.href =
                                //     "{{ route('resources-category.list') }}";
                                location.reload(); // Reload the page
                            });
                        },
                        error: function (xhr) {
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