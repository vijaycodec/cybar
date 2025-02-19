@extends('frontend.layouts.app')

@section('title', 'Career')

@section('content')

    <body id="body-main">
        <a id="button"></a>
        <!-- Header start -->

        @include('frontend.layouts.career-header')
        <!-- banner start -->
        <section class="sec_ban" id="career-banner">
            <div class="home-ban">
                <div class="rs-img">
                    <img src="assets/images/careers.jpg" class="img-fluid rs-banner" alt="home banner">
                </div>
                <div class="over-h2">
                    <h2>Careers</h2>
                    <p> The most effective learning system. World’s highest course completion rate.</p>

                </div>
            </div>
        </section>
        <!-- banner end -->
        <!-- tab menu start -->
        <section class="tab-sec menu-left-right resocues-tab desktop-view">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <!--  -->
                        <!-- Slider -->
                        <ul class="slider resocues owl-carousel owl-theme" id="resocues-menu">
                            <li><a href="#career1" class="active"> Business Development</a></li>
                            <li><a href="#career2">Technical Sales </a></li>
                            <li><a href="#career3">Product Specialist</a></li>
                            <li><a href="#career4">Digital Marketing</a></li>
                            <li><a href="#career5">Data Science</a></li>
                            <li><a href="#career6"> VAPT</a></li>
                            <li><a href="#career7">WAPT</a></li>
                            <li><a href="#career8"> Security Audit </a></li>
                            <li><a href="#career9">Managed Security</a></li>
                            <li><a href="#career10">SOC</a></li>
                        </ul>
                        <!-- control arrows -->
                        <!-- <div class="prev">
                  <i class='fa fa-caret-left'></i>
            </div>
            <div class="next">
                  <i class='fa fa-caret-right'></i>
           </div> -->
                        <!--  -->
                    </div>
                </div>
            </div>
        </section>
        <!-- tab menu end -->
        <section class="testimonials resc-sec pt-5 pb-3 desktop-view">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="wpb_text_column wpb_content_element">
                            <!-- caree start 1 -->
                            <div class="wpb_wrapper rbg1 rsp" id="career1">
                                <!--  -->
                                <div class="title-button header-font">
                                    <h3 class="style1"><i class="fa fa-2x fa-th"></i> Business Development</h3>
                                </div>
                                <!--  -->
                                <div class="career-cat-inn">
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>


                                </div>
                                <!--end resouces  -->
                            </div>
                            <!-- career end 1 -->
                            <!-- caree start 2 -->
                            <div class="wpb_wrapper rbg2 rsp" id="career2">
                                <!--  -->
                                <div class="title-button header-font">
                                    <h3 class="style1"><i class="fa fa-2x fa-th"></i> Technical Sales </h3>
                                </div>
                                <!--  -->
                                <div class="career-cat-inn">
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>


                                </div>
                                <!--end resouces  -->
                            </div>
                            <!-- career end 2 -->
                            <!-- caree start 3 -->
                            <div class="wpb_wrapper rbg3 rsp" id="career3">
                                <!--  -->
                                <div class="title-button header-font">
                                    <h3 class="style1"><i class="fa fa-2x fa-th"></i> Product Specialist </h3>
                                </div>
                                <!--  -->
                                <div class="career-cat-inn">
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>


                                </div>
                                <!--end resouces  -->
                            </div>
                            <!-- career end 3 -->
                            <!-- caree start 4 -->
                            <div class="wpb_wrapper rbg4 rsp" id="career4">
                                <!--  -->
                                <div class="title-button header-font">
                                    <h3 class="style1"><i class="fa fa-2x fa-th"></i> Digital Marketing </h3>
                                </div>
                                <!--  -->
                                <div class="career-cat-inn">
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>


                                </div>
                                <!--end resouces  -->
                            </div>
                            <!-- career end 4 -->
                            <!-- caree start 5 -->
                            <div class="wpb_wrapper rbg4 rsp" id="career5">
                                <!--  -->
                                <div class="title-button header-font">
                                    <h3 class="style1"><i class="fa fa-2x fa-th"></i> Data Science</h3>
                                </div>
                                <!--  -->
                                <div class="career-cat-inn">
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>


                                </div>
                                <!--end resouces  -->
                            </div>
                            <!-- career end 5 -->
                            <!-- caree start 6 -->
                            <div class="wpb_wrapper rbg4 rsp" id="career6">
                                <!--  -->
                                <div class="title-button header-font">
                                    <h3 class="style1"><i class="fa fa-2x fa-th"></i> VAPT</h3>
                                </div>
                                <!--  -->
                                <div class="career-cat-inn">
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>


                                </div>
                                <!--end resouces  -->
                            </div>
                            <!-- career end 6 -->
                            <!-- caree start 7 -->
                            <div class="wpb_wrapper rbg4 rsp" id="career7">
                                <!--  -->
                                <div class="title-button header-font">
                                    <h3 class="style1"><i class="fa fa-2x fa-th"></i> Web & Application Security</h3>
                                </div>
                                <!--  -->
                                <div class="career-cat-inn">
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>


                                </div>
                                <!--end resouces  -->
                            </div>
                            <!-- career end 7 -->
                            <!-- caree start 8 -->
                            <div class="wpb_wrapper rbg4 rsp" id="career8">
                                <!--  -->
                                <div class="title-button header-font">
                                    <h3 class="style1"><i class="fa fa-2x fa-th"></i> Security Audit </h3>
                                </div>
                                <!--  -->
                                <div class="career-cat-inn">
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>


                                </div>
                                <!--end resouces  -->
                            </div>
                            <!-- career end 8 -->
                            <!-- caree start 9 -->
                            <div class="wpb_wrapper rbg4 rsp" id="career9">
                                <!--  -->
                                <div class="title-button header-font">
                                    <h3 class="style1"><i class="fa fa-2x fa-th"></i> Managed Security </h3>
                                </div>
                                <!--  -->
                                <div class="career-cat-inn">
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>


                                </div>
                                <!--end resouces  -->
                            </div>
                            <!-- career end 9 -->
                            <!-- caree start 9 -->
                            <div class="wpb_wrapper rbg4 rsp" id="career10">
                                <!--  -->
                                <div class="title-button header-font">
                                    <h3 class="style1"><i class="fa fa-2x fa-th"></i> SOC </h3>
                                </div>
                                <!--  -->
                                <div class="career-cat-inn">
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="blog-cat-inn">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="blog-cat">
                                                    <a href="careers-view.php">
                                                        <h3>Penetration Tester / Exploiter</h3>
                                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC
                                                            in Information Security, CSC, ECE, IT Certifications…</p>
                                                    </a>
                                                    <div class="copy-right">
                                                        <ul>
                                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                                    title="Facebook"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                                    title="Google +"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>


                                </div>
                                <!--end resouces  -->
                            </div>
                            <!-- career end 9 -->
                            <!-- big data -->
                        </div>
                    </div>
                    <div class="col-md-4 sider-blog pr-0">
                        <!--search form -->
                        <div class="clearfix mb-4">
                            <div class="form quick-form bg-scheme mb-4 text-center">
                                <p>Search For Your Resources</p>
                                <form name="form_pages" id="form_pages"
                                    action="http://codecnetworks.in/codec/course_resources">
                                    <div id="prefetch-resource">
                                        <!--<input type="text" name="q" id="filter" value="" class="form-control input-lg mr-sm-2 typeahead form-control mb-3" placeholder="Search Resources..." />-->

                                        <input type="text" name="q" id="filter" value=""
                                            class="form-control input-lg mr-sm-2 typeahead form-control mb-3"
                                            placeholder="Search Resources..." />
                                    </div>
                                    <button class="btn btn-success btn-lg btn_save btn_action" data-stype="back"
                                        title="Click to Submit">
                                        <!--<button class="btn btn-success btn-lg btn_save btn_action" type="button"  title="Click to Submit">-->
                                        Search
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- search form ends -->
                        <div class="offer-sec-inn">
                            <div class="view_blog">
                                <h4 class="btm-bdr">Top Viewed Career</h4>
                                <ul>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a
                                            href="careers-view.php">Penetration Tester / Exploiter</a></li>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a
                                            href="careers-view.php">Information Security Engineer</a></li>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a
                                            href="careers-view.php">Telecom Security Consultant / Mobile Application
                                            Security</a></li>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a
                                            href="careers-view.php">Penetration Tester</a></li>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a
                                            href="careers-view.php">Senior Engineer - Professional Services</a></li>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a
                                            href="careers-view.php">Security Operations/VAPT/Malware Detections/Incident
                                            Investigations</a></li>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i><a
                                            href="careers-view.php">Application Security</a></li>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a
                                            href="careers-view.php">VAPT Analyst , Penetration Testing, Vulnerability
                                            Assessment</a></li>
                                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a
                                            href="careers-view.php">VAPT Analyst , Penetration Testing, Vulnerability
                                            Assessment</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <!--  -->
        <section class="mobile-view">

            <!-- career 1 start -->

            <!-- career 1 end -->
            <!-- career 1 start -->
            <div class="rbg1 m-career" id="m-career1">
                <div class="career-title">
                    <h3> Business Development</h3>
                </div>
                <div class="carousel-wrap">
                    <div class="owl-carousel11 owl-carousel owl-theme">
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter" title="Twitter"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle" title="Google +"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter" title="Twitter"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle" title="Google +"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter" title="Twitter"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="navigation-count11" class="count-nav-box"></div>
                </div>
            </div>
            <!-- career 1 end -->
            <!-- career 2 start -->
            <div class="rbg2 m-career" id="m-career2">
                <div class="career-title">
                    <h3> Technical Sales </h3>
                </div>
                <div class="carousel-wrap">
                    <div class="owl-carousel2 owl-carousel owl-theme">
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="navigation-count2" class="count-nav-box"></div>
                </div>
            </div>
            <!-- career 2 end -->
            <!-- career 3 start -->
            <div class="rbg3 m-career" id="m-career3">
                <div class="career-title">
                    <h3> Product Specialist </h3>
                </div>
                <div class="carousel-wrap">
                    <div class="owl-carousel3 owl-carousel owl-theme">
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="navigation-count3" class="count-nav-box"></div>
                </div>
            </div>
            <!-- career 3 end -->
            <!-- career 4 start -->
            <div class="rbg4 m-career" id="m-career4">
                <div class="career-title">
                    <h3> Digital Marketing </h3>
                </div>
                <div class="carousel-wrap">
                    <div class="owl-carousel4 owl-carousel owl-theme">
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="navigation-count4" class="count-nav-box"></div>
                </div>
            </div>
            <!-- career 4 end -->
            <!-- career 5 start -->
            <div class="rbg5 m-career" id="m-career5">
                <div class="career-title">
                    <h3>Data Science</h3>
                </div>
                <div class="carousel-wrap">
                    <div class="owl-carousel5 owl-carousel owl-theme">
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="navigation-count5" class="count-nav-box"></div>
                </div>
            </div>
            <!-- career 5 end -->
            <!-- career 6 start -->
            <div class="rbg6 m-career" id="m-career6">
                <div class="career-title">
                    <h3> VAPT</h3>
                </div>
                <div class="carousel-wrap">
                    <div class="owl-carousel6 owl-carousel owl-theme">
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="navigation-count6" class="count-nav-box"></div>
                </div>
            </div>
            <!-- career 6 end -->
            <!-- career 7 start -->
            <div class="rbg7 m-career" id="m-career7">
                <div class="career-title">
                    <h3> WAPT</h3>
                </div>
                <div class="carousel-wrap">
                    <div class="owl-carousel7 owl-carousel owl-theme">
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="navigation-count7" class="count-nav-box"></div>
                </div>
            </div>
            <!-- career 7 end -->
            <!-- career 8 start -->
            <div class="rbg1 m-career" id="m-career8">
                <div class="career-title">
                    <h3> Security Audit </h3>
                </div>
                <div class="carousel-wrap">
                    <div class="owl-carousel8 owl-carousel owl-theme">
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="navigation-count8" class="count-nav-box"></div>
                </div>
            </div>
            <!-- career 8 end -->
            <!-- career 9 start -->
            <div class="rbg2 m-career" id="m-career9">
                <div class="career-title">
                    <h3> Managed Security </h3>
                </div>
                <div class="carousel-wrap">
                    <div class="owl-carousel9 owl-carousel owl-theme">
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="navigation-count9" class="count-nav-box"></div>
                </div>
            </div>
            <!-- career 9 end -->
            <!-- career 10 start -->
            <div class="rbg3 m-career" id="m-career10">
                <div class="career-title">
                    <h3> SOC </h3>
                </div>
                <div class="carousel-wrap">
                    <div class="owl-carousel10 owl-carousel owl-theme">
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-cat-inn">
                                <div class="blog-cat">
                                    <a href="careers-view.php">
                                        <h3>Penetration Tester / Exploiter</h3>
                                        <p>Location : Delhi, NCR Educational Background: B.E, B. Tech, B.SC in Information
                                            Security, CSC, ECE, IT Certifications…</p>
                                    </a>
                                    <div class="copy-right">
                                        <ul>
                                            <li><a target="_blank" href="#" class="icoFacebook"
                                                    title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoTwitter"
                                                    title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="#" class="icoGoogle"
                                                    title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" href="#" title="linkedin"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="navigation-count10" class="count-nav-box"></div>
                </div>
            </div>
            <!-- career 10 end -->
        </section>
        <!--  -->
        <div class="offer-sec-inn mobile-view offer-sec-inn1 career-space" id="tvc">
            <div class="view_blog">
                <h4 class="btm-bdr">Top Viewed Career</h4>
                <ul>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="careers-view.php">Penetration
                            Tester / Exploiter</a></li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="careers-view.php">Information
                            Security Engineer</a></li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="careers-view.php">Telecom
                            Security Consultant / Mobile Application Security</a></li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="careers-view.php">Penetration
                            Tester</a></li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="careers-view.php">Senior
                            Engineer - Professional Services</a></li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="careers-view.php">Security
                            Operations/VAPT/Malware Detections/Incident Investigations</a></li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="careers-view.php">Application
                            Security</a></li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="careers-view.php">VAPT Analyst ,
                            Penetration Testing, Vulnerability Assessment</a></li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="careers-view.php">VAPT Analyst ,
                            Penetration Testing, Vulnerability Assessment</a></li>
                </ul>
            </div>
        </div>
        <!--  -->
        <section class="carr-add">
            <div class="container">
                <div class="col-sm-12 txt-center centered-txt-banner">
                    <div class="inner-text-div">
                        <h3 class="text-center text-white">“With CYBARWIND, you get the best of both worlds—the fast pace,
                            innovative world of a start-up, but with the funding and talent that allows the company to have
                            a bigger impact on the next generation of data technology than most of the large legacy IT
                            vendors.” — Cloudera employee</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-wrap-cod career-space" id="team">
            <div class="container">
                <div class="col-md-10 offset-sm-1 pd_34 text-center team-sec-new">
                    <div class="title section mb-5">
                        <h2 class="mb-2">Teams</h2>
                        <p>There are many exciting and innovative career opportunities at Cloudera. Which one is right for
                            you? We invite you to take a closer look at some of these great opportunities and see where you
                            fit in best.
                        </p>
                    </div>
                    <div class="desktop-view">
                        <div class="row">
                            <div class="col-sm-3 col-6">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-building"></i>
                                        <span>University Recruiting</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-gift"></i>
                                        <span>Sales</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-rocket"></i>
                                        <span>Engineering</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-users"></i>
                                        <span>G&amp;A</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-university"></i>
                                        <span>Marketing</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-binoculars"></i>
                                        <span>Product</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-bookmark-o"></i>
                                        <span>Support</span>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- mobile -view -->
                    <div class="mobile-view">
                        <div class="owl-carousel1 owl-carousel owl-theme">
                            <div class="item">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-building"></i>
                                        <span>University Recruiting</span>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-gift"></i>
                                        <span>Sales</span>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-rocket"></i>
                                        <span>Engineering</span>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-users"></i>
                                        <span>G&amp;A</span>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-university"></i>
                                        <span>Marketing</span>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-binoculars"></i>
                                        <span>Product</span>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon-fiels">
                                    <a href="#">
                                        <i class="fa fa-bookmark-o"></i>
                                        <span>Support</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--  mobile view end-->

                </div>
            </div>

        </section>
        <section class="sec-wrap-cod bg-color-gray">
            <div class="container">
                <div class="col-sm-12">
                    <h4>Are you looking for skilled professional?</h4>
                    <h5>Look no more!</h5>
                    <p>At Edureka, we have thousands of experienced professionals as well as freshers, with new skills
                        looking for a career changeover. Connect with us to get the right talent you are looking for!</p>
                    <p>Our students are proficient professionals who have taken the initiative to learn essential new skills
                        through our career-oriented program.</p>
                    <h4>You know you have come to the right place, if:</h4>
                    <ol>
                        <li>You are looking for professionals with hands-on experience in relatively new technologies.</li>
                        <li>You are looking for professionals with guaranteed experience and expertise in technologies.</li>
                        <li>You are looking for professionals who are updated and industry-relevant.</li>
                    </ol>
                    <p>Update us on your open positions and we'll put them in front of an ocean of talented and qualified
                        practitioners. We’re happy to provide you with more details about the hiring process. Just fill in
                        the form and one of our representative will get back to you.</p>
                </div>
            </div>
        </section>
        <section class="sec-wrap-cod career-space" id="apply-now">
            <div class="container">
                <form class="form-horizontal" action="http://codecnetworks.in/codec/careers/sendmail" method="POST">

                    <h4>Fill in the form below</h4>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6">

                                <h4>Job Details</h4>
                                <div class="form-group">
                                    <input type="text" name="designation" class="form-control"
                                        placeholder="Job Title or designation">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="profile" class="form-control"
                                        placeholder="Desired candidate profile">
                                </div>
                                <div class="form-group">
                                    <select class="browser-default custom-select" name="experience">
                                        <option value="">Min work Exp.</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="browser-default custom-select" name="currency">
                                        <option value="">Select Currency</option>
                                        <option value="1">inr</option>
                                        <option value="2">dolar</option>
                                        <option value="3">euro</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <h4>Contact Person Details</h4>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="company"
                                        placeholder="Company Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Name"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="number" placeholder="Mobile"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email"
                                        required="">
                                </div>
                                <div class="control-group buttons mb-2">
                                    <div class="controls">
                                        <!--  <button class="btn btn-success" type="submit">Post Job</button>-->
                                        <input type="submit" class="btn btn-success" value="Post Job">
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </form>
            </div>
        </section>

        {{-- <a href="#body-main" class="scrollToTop" style="display: block;"><i class="fa fa-arrow-up"></i></a> --}}
        {{-- @include('frontend.layouts.footer') --}}
        </div>
    </body>

@endsection
@push('scripts')
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
    <script type="text/javascript">
        //
        $('.menu-left-right ul li a').on('click', function(e) {
            var target = this.hash,
                $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - 100
            }, 100, 'swing', function() {
                window.location.hash = target;
            });
        });
        $(document).ready(function() {
            $('.menu-left-right ul li a').click(function() {
                $('li a').removeClass("active");
                $(this).addClass("active");
            });
        });
        //
    </script>
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
    <script type="text/javascript">
        $(document).ready(function() {
            function initializeCarousel(carouselClass, navigationCountId) {
                $(carouselClass).owlCarousel({
                    loop: true,
                    margin: 20,
                    dots: true,
                    nav: true,
                    navText: [
                        "<i class='fa fa-angle-left'></i>",
                        "<i class='fa fa-angle-right'></i>"
                    ],
                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 3
                        }
                    },
                    onInitialized: function(event) {
                        updateNavigationCount(event, navigationCountId);
                    },
                    onChanged: function(event) {
                        updateNavigationCount(event, navigationCountId);
                    }
                });
            }

            function updateNavigationCount(event, navigationCountId) {
                if (!event.namespace) {
                    return;
                }
                var carousel = event.relatedTarget;
                $("#" + navigationCountId).html(carousel.relative(carousel.current()) + 1 + '/' + carousel.items()
                    .length);
            }

            initializeCarousel('.owl-carousel1', "navigation-count1");
            initializeCarousel('.owl-carousel2', "navigation-count2");
            initializeCarousel('.owl-carousel3', "navigation-count3");
            initializeCarousel('.owl-carousel4', "navigation-count4");
            initializeCarousel('.owl-carousel5', "navigation-count5");
            initializeCarousel('.owl-carousel6', "navigation-count6");
            initializeCarousel('.owl-carousel7', "navigation-count7");
            initializeCarousel('.owl-carousel8', "navigation-count8");
            initializeCarousel('.owl-carousel9', "navigation-count9");
            initializeCarousel('.owl-carousel10', "navigation-count10");
            initializeCarousel('.owl-carousel11', "navigation-count11");

        });
    </script>
    <script>
        $("#resocues-menu").owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            dots: false,
            navText: ["<div class='prev'><i class='fa fa-caret-left'></i></div>",
                "<div class='next'><i class='fa fa-caret-right'></i></div>"
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                900: {
                    items: 6
                },
                1200: {
                    items: 6
                }
            }
        });
    </script>


    @include('frontend.layouts.right-menu-js')
@endpush
