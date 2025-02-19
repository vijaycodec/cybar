<!DOCTYPE html>
<html lang="en">
<!-- Head Section Start -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Default Title')</title>

    <!-- CSS start -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/cns-plugin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ceh2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/menutoggle.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/menubar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/mobile-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/services.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/swiper.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/resources.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sample7.css') }}">
    <!-- CSS end -->

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/cns-plugin.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main-menu.js') }}"></script>
</head>



<!-- Head Section End -->
<body>

    <div class="main-content">
         {{-- Content of the page --}}
        @yield('content')
    </div>

    <!-- Footer section, included once across all pages -->
    @include('frontend.layouts.footer')



    <a href="#main-content-body" class="scrollToTop"><i class="fa fa-arrow-up"></i></a>
    <!--<a href="#resources-banner" class="scrollToTop" style="display: block;"><i class="fa fa-arrow-up"></i></a>-->

    <script src="/assets/js/slider.js"></script>
    {{-- <script type="text/javascript" src="{{ asset('assets/js/common.js?v-1') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('assets/js/homepage.js?v14') }}"></script>
    <script type="text/javascript" src=" {{ asset('assets/js/mobile-menu.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('assets/js/main.js?v=32') }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('assets/js/common.js?v-2') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/mobile-menu.js?v=2') }}"></script>
   
    @stack('scripts')

</body>

</html>
