<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS start -->
        <link rel="stylesheet" type="text/css"   href="assets/css/bootstrap.min.css">
        <link  rel="stylesheet" type="text/css" href="assets/css/style.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link  rel="stylesheet" type="text/css" href="assets/css/owlcarousel.css" >
        <link  rel="stylesheet" type="text/css" href="assets/css/swiper.css" >
        <link  rel="stylesheet" type="text/css" href="assets/css//menu.css" >
        <link  rel="stylesheet" type="text/css" href="assets/css/menutoggle.css" >
        <link  rel="stylesheet" type="text/css" href="assets/css/menubar.css" >
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/main-menu.js"></script>
        <style type="text/css">
          .contact-bread {
              padding: 12px 0px;}
              .contact-bread li a {   
                   font-size: 14px;
                    }
              .contact-box{
                padding: 50px 0px;
              } 
              .contact-pb{}
              .contact-bg{    background: #083e6c;
    padding: 15px 0px;} 
              .contact-ul{    margin: 0px;
    text-align: end;}
              .contact-pb h3{
                color: #fff;
    font-size: 18px;
    margin: 0;
              }
              .contact-ul li{display: inline-block;
    padding-right: 10px;}
              .contact-ul li i{color: #fff;}
              .contact-ul li a{color: #fff;}    
        </style>
    </head>
    <body class="static-menu">
        <!-- Header start -->
        @include('frontend.layouts.header')
        <!-- Header end -->
        <!-- breadcrumbs -->
        <div class="breadcrumbs contact-bread">
            <div class="container">
                <div class="col-md-7">
                    <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- breadcrumbs -->
        <!-- main section-->
      <section class="contact-box">
          <div class="container">
               <!--  -->
               <div class="row contact-pb contact-bg">
                  <div class="col-md-6">
                    <h3>Contact Us</h3>
                  </div>
                  <div class="col-md-6">
                    <ul class="contact-ul">
                      <li><i class="fa fa-phone"></i> <a href="tel:+9199">+91-99</a></li>
                      <li><i class="fa fa-envelope"></i> <a href="mailto:info@cybarwind.com">info@cybarwind.com</a></li>
                    </ul>
                  </div>
               </div>
               <!--  -->
          </div>
      </section>
        <!-- main section end -->
        
        @include('frontend.layouts.footer')
    </body>
    <!-- Jquery code -->
    <script type="text/javascript" src="assets/js/carousel.js"></script>
    <script type="text/javascript" src="assets/js/swiper.js"></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>
    <!-- Jquery code -->
</html>